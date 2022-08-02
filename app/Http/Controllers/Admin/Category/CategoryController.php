<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestCategory;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function uploadFile($file)
    {
        $fileName = time() . '-' . $file->getClientOriginalName();
        return $file->storeAs('images', $fileName, 'public');
    }

    public function getCategory()
    {
        $QUERY = new Categories();
        $data = $QUERY->getCategory();
        return view('adminhtml.category.category_view_index', [
            'title' => "Manage Category",
            'category' => $data
        ]);
    }

    public function addCategory(RequestCategory $request)
    {
        if ($request->isMethod('post')) {
            $params = [];
            $params['cols'] = [
                'title' => $request->title,
            ];
            unset($params['cols']['_token']);
            if ($request->hasFile('image') && $request->file('image')->isValid()) {
                $params['cols']['image'] = $this->uploadFile($request->file('image'));
            }
            $modelCategory = new Categories();
            $modelCategory->saveCategoryAdd($params);
        }
        return view('adminhtml.category.category_view_add', [
            'title' => "Add Category"
        ]);
    }

    public function deleteCategory(Request $request)
    {
        DB::table('categories')->delete($request->id);
        return redirect('admin/category/list');
    }

    public function editCategory(RequestCategory $request)
    {
        $QUERY_FIND = new Categories();
        $data_find = $QUERY_FIND->editCategory($request->id);
        if ($request->isMethod('post')) {
            $params = [];
            $params['cols'] = [
                'id' => $request->id,
                'title' => $request->title,
            ];
            unset($params['cols']['_token']);
            if ($request->hasFile('image') && $request->file('image')->isValid()) {
                $params['cols']['image'] = $this->uploadFile($request->file('image'));
            }
            $modelCategory = new Categories();
            $res = $modelCategory->saveCategoryEdit($params);
            if ($res != null) {
                return redirect('admin/category/list');
            }
        }
        return view('adminhtml.category.category_view_edit', [
            'title' => "Edit Category",
            'data_find' => $data_find
        ]);
    }
}