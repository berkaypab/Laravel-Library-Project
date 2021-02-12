<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Admin\SettingController;
use App\Models\Category;
use App\Models\Deneme;
use App\Models\Image;
use App\Models\Product;
use App\Models\Reservation;
use App\Models\Setting;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use MongoDB\Driver\Session;


class HomeController extends Controller
{

    public static function categoryList()
    {


        return Category::where('parent_id', '=', 0)->with('children')->get();
    }

    public static function getsetting()
    {
        return Setting::first();
    }

    public function index()
    {
        // echo "Home controller Test";

        $setting = Setting::first();
        $daily = Product::select('id', 'title', 'image', 'price', 'slug')->limit(4)->inRandomOrder()->get();

        $dailyfoto = Product::select('id', 'title', 'image', 'price', 'slug')->limit(8)->inRandomOrder()->get();
        $last = Product::select('id', 'title', 'image', 'price', 'slug')->limit(10)->orderByDesc('id')->get();
        $picked = Product::select('id', 'title', 'image', 'price', 'slug')->limit(4)->inRandomOrder()->get();
        $data = [

            'setting' => $setting,
            'daily' => $daily,
            'dailyfoto' => $dailyfoto,
            'last' => $last,
            'picked' => $picked,
            'page' => 'home'
        ];

        return view('home.index', $data);
    }

    public static function categoryproducts($id, $slug)
    {
        $datalist = Product::where('category_id', $id)->get();
        $data = Category::find($id);
        return view('home.category_products', ['data' => $data, 'datalist' => $datalist]);
    }


    public function addtocart($id)
    {
        echo "add to cart";
        $data = Product::find($id);
        print_r($data);
        exit();
    }


    public function productlist($search)
    {

        $datalist = Product::where('title', 'like', '%' . $search . '%')->get();
        return view('home.search_products', ['search' => $search, 'datalist' => $datalist]);
    }

    public function product($id, $slug)
    {
        $data = Product::find($id);
        $datalist = Image::where('product_id', $id)->get();

        return view('home.product_detail', ['data' => $data, 'datalist' => $datalist]);
    }

    public function getproduct(Request $request)
    {
        $search = $request->input('search');
        $count = Product::where('title', 'like', '%' . $search . '%')->get()->count();
        if ($count == 1) {
            $data = Product::where('title', $request->input('search'))->first();
            return redirect()->route('product', ['id' => $data->id, 'slug' => $data->slug]);
        } else {
            return redirect()->route('productlist', ['search' => $search]);
        }
    }

    public function aboutus()
    {
        // echo "Home controller Test";
        $setting = Setting::first();
        return view('home.about', ['setting' => $setting]);
    }

    public function references()
    {
        // echo "Home controller Test";

        $setting = Setting::first();
        return view('home.references', ['setting' => $setting]);
    }

    public function faq()
    {
        // echo "Home controller Test";

        return view('home.aboutus');
    }

    public function contact()
    {
        // echo "Home controller Test";

        $setting = Setting::first();
        return view('home.contact', ['setting' => $setting]);
    }

    public function sendmessage(Request $request)
    {

        $data = new Message;

        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->save();


        return redirect()->route('contact')->with('info', 'Mesajınız kaydedilmiştir.');
    }

    public function reservation($id,Request $request)
    {

        $data = new Reservation();

        $data->product_id = $id;
        $data->user_id = 1;
        $data->message = $request->input('message');
        $data->approve = false;
        $data->reservationdate = $request->input('reservationdate');

        $data->save();


        return redirect()->route('contact')->with('info', 'x kaydedilmiştir.');

    }

    public function login()
    {

        return view("admin.login");


    }

    public function logincheck(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if ($request->isMethod('post')) {

            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();

                return redirect()->intended('admin');
            }
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        } else
            return view('admin.login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/home');

    }

    public function test($id, $name)
    {

        return view('home.test', ['id' => $id, 'name' => $name]);

        /*
        echo "Home controller Test";
        echo"<br>id number : ", $id;
        echo"<br> name : ", $name;
        for($i =1;$i<=$id;$i++){
            echo "<br> $i - $name ";
        }*/
    }


}
