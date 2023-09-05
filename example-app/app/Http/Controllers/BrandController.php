<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Creation;
use Illuminate\Support\Facades\Session;

class BrandController extends Controller
{
    public function index() {
        $brands = Brand::all();

        return view('brand.index', compact('brands'));
    }

    public function select() {
        $brands = Brand::all();

        return view('brand.select', compact('brands'));
    }

    public function create(Request $request) {
        $brand = Brand::find($request['name']);

        return view('brand.create', compact('brand'));
    }

    public function store(Request $request) {
        Creation::create([
            'front'=>$request['front'],
            'back'=>$request['back'],
            'size'=>$request['size'],
            'color'=>$request['color'],
        ]);
        session()->flash('status', 'Task was successful!');

        return redirect()->route('brand.index');
    }
}
