<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Color;

class Product extends Controller
{
    public function index($id)
    {
         $categories = DB::table('categories')->get();
        $sub_categories = DB::table('sub_categories')->get();
        
        $product =  DB::table('products')
        ->join('sub_categories', 'products.sub_category', '=', 'sub_categories.id')
        ->join('categories', 'products.category', '=', 'categories.id')
        ->where('products.id', $id)
        ->select('products.*', 'sub_categories.sub_category as subcategory_name', 'categories.category_name')
        ->get();
        $product = json_decode($product);
        $product = (array) $product[0];
        $product['color'] = json_decode($product['color']);
        $product['colorImage'] =  json_decode($product['colorImage']);
        
    
        
        foreach($product['color'] as &$row)
        {
            $color = Color::find($row);
            $row = $color->name;
        }
        $product['image'] = json_decode($product['image']);
        
    
        return view('product_details',['categories'=>$categories,'sub_categories'=>$sub_categories,'product'=>$product,'colorImage'=>$product['colorImage']]);
    }
}
