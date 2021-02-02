<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Admin\SettingController;
use App\Models\Category;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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
        return view('home.index',['setting'=>$setting]);
    }

    public function aboutus()
    {
        // echo "Home controller Test";

        return view('home.aboutus');
    }
    public function references()
    {
        // echo "Home controller Test";

        return view('home.aboutus');
    }
    public function faq()
    {
        // echo "Home controller Test";

        return view('home.aboutus');
    }
    public function contact()
    {
        // echo "Home controller Test";

        return view('home.aboutus');
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
