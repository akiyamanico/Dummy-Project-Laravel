@extends('template/template')

@section('title')
Halaman Dashboard
@endsection
@section('content')
<div class="mx-72 fixed pt-8">
    <div class="grid grid-rows-2 grid-flow-col gap-4 gap-x-28 pb-5">
        <div class="container box-content flex justify-center bg-pink-200 px-12 py-16 rounded-2xl space">
            <div class="font-quicksand font-bold text-center text-neutral-600">
                <span>Total User Terdaftar</span>
                <h2> {{$totaluser}}</h2>
            </div>
        </div>

        <div class="container box-content flex justify-center bg-blue-100 px-12 py-16 rounded-2xl">
            <div class="font-quicksand font-bold text-center text-neutral-600">
                <span>Tiket Terjual</span>
                <h2>{{$totaltiket}}</h2>
            </div>
        </div>

        <div class="container box-content flex justify-center bg-purple-200 px-12 py-16 rounded-2xl">
            <div class="font-quicksand font-bold text-center text-neutral-600">
                <span>Total Pendapatan</span>
                <h2>Rp.{{$totalharga}}</h2>
            </div>
        </div>

        <div class="container box-content flex justify-center bg-cyan-200 px-12 py-16 rounded-2xl">
            <div class="font-quicksand font-bold text-center text-neutral-600">
                <span>Paket Tersedia Saat Ini</span>
                <h2>{{$totalpaket}}</h2>
            </div>
        </div>
    </div>
    <div
        class="flex flex-col pt-5 pb-5 bg-neutral-800 text-wrap table-auto -mr-24 rounded-xl shadow-2xl font-quicksand font-light ">
        <span class="text-2xl text-center font-bold">Daftar Paket Haji</span>
        <table class="mx-5">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Paket</th>
                    <th>Harga</th>
                    <th>Durasi</th>
                    <th>Tersedia</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $i => $a)
                    <tr>
                        <td>{{@$i + 1}}</td>
                        <td>{{$a->namapaket}}</td>
                        <td>{{$a->harga}}</td>
                        <td>{{$a->durasi}}</td>
                        <td>{{$a->tersedia}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@include('Admin/navbar/navbar')
@endsection