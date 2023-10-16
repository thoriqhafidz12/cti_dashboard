@extends('landing.index')

@section('content')
<div class="container">
    <h2>Keranjang Belanja</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Gambar</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody class="center">
            @foreach($dummyItems as $item)
            <tr>
                <td><img src="{{ $item['gambar'] }}" width="50" height="50"></td>
                <td>{{ $item['nama_barang'] }}</td>
                <td>Rp {{ $item['harga'] }}</td>
                <td>{{ $item['jumlah'] }}</td>
                <td>Rp {{ $item['subtotal'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="font-weight-bold text-right">
        <strong>Total Belanja: Rp {{ $total }}
    </div>
</div>
@endSection