<?php

namespace App\Http\Controllers\Restaurant;

use Exception;
use App\Models\Menu;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\MenuRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\MenuEditRequest;

class MenuController extends Controller
{

    public function index()
    {
        return view('restaurant.menu');
    }

    public function create()
    {
        $categories = Category::select('id', 'name')->get();

        return view('menu.create' , compact('categories'));
    }

    public function store(MenuRequest $request)
    {
        try{
            $user = auth()->user();
            $restaurant = $user->restaurant;
            $file = $request->file('file');
            $filename = uniqid() . "_" . $file->getClientOriginalName();
            $file->move(public_path("/uploads/"), $filename);

            $menu = $restaurant->menuItems()->create([
                'name' => $request->input('name'),
                'category_id' => $request->input('category'),
                'description' => $request->input('description'),
                'price' => $request->input('price'),
                'image' => $filename,
            ]);

            return redirect()->route('menu.create')->with('success', 'Successfully Inserted');
        }catch(Exception $e){
            return redirect()->route('menu.create')->with('error', 'Error: ' . $e->getMessage());
        }
    }

    public function edit(string $id)
    {
        $dish = Menu::findOrFail($id);
        $categories = Category::select('id', 'name')->get();

        return view('menu.edit', compact('dish', 'categories'));
    }

    public function update(MenuEditRequest $request, string $id)
    {
        try {
            $dish = Menu::findOrFail($id);
        
            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $filename = uniqid() . '_' . $file->getClientOriginalName();
                $file->move(public_path('/uploads/'), $filename);
        
                $oldImage = $dish->image;
                if (file_exists(public_path('/uploads/') . $oldImage)) {
                    unlink(public_path('/uploads/') . $oldImage);
                }
            } else {
                $filename = $dish->image;
            }
            // dd($filename);
        
            $dish->update([
                'name' => $request->input('name'),
                'category_id' => $request->input('category'),
                'description' => $request->input('description'),
                'price' => $request->input('price'),
                'image' => $filename,
            ]);
        
            return redirect()->route('myRestaurant')->with('success', 'Successfully Updated');
        } catch (Exception $e) {
            return redirect()->route('myRestaurant')->with('error', 'Error: ' . $e->getMessage());
        }
        
    }

    public function destroy(string $id)
    {
        try {
            $dish = Menu::findOrFail($id);
            $dish->delete();
            return redirect()->route('myRestaurant')->with('success', 'Successfully Deleted');
        } catch (Exception $e) {
            return redirect()->route('myRestaurant')->with('error', 'Error: ' . $e->getMessage());
        }
    }


    public function restore(string $id)
    {
        try{
            $dish = Menu::onlyTrashed()->findOrFail($id);
            $dish->restore();
            return redirect()->route('myRestaurant')->with('success', 'Successfully Restored');
        }catch(Exception $e){
            return redirect()->route('myRestaurant')->with('error', 'Error: ' . $e->getMessage());
        }
    }

    public function forceDestroy(string $id)
    {
        try{
            $dish = Menu::onlyTrashed()->findOrFail($id);
            $image = $dish->image;
            if (file_exists(public_path('/uploads/') . $image)) {
                unlink(public_path('/uploads/') . $image);
            }
            $dish->forceDelete();
            return redirect()->route('myRestaurant')->with('success', 'Successfully Deleted');
        }catch(Exception $e){
            return redirect()->route('myRestaurant')->with('error', 'Error: ' . $e->getMessage());
        }
    }

    public function detail(string $id)
    {
        $dish = Menu::select('id', 'restaurant_id', 'name', 'description', 'price', 'image')->findOrFail($id);
        //dd($dish);

        return view('menu.detail', compact('dish'));
    }

    public function viewDetail(string $id)
    {
        $dish = Menu::select('name', 'description', 'price', 'image')->findOrFail($id);

        return view('menu.detail', compact('dish'));
    }
}