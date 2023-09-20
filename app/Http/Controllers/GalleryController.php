<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Service::paginate(10);

        return view('galleries.index', compact('galleries'));
    }
}
