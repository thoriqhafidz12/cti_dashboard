<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeranjangController extends Controller
{
    public function barang(){
        $this->authorize('admin');
        $dummyItems = [
            [
                'nama_barang' => 'Bricket',
                'harga' => 10000,
                'jumlah' => 2,
                'subtotal' => 20000,
                'gambar' => 'Assets/image.png',
            ],
            [
                'nama_barang' => 'bukan bricket',
                'harga' => 15000,
                'jumlah' => 3,
                'subtotal' => 45000,
                'gambar' => 'Assets/image_1.png',
            ],
        ];

        $total = array_sum(array_column($dummyItems, 'subtotal'));

        return view('landing.keranjang', compact('dummyItems', 'total'));
    }
    
    public function checkout(){
        return view('landing.checkout');
    }
}
