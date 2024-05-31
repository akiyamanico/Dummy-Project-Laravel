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
                    <form class="mt-6">
                        <div class="mb-6">
                            <label class="block text-gray-800 font-bold mb-2" for="name">
                                Nama
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="name" type="text" placeholder="John Doe">
                        </div>
                        <div class="mb-6">
                            <label class="block text-gray-800 font-bold mb-2" for="email">
                                Email
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="email" type="email" placeholder="johndoe@example.com">
                        </div>
                        <div class="mb-6">
                            <label class="block text-gray-800 font-bold mb-2" for="card_number">
                                Nomor Telpon
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="card_number" type="text" placeholder="**** **** **** 1234">
                        </div>
                        <div class="mb-6">
                            <label class="block text-gray-800 font-bold mb-2" for="expiration_date">
                                Tanggal Lahir
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="expiration_date" type="text" placeholder="MM / YY">
                        </div>
                        <div class="mb-6">
                            <label class="block text-gray-800 font-bold mb-2" for="cvv">
                                Alamat
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="cvv" type="text" placeholder="***">
                        </div>
                        <div class="mb-6">
                            <label class="block text-gray-800 font-bold mb-2" for="cvv">
                                Bukti Pembayaran
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="cvv" type="text" placeholder="***">
                        </div>
                        <button
                            class="bg-indigo-500 hover:bg-indigo-700 dark:bg-black text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                            type="button">
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