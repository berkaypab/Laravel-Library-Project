<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
       // echo "Home controller Test";

        return view('home.index');
    }
    public function aboutus(){
        // echo "Home controller Test";

        return view('home.aboutus');
    }

    public function test($id,$name){

        return view('home.test',['id'=>$id , 'name'=>$name]);

        /*
        echo "Home controller Test";
        echo"<br>id number : ", $id;
        echo"<br> name : ", $name;
        for($i =1;$i<=$id;$i++){
            echo "<br> $i - $name ";
        }*/
    }


}
