<?php

namespace App\Http\Controllers\Restaurant;

use Exception;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\RestaurantRequest;
use App\Http\Requests\RestaurantEditRequest;

class RestaurantController extends Controller
{
    

    public function create()
    {
        return view('restaurant.create');
    }

    public function store(RestaurantRequest $request)
    {
        try{
            $files = $request->file("file");
            $fileAry = [];

            if ($files) {
                foreach ($files as $file) {
                    $filename = uniqid() . "_" . $file->getClientOriginalName();
                    array_push($fileAry, $filename);
                    $file->move(public_path("/uploads/"), $filename);
                }
            }
            
            Restaurant::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'address' => $request->input('address'),
                'opening_hour' => $request->input('opening_hour'),
                'closing_hour' => $request->input('closing_hour'),
                'image' => $fileAry ? serialize($fileAry) : null,
            ]);
            return redirect()->route('restaurant.create')->with('success', 'Successfully Inserted');
        }catch(Exception $e){
            return redirect()->route('restaurant.create')->with('error', 'Insertion Failed');
        }
    }

    public function showRestaurantList()
    {
        $restaurants = Restaurant::select('id', 'name', 'email', 'address', 'phone')->withTrashed()->get();
        return view('restaurant.list', compact('restaurants'));
    }

    public function edit(string $id)
    {
        $restaurant = Restaurant::findOrFail($id);
        return view('restaurant.edit', compact('restaurant'));
    }

    public function update(RestaurantEditRequest $request, string $id)
    {
        try{
            $restaurant = Restaurant::findOrFail($id);

            if ($request->hasFile('file')) {
                $files = $request->file('file');
                $fileNames = [];

                foreach ($files as $file) {
                    $filename = uniqid() . '_' . $file->getClientOriginalName();
                    $file->move(public_path('/uploads/'), $filename);
                    $fileNames[] = $filename;
                }

                foreach (unserialize($restaurant->image) as $oldImage) {
                    if (file_exists(public_path('/uploads/') . $oldImage)) {
                        unlink(public_path('/uploads/') . $oldImage);
                    }
                }

                $restaurant->image = serialize($fileNames);
            }
            
            $restaurant->update([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'address' => $request->input('address'),
                'opening_hour' => $request->input('opening_hour'),
                'closing_hour' => $request->input('closing_hour'),
                'image' => $restaurant->image ?? $restaurant->getOriginal('image'),
            ]);
            return redirect()->route('restaurant.list')->with('success', 'Successfully Updated');
        }catch(Exception $e){
            return redirect()->route('restaurant.list')->with('error', 'Update Failed');
        }
    }

    public function destroy(string $id)
    {
        try{
            $restaurant = Restaurant::findOrFail($id);
            $images = @unserialize($restaurant->image);

            if ($images && is_array($images)) {
                foreach ($images as $image) {
                    if (file_exists(public_path('/uploads/') . $image)) {
                        unlink(public_path('/uploads/') . $image);
                    }
                }
            }
            $restaurant->delete();
            return redirect()->route('restaurant.list')->with('success', 'Successfully Deleted');
        }catch(Exception $e){
            return redirect()->route('restaurant.list')->with('error', $e->getMessage());
        }
    }

    public function restore(string $id)
    {
        $restaurant = Restaurant::onlyTrashed()->findOrFail($id);
        $restaurant->restore();
        return redirect()->route('restaurant.list')->with('success', 'Successfully Restored');
    }

    public function showAllRestaurant()
    {
        return view('restaurant.index');
    }

    public function showMenu()
    {
        return view('restaurant.menu');
    }

    public function showDetail()
    {
        return view('restaurant.detail');
    }

    public function showOrder()
    {
        return view('restaurant.orderList');
    }

}
