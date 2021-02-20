<?php

namespace App\Http\Controllers\Dashboard\Funds;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dashboard\Funds\Category;
use App\Models\Dashboard\Funds\Sector;

class CategoryController extends Controller
{
    public function index() {
        $category = Category::get();
        $sectors = Sector::get()->pluck('SectorName');
        return view('dashboard.funds.category', ['categories'=> $category,'sectors'=> $sectors]);
    }

    public function add(Request $request) {
        $request->validate([
            'sector_name' => 'required|string',
            'category_name' => 'required|string',
            'performance_summary_sort_order' => 'required|numeric',
            'nav_range' => 'required|numeric',
        ]);

        $category = new Category();
        $category->SectorName = $request->sector_name;
        $category->CategoryName = $request->category_name;
        $category->FundCategoryAnnualize = $request->fund_category_annualize;
        $category->PerformanceSummarySortOrder = $request->performance_summary_sort_order;
        $category->NavRange = $request->nav_range;
        $category->IsActive = "1";
        $category->IsDeleted = "0";
        $category->save();

        return redirect()->route('category');
    }

    public function edit($CategoryID) {
        $category = Category::find($CategoryID);
        return view('dashboard.funds.category-edit',compact('category'));
    }

    public function update(Request $request) {
        $request->validate([
            'sector_name' => 'required|string',
            'category_name' => 'required|string',
            'performance_summary_sort_order' => 'required|numeric',
            'nav_range' => 'required|numeric',
        ]);
        $category = Category::find($request->id);
        $category->SectorName = $request->sector_name;
        $category->CategoryName = $request->category_name;
        $category->FundCategoryAnnualize = $request->fund_category_annualize;
        $category->PerformanceSummarySortOrder = $request->performance_summary_sort_order;
        $category->NavRange = $request->nav_range;
        $category->IsActive = "1";
        $category->IsDeleted = "0";
        $category->save();
        return redirect()->route('category');
    }

    public function tempDelete($id) {
        //
    }

    public function PermanentDelete($CategoryID) {
        Category::find($CategoryID)->delete();
        return redirect()->route('category');
    }
}
