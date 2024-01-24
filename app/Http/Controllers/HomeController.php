<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $count = Menu::all()->count();
        $dishes = Menu::select('id', 'name', 'price', 'description', 'image')
                ->orderBy('id', 'desc')
                ->paginate(8);

        $categories = Category::select('id','name')->get();

        return view('home', compact('count', 'dishes', 'categories'));
    }
}
