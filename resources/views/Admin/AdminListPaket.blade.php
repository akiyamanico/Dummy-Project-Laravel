@extends('template/template')

@section('title')
Halaman Dashboard
@endsection

@section('content')
<div class="mx-72 grid fixed max-w-screen-lg container w-screen pt-8">

    <span class="text-4xl text-center font-quicksand">Daftar Paket Haji</span>
    <div class="flex flex-col pt-5 pb-5 text-sm bg-neutral-800 rounded-xl shadow-2xl font-quicksand font-light  overflow-auto">
        <table class="min-w-full">
            <thead>
                <tr>
                    <th class="px-4 py-2 whitespace-nowrap">No</th>
                    <th class="px-4 py-2 whitespace-nowrap">Paket</th>
                    <th class="px-4 py-2 whitespace-nowrap">Deskripsi</th>
                    <th class="px-4 py-2 whitespace-nowrap">Harga</th>
                    <th class="px-4 py-2 whitespace-nowrap">Durasi</th>
                    <th class="px-4 py-2 whitespace-nowrap">Tersedia</th>
                    <th class="px-4 py-2 whitespace-nowrap">Tanggal Berangkat</th>
                    <th class="px-4 py-2 whitespace-nowrap">Asal Keberangkatan</th>
                    <th class="px-4 py-2 whitespace-nowrap">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $i => $a)
                <tr>
                    <td class="px-4 py-2">{{ @$i + 1 }}</td>
                    <td class="px-4 py-2">{{ $a->namapaket }}</td>
                    <td class="px-4 py-2">{{ $a->deskripsi }}</td>
                    <td class="px-4 py-2">{{ $a->harga }}</td>
                    <td class="px-4 py-2">{{ $a->durasi }}</td>
                    <td class="px-4 py-2">{{ $a->tersedia }}</td>
                    <td class="px-4 py-2">{{ $a->tanggalberangkat }}</td>
                    <td class="px-4 py-2">{{ $a->asalkeberangkatan }}</td>
                    <td class="px-4 py-2"><a href="{{('admineditpaket/'.$a->id)}}">Edit </a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('admintambahpakethaji') }}" class="text-xl text-center font-quicksand">Tambah Paket Haji</a>
    </div>
</div>

@include('Admin/navbar/Navbar')
@endsection
