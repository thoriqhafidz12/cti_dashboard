<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CatalogModel;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class LandingController extends Controller
{
    public function index(){
        return view('landing.profile',[
            'active'=>'About Us'
        ]);
    }
    public function catalog(){
        return view('landing.catalog',[
            'active'=>'catalog'
        ]);
    }

    public function list(){
        $catalogs= CatalogModel::latest()->paginate(10);
        return view ('landing.shop.list',compact('catalogs'),[
            'active'=>'catalog'
        ]);
    }
}
