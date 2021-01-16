<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $datalist = Product::all();
        return view('admin.product', ['datalist' => $datalist]);
    }

    public function create()
    {
        $datalist = Category::all();
        return view('admin.product_add', ['datalist' => $datalist]);
    }

    public function store(Request $request)
    {
        $data = new Product;
        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        $data->publisher = $request->input('publisher');
        $data->price = $request->input('price');
        $data->quantity = $request->input('quantity');
        $data->minquantity = $request->input('minquantity');
        $data->year = $request->input('year');
        $data->tax = (int)$request->input('tax');
        $data->slug = $request->input('slug');
        $data->status = $request->input('status');
        $data->category_id = $request->input('category_id');
        $data->user_id = Auth::id();
        $data->detail = $request->input('detail');
        $data->image = Storage::putFile('images', $request->file('image'));
        $data->save();
        return redirect()->route('admin_products');
    }

    public function show(Product $product)
    {

    }

    public function edit(Product $product, $id)
    {
        $data = Product::find($id);
        $datalist = Category::all();
        return view('admin.product_edit', ['data' => $data, 'datalist' => $datalist]);
    }

    public function update(Request $request, Product $product, $id)
    {
        $data = Product::find($id);
        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        $data->publisher = $request->input('publisher');
        $data->price = $request->input('price');
        $data->quantity = $request->input('quantity');
        $data->minquantity = $request->input('minquantity');
        $data->year = $request->input('year');
        $data->tax = (int)$request->input('tax');
        $data->detail = $request->input('detail');
        $data->slug = $request->input('slug');
        $data->status = $request->input('status');
        $data->category_id = $request->input('category_id');
        $data->user_id = Auth::id();
        $data->detail = $request->input('detail');
        $data->image = Storage::putFile('images', $request->file('image'));
        $data->save();
        return redirect()->route('admin_products');
    }

    public function destroy(Product $product, $id)
    {
        // DB::table('products')->where('id','=',$id)->delete();
        $data = Product::find($id);
        $data->delete();
        return redirect()->route('admin_products');
    }
}
