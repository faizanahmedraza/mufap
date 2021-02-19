<?php

namespace App\Http\Controllers\Dashboard\Funds;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dashboard\Funds\Category;

class CategoryController extends Controller
{
    public function index() {
        $category = Category::get();
        return view('dashboard.funds.category', ['categories'=> $category]);
    }

    public function add(Request $request) {
        $request->validate([
            'category_name' => 'required'
        ]);

        $category = new Category();
        $category->CategoryName = $request->category_name;
        $category->IsActive = "123";
        $category->IsDeleted = "123";
        $category->save();

        return redirect()->route('category');
    }
}
