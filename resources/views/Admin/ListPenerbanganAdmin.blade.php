@extends('template/template')

@section('title')
Halaman Dashboard
@endsection

@section('content')
<div class="mx-72 fixed pt-8 ">

    <span class="text-4xl text-center font-quicksand">Daftar Penerbangan</span>
    <div class="flex flex-col pt-5 pb-5 bg-neutral-800 text-wrap table-auto -mr-24 rounded-xl shadow-2xl font-quicksand font-light">
        <table class=" w-full">
            <thead>
                <tr>
                    <th class="px-4 py-2 whitespace-nowrap">No</th>
                    <th class="px-4 py-2 whitespace-nowrap">Nama Daerah</th>
                    <th class="px-4 py-2 whitespace-nowrap">Nama Bandara</th>      
                </tr>
            </thead>
            <tbody>
                @foreach($data as $i => $d)
                <tr>
                    <td class=" px-4 py-2">{{$i + 1}}</td>
                    <td class=" px-4 py-2">{{$d->namadaerah}}</td>
                    <td class=" px-4 py-2">{{$d->namabandara}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{route('admintambahpenerbangan')}}" class="text-xl text-center font-quicksand">Tambah Penerbangan</a>
    </div>
</div>

@include('Admin/navbar/Navbar')
@endsection
