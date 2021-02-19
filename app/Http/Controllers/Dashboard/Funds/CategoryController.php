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
            'category_name' => 'required|string'
        ]);

        $category = new Category();
        $category->CategoryName = $request->category_name;
        $category->IsActive = "123";
        $category->IsDeleted = "123";
        $category->save();

        return redirect()->route('category');
    }

    public function edit($id) {
        //
    }

    public function update(Request $request) {
        return $request->category_name;
    }

    public function tempDelete($id) {
        //
    }

    public function PermanentDelete($id) {
        //
    }
}
