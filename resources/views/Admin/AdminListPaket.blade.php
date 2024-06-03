@extends('template/template')

@section('title')
Halaman Dashboard
@endsection

@section('content')
<div class="mx-72 fixed pt-8 ">

    <span class="text-4xl text-center font-quicksand">Daftar Paket Haji</span>
    <div class="flex flex-col pt-5 pb-5 bg-neutral-800 text-wrap table-auto -mr-24 rounded-xl shadow-2xl font-quicksand font-light">
        <table class=" w-full">
            <thead>
                <tr>
                    <th class="px-4 py-2 whitespace-nowrap">No</th>
                    <th class="px-4 py-2 whitespace-nowrap">Paket</th>
                    <th class="px-4 py-2 whitespace-nowrap">Harga</th>
                    <th class="px-4 py-2 whitespace-nowrap">Durasi</th>
                    <th class="px-4 py-2 whitespace-nowrap">Tersedia</th>
                    <th class="px-4 py-2 whitespace-nowrap">Tanggal Berangkat</th>
                    <th class="px-4 py-2 whitespace-nowrap">Asal Keberangkatan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $i => $a)
                <tr>
                    <td class=" px-4 py-2">{{ @$i + 1 }}</td>
                    <td class=" px-4 py-2">{{ $a->namapaket }}</td>
                    <td class=" px-4 py-2">{{ $a->harga }}</td>
                    <td class=" px-4 py-2">{{ $a->durasi }}</td>
                    <td class=" px-4 py-2">{{ $a->tersedia }}</td>
                    <td class=" px-4 py-2">{{ $a->tanggalberangkat }}</td>
                    <td class=" px-4 py-2">{{ $a->asalkeberangkatan }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <span class="text-xl text-center font-quicksand">Tambah Paket Haji</span>
    </div>
</div>

@include('Admin/navbar/Navbar')
@endsection
