<?php

namespace App\Http\Controllers;

use App\Exports\ProductsExport;
use App\Models\Product;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('products',compact('products'));
    }
    public function export(){
        $products = Product::all();
        return Excel::download(new ProductsExport($products),'products.xlsx');
    }
}
