<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        $title ='Laravel Course from xia';
        $x = '1';
        $y = '2';
        //return view('products.index',compact('title','x','y'));
        $name = 'hiep';
        //return view('products.index')->with('name',$name);
        $myphone =[
            'name' => 'iphone XSMAX',
            'year' => 2023,
            'isFavorited' => true,
        ];
        //return view('products.index',compact('myphone'));
        return view('products.index',[
            'myphone' =>$myphone
        ]);
    }
    public function about(){
        return 'this is about page';
    }
    public function detail($id){
        
    }
}
