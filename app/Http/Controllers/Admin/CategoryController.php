<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
    {
        //echo "Category list";
        $datalist = DB::select('select * from categories');
        return view('admin.category', ['datalist' => $datalist]);

    }

    public function add()
    {
        $datalist = DB::table('categories')->get();
        //print_r($datalist);
        //exit();
        return view('admin.category_add', ['datalist' => $datalist]);

    }

    public function create(Request $request)
    {
        //echo "İnsert category";
        //echo $name = $request->input('title');
        DB::table('categories')->insert([
            'parent_id' => $request->input('parent_id'),
            'title' => $request->input('title'),
            'keywords' => $request->input('keywords'),
            'description' => $request->input('description'),
            'slug' => $request->input('slug'),
            'status' => $request->input('status'),
        ]);
        return redirect()->route('admin_category');
    }

    public function store(Request $request)
    {

    }

    public function show(Category $category)
    {

    }

    public function edit(Category $category, $id)
    {
        //echo "edit test";
        $data = Category::find($id);
        $datalist = DB::table('categories')->get()->where('parent_id', 1);
        return view('admin.category_edit', ['data' => $data, 'datalist' => $datalist]);
    }

    public function update(Request $request, Category $category, $id)
    {
        $data = Category::find($id);
        $data->parent_id = $request->input('parent_id');
        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        $data->slug = $request->input('slug');
        $data->status = $request->input('status');
        $data->save();
        return redirect()->route('admin_category');
    }

    public function destroy(Category $category, $id)
    {
        DB::table('categories')->where('id', '=', $id)->delete();
        return redirect()->route('admin_category');
    }
}
