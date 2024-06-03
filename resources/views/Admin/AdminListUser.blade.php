@extends('template/template')

@section('title')
Halaman Dashboard
@endsection

@section('content')
<div class="mx-72 grid fixed max-w-screen-lg container w-screen pt-8">

    <span class="text-4xl text-center font-quicksand">Daftar Pengguna Travel Haji Gabut</span>
    <div class="flex flex-col pt-5 pb-5 text-sm bg-neutral-800 rounded-xl shadow-2xl font-quicksand font-light max-h-96 overflow-auto">
        <table class="min-w-full">
            <thead>
                <tr>
                    <th class="px-4 py-2 whitespace-nowrap">No</th>
                    <th class="px-4 py-2 whitespace-nowrap">Nama</th>
                    <th class="px-4 py-2 whitespace-nowrap">Email</th>
                    <th class="px-4 py-2 whitespace-nowrap">Username</th>
                    <th class="px-4 py-2 whitespace-nowrap">Telepon</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $i => $a)
                <tr>
                    <td class="px-4 py-2">{{ @$i + 1 }}</td>
                    <td class="px-4 py-2">{{ $a->nama }}</td>
                    <td class="px-4 py-2">{{ $a->email }}</td>
                    <td class="px-4 py-2">{{ $a->username }}</td>
                    <td class="px-4 py-2">{{ $a->telepon }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@include('Admin/navbar/Navbar')
@endsection
