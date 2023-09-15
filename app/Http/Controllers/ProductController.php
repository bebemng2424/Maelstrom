<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Service::paginate(9);

        return view('products.index', compact('products'));
    }
}
