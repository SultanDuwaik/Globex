<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavigationController extends Controller
{
    function home(){
        return view("user.layouts.index");
    }
    function shop(){
        return view("user.layouts.shop");
    }
    function shop_details(){
        return view("user.layouts.shop-details");
    }
    function blog(){
        return view("user.layouts.blog");
    }
    function blog_details(){
        return view("user.layouts.blog-details");
    }
    function checkout(){
        return view("user.layouts.checkout");
    }
    function shopping_cart(){
        return view("user.layouts.shopping-cart");
    }
    function contact(){
        return view("user.layouts.contact");
    }
    function about(){
        return view("user.layouts.about");
    }

}
