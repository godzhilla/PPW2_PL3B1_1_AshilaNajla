@extends('daftar_barang')

@section('title', 'Daftar Barang Tersedia')

@section('header', 'Daftar Barang Tersedia')

@section('subheader', 'Bulaksumur, Caturtunggal, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281')

@section('content')
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">ID Barang</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Harga</th>
            <th scope="col">Stok</th>
            <th scope="col">ID Supplier</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data_barang as $barang)
        <tr>
            <th scope="row">{{++$no}}</th>
            <td>{{$barang->nama_barang}}</td>
            <td>{{"Rp ".number_format($barang->harga, 2, ',', '.')}}</td>
            <td>{{$barang->stok}}</td>
            <td>{{$barang->ID_Supplier}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
