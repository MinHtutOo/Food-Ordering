<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // public function index()
    // {
    //     $dishes = Menu::select('id', 'name', 'price', 'description', 'image')
    //                     ->orderBy('id', 'desc')
    //                     ->paginate(6);

    //     $count = Menu::count();

    //     $categories = Category::select('id','name')->get();
    //     return view('home', compact('dishes', 'categories', 'count'));
    // }

    public function index()
    {
        $count = Menu::count();

        $categories = Category::with('menuItems')->get();

        // Get all items for "all items" tab
        $allItems = Menu::select('id', 'name', 'price', 'description', 'image')
            ->orderBy('id', 'desc')
            ->paginate(12);

        // Paginate menuItems for each category
        foreach ($categories as $category) {
            $category->menuItems = $category->menuItems()
            ->orderBy('id', 'desc')
            ->paginate(8);
        }

        return view('home', compact('allItems', 'categories', 'count'));
    }


}
