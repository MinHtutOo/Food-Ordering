<?php

namespace App\Http\Controllers\Restaurant;

use Exception;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::select('id', 'name')->withTrashed()->get();
        return view('category.index', compact('categories'));
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(CategoryRequest $request)
    {
        try{
            Category::create([
                'name' => $request->input('name'),
            ]);
            return redirect()->route('category.create')->with('success', 'Successfully Inserted');
        }catch(Exception $e){
            return redirect()->route('category.create')->with('error', 'Insertion Failed');
        }
    }

    public function edit(string $id)
    {
        try{
            $category = Category::findOrFail($id);

            return view('category.edit', compact('category'));
        }catch(Exception $e){
            return redirect()->route('category.index')->with('error', 'Category Not Found');
        }
    }

    public function update(CategoryRequest $request, string $id)
    {
        try{
            $category = Category::findOrFail($id);
            $category->update([
                'name' => $request->input('name'),
            ]);
            return redirect()->route('category.index')->with('success', 'Successfully Updated');
        }catch(Exception $e){
            return redirect()->route('category.edit')->with('error', 'Update Failed');
        }
    }

    public function destroy(string $id)
    {
        try{
            $category = Category::findOrFail($id);
            $category->delete();
            return redirect()->route('category.index')->with('success', 'Successfully Deleted');
        }catch(Exception $e){
            return redirect()->route('category.index')->with('error', 'Deletion Failed');
        }
    }

    public function restore(string $id)
    {
        try{
            $category = Category::withTrashed()->findOrFail($id);
            $category->restore();
            return redirect()->route('category.index')->with('success', 'Successfully Restored');
        }catch(Exception $e){
            return redirect()->route('category.index')->with('error', 'Restore Failed');
        }
    }
}
