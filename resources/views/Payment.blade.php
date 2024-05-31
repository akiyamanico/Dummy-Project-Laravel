@extends('template/template')

@section('title')
Travel Haji Gabut | Halaman Pembayaran
@endsection
@section('content')
<div class="bg-black">
    <div class="container mx-auto p4-10 pt-28">
        <div class="bg-white rounded-lg">
            <div class="md:flex">
                <div class="w-full px-6 py-8 md:p-8">
                    <h2 class="font-bold text-gray-800 font-helmed text-3xl">Checkout</h2>
                    <p class="mt-4 text-gray-600 font-hellight">Please fill out the form below to complete your
                        purchase.</p>
                    @if(session('harga','namapaket'))
                        <span class="text-black font-helmed">Harga: Rp. {{ session('harga') }}</span>
                        <br>
                        <span class="text-black font-helmed">Paket Yang Dipilih :  {{ session('namapaket') }}</span>
                    @endif
                    <form action="{{route('paymentprocess')}}" enctype="multipart/form-data" method="post" class="mt-6">
                    @csrf    
                    <div class="mb-6">
                            <label class="block text-gray-800 font-bold mb-2" for="name">
                                Nama
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="nama" name="nama" type="text" placeholder="Nama Lengkap Anda">
                        </div>
                        <div class="mb-6">
                            <label class="block text-gray-800 font-bold mb-2" for="email">
                                Email
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="email" name="email" type="email" placeholder="Masukan Email Anda">
                        </div>
                        <div class="mb-6">
                            <label class="block text-gray-800 font-bold mb-2" for="card_number">
                                Nomor Telpon
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="telpon" name="telpon" type="text" placeholder="Masukan Nomor Telpon Anda">
                        </div>
                        <div class="mb-6">
                            <label class="block text-gray-800 font-bold mb-2" for="expiration_date">
                                Tanggal Lahir
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="expiration_date" name="tanggallahir" type="text" placeholder="MM / YY">
                        </div>
                        <div class="mb-6">
                            <label class="block text-gray-800 font-bold mb-2">
                                Alamat
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="cvv" type="text" name="alamat" placeholder="Alamat Lengkap Anda">
                        </div>
                        <div class="mb-6">
                            <label class="block text-gray-800 font-bold mb-2" for="cvv">
                                Bukti Pembayaran
                            </label>
                            <label class="block mb-2 text-sm max-h-auto font-medium text-gray-900 dark:text-white"
                                for="file_input">Upload file</label>
                            <input
                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                id="file_input"  name="buktipembayaran" type="file">
                        </div>
                        <input type="hidden" name="id_paket" value="{{ session('id')  }}">
                        <button
                            class="bg-indigo-500 hover:bg-indigo-700 dark:bg-black text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                            type="submit">
                            Submit
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('navbar')
@include('footer')
@endsection