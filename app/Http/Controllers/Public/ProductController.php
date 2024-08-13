<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        // $products = Product::get();
        //dd($products);
        //1st solution
        //$products = Product::orderByDesc('created_at')->skip(0)->take(3)->get();

        //2nd solution as the 1st one
        //$products = Product::latest()->take(3)->get();

        //3rd soln.
        $latestProductsDesc = Product::latest()->take(3)->get();
        $products = $latestProductsDesc->sortBy('created_at');

        return view('public.index', compact('products'));
    }
}
