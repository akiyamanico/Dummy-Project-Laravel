@extends('template/template')

@section('title')
Halaman Dashboard
@endsection
@section('content')
<div class="mx-72 fixed pt-8">
    <div class="grid grid-rows-2 grid-flow-col gap-4 gap-x-28">

        <div class="container box-content flex justify-center bg-pink-200 px-12 py-16 rounded-2xl space">
            <div class="font-quicksand font-bold text-center text-neutral-600">
            
                <span>Total User Terdaftar</span>
                <h2>50</h2>
            </div>
        </div>

        <div class="container box-content flex justify-center bg-blue-100 px-12 py-16 rounded-2xl">
            <div class="font-quicksand font-bold text-center text-neutral-600">
                <span>Tiket Terjual</span>
                <h2>50</h2>
            </div>
        </div>
        
        <div class="container box-content flex justify-center bg-purple-200 px-12 py-16 rounded-2xl">
            <div class="font-quicksand font-bold text-center text-neutral-600">
                <span>Total Pendapatan</span>
                <h2>50</h2>
            </div>
        </div>

        <div class="container box-content flex justify-center bg-cyan-200 px-12 py-16 rounded-2xl">
            <div class="font-quicksand font-bold text-center text-neutral-600">
                <span>Paket Tersedia Saat Ini</span>
                <h2>50</h2>
            </div>
        </div>
        
        
    </div>
</div>
@include('Admin/navbar/navbar')
@endsection