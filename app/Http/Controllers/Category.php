<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Category extends Controller
{

public function index($cat,$subcat)
{
    if($subcat != 0) 
    $products = DB::table('products')
     ->where('category', $cat)
     ->where('sub_category',$subcat)
     ->get();

     else
     $products = DB::table('products')
     ->where('category', $cat)
     ->get();
    
    //  echo '<pre>';print_r($products);die();
     
     foreach ($products as $product) {
    $product->image = json_decode($product->image, true);
    }

    return view('category',['list'=>$products]);
}

}