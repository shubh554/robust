<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Home extends Controller
{
    
    public function index(){
    $categories = DB::table('categories')->get();
    $banners = DB::table('banners')->get();
    $bannerProducts = DB::table('bannerproducts')->get();
    $sub_categories = DB::table('sub_categories')->get();
    $products = DB::table('products')->get();
    $featured = DB::table('featureds')->get();
    
     $brands = DB::table('brands')->get();
    $featured = json_decode($featured,true);
     $featured_products = DB::table('featured_products')
    ->join('products', 'featured_products.product_id', '=', 'products.id')
    ->join('categories', 'products.category', '=', 'categories.id')
    ->join('sub_categories', 'products.sub_category', '=', 'sub_categories.id')
    ->select('products.*', 'featured_products.active','featured_products.id as featured_product_id', 'categories.category_name', 'sub_categories.sub_category')
    ->get();
    
      $top_deals = DB::table('top_deals')
    ->join('products', 'top_deals.product_id', '=', 'products.id')
    ->join('categories', 'products.category', '=', 'categories.id')
    ->join('sub_categories', 'products.sub_category', '=', 'sub_categories.id')
    ->select('products.*','top_deals.id as top_deals_id','top_deals.discount','categories.category_name', 'sub_categories.sub_category')
    ->get();
    
    $featured_products = json_decode($featured_products,true);
    $top_deals = json_decode($top_deals,true);
    $products = json_decode($products,true);
    
    foreach($featured_products as &$row)
    {
        $row['image']  = json_decode($row['image']);
    }
    
    foreach($top_deals as &$row)
    {
        $row['image']  = json_decode($row['image']);
    }
    
      
    foreach($products as &$row)
    {
        $row['image']  = json_decode($row['image']);
    }
  

    
    
     return view('welcome',['categories'=>$categories,'banners'=>$banners,'bannerproducts'=>$bannerProducts,'featured'=> $featured[0]
    ,'featured_products'=>$featured_products,'top_deals'=>$top_deals,'sub_categories'=>$sub_categories,'brands'=>$brands,'products'=>$products]);
    }
    
}
