@extends('template/template')

@section('title')
Halaman Dashboard
@endsection

@section('content')
<div class="mx-72 fixed pt-8 ">
    <div class="p-6 flex items-center justify-center">
        <div class="container max-w-screen-lg mx-auto">
            <div>
                <div class="bg-slate-800  rounded shadow-lg px-4 p-8 mb-6">
                    <div class="grid text-sm grid-cols-1 lg:grid-cols-2">
                        <div class="text-gray-200">
                            <p class="font-creal text-lg">Penambahan Penerbangan</p>
                        </div>
                        <form action="{{route('admintambahpenerbangan.post')}}" method="post">
                            @csrf
                            <div class="lg:col-span-2">
                                <div class="grid gap-4 gap-y-2 text-sm text-gray-200 grid-cols-1 md:grid-cols-5">
                                    <div class="md:col-span-5">
                                        <label for="namadaerah">Nama Daerah</label>
                                        <input type="text" name="namadaerah"
                                            class="h-10 mt-1 rounded px-4 w-full bg-gray-500"
                                            placeholder="Padang, West Sumatera" />
                                    </div>
                                    <div class="md:col-span-5">
                                        <label for="namabandara">Nama Bandara</label>
                                        <input type="text" name="namabandara"
                                            class="h-10 mt-1 rounded px-4 w-full bg-gray-500" value=""
                                            placeholder="Bandara International Minangkabau" />
                                    </div>
                                    <div class="md:col-span-5 text-right">
                                        <div class="inline-flex items-end">
                                            <button
                                                class="bg-gray-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
                                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

</div>

@include('Admin/navbar/Navbar')
@endsection