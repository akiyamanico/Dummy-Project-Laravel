@extends('template/template')

@section('title')
Halaman Dashboard
@endsection

@section('content')
<div class="mx-72 fixed pt-8">

    <span class="text-4xl text-center font-quicksand">Konfirmasi Pembayaran Pengguna!</span>
    <div class="flex text-sm flex-col pt-5 pb-5 bg-neutral-800 text-wrap table-auto max-w-screen-xl max-h-screen overflow-auto -mr-24 rounded-xl shadow-2xl font-quicksand font-light">
        <table class="w-full">
            <thead>
                <tr>
                    <th class="px-4 py-2 whitespace-nowrap">No</th>
                    <th class="px-4 py-2 whitespace-nowrap">Nama</th>
                    <th class="px-4 py-2 whitespace-nowrap">Email</th>
                    <th class="px-4 py-2 whitespace-nowrap">Telpon</th>
                    <th class="px-4 py-2 whitespace-nowrap">Tanggal Lahir</th>
                    <th class="px-4 py-2 whitespace-nowrap">Alamat</th>
                    <th class="px-4 py-2 whitespace-nowrap">Bukti Pembayaran</th>
                    <th class="px-4 py-2 whitespace-nowrap">Paket Yang Dipilih</th>
                    <th class="px-4 py-2 whitespace-nowrap">Harga Paket</th>
                    <th class="px-4 py-2 whitespace-nowrap">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $index => $d)
                <tr>
                    <td class="px-4 py-2">{{ $index + 1 }}</td>
                    <td class="px-4 py-2">{{ $d->nama }}</td>
                    <td class="px-4 py-2">{{ $d->email }}</td>
                    <td class="px-4 py-2">{{ $d->telpon }}</td>
                    <td class="px-4 py-2">{{ $d->tanggallahir }}</td>
                    <td class="px-4 py-2">{{ $d->alamat }}</td>
                    <td class="px-4 py-2"><img src="{{ asset('buktipembayaran/' . $d->buktipembayaran) }}"></td>
                    <td class="px-4 py-2">{{ $d->namapaket }}</td>
                    <td class="px-4 py-2">{{ $d->harga }}</td>
                    @if($d->statuspembayaran === "Belum Dikonfirmasi")
                    <td class="px-4 py-2"><a href="{{ url('adminkonfirmasi/' . $d->id) }}">Konfirmasi</a></td>
                    @else
                    <td class="px-4 py-2">{{ $d->statuspembayaran }}</td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('admintambahpakethaji') }}" class="text-xl text-center font-quicksand">Tambah Paket Haji</a>
    </div>
</div>

@include('Admin/navbar/Navbar')
@endsection
