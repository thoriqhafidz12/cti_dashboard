<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CatalogModel;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class CatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function menu() {
        return view ('dashboard/index');   
    }
    public function index()
    {
        $catalogs = CatalogModel::latest()->paginate(5);
        return view('dashboard.catalog.index',compact('catalogs'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.catalog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // $request -> validate([
        //     'name' => 'required',
        //     'type' => 'required',
        //     'specification' => 'required',
        //     'price' => 'required',
        //     'picture' => 'mime:jpg,jpeg,png,heic|max:2048'
        // ]);

        // $validated = $request->validated();

        // if($request->$validated){
        //     $catalog->name = $request->name;
        //     $catalog->type = $request->type;
        //     $catalog->specification = $request->specification;
        //     $catalog->price = $request->price;
        //     $catalog->picture = $request->picture;
        //     $$catalog->save();
        //     return redirect()->route('dashboard');
        // }
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'specification' => 'required',
            'price' => 'required',
            'picture' => 'required|mimes:jpg,jpeg,png,heic|max:2048'
        ]);
    
        if($request->hasFile('picture')) {
            $uploadPath = public_path('uploads');
    
            if(!File::isDirectory($uploadPath)) {
                File::makeDirectory($uploadPath, 0755, true, true);
            }
    
            $file = $request->file('picture');
            $explode = explode('.', $file->getClientOriginalName());
            $originalName = $explode[0];
            $extension = $file->getClientOriginalExtension();
            $rename = 'picture_' .date('d-m-Y-H-i').'.' . $extension;
            $mime = $file->getClientMimeType();
            $filesize = $file->getSize();
    
            if($file->move($uploadPath, $rename)) {
                $catalog = new CatalogModel;
                $catalog->name = $request->name;
                $catalog->type = $request->type;
                $catalog->specification = $request->specification;
                $catalog->price = $request->price;
                $catalog->picture = $rename;
                $catalog->save();
                return redirect()->route('dashboard.create')->with('success','Produk created successfully.');;
            }
    
            return redirect()->back()->with('message', 'Error, file tidak dapat di upload');
        }
    
        return redirect()->back()->with('message', 'Error, tidak ada file ditemukan');
    }

    /**
     * Display the specified resource.
     */
    public function show(CatalogModel $catalog)
    {
        return view('dashboard.catalog.show',compact('catalog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CatalogModel $catalog)
    {
        return view('dashboard.catalog.edit',compact('catalog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CatalogModel $catalog)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'specification' => 'required',
            'price' => 'required',
            'picture' => 'required|mimes:jpg,jpeg,png,heic|max:2048'
        ]);
      
        $catalog->update($request->all());
      
        return redirect()->route('catalog.index')
                        ->with('success','produk updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $catalogs = CatalogModel::find($id);

        if($catalogs) {
            $picture = public_path('/uploads/' . $catalogs->picture);

            if(File::exists($picture)) {
                File::delete($picture);
            }

            $catalogs->delete();

            return redirect()->back()->with('message', 'Berhasil, file berhasil dihapus');
        }

        return redirect()->back()->with('message', 'Error, tidak ada file ditemukan');
    }
}
