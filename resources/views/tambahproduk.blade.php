@extends('template/template')

@section('title')
Halaman Home
@endsection

@include('navbar')

@section('content')

<div class="relative flex items-center justify-center lg:px-8">
    <div class="grid gap-8 grid-cols-1">
        <div class="flex flex-col">
            <div class="flex flex-col sm:flex-row items-center">
                <h2 class="font-semibold text-5xl font-abel">Tambahkan Produk</h2>
                <div class="w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0"></div>
            </div>
            <div class="mt-5">
                
                <form action="{{ route('addproduct') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form">
                        <div class="md:space-y-2 mb-3">
                            <div class="flex justify-center py-6">
                                <span>{{$errors->first('gambar')}}</span>
                                <label class="cursor-pointer">
                                    <span class="focus:outline-none text-white text-sm py-2 px-4 rounded-full bg-green-400 hover:bg-green-500 hover:shadow-lg">Tambahkan Gambar Disini</span>
                                    <input type="file" class="hidden" name="gambar">
                                </label>
                            </div>
                        </div>
                        <div class="md:flex flex-row md:space-x-4 w-full text-xs">
                            <div class="mb-3 space-y-2 w-full text-xs">
                                <label class="font-semibold text-gray-600 py-2">Nama Barang</label>
                                <input placeholder="Nama Barang"
                                    class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                                    required="required" type="text" name="namaproduk">
                            </div>
                            <div class="mb-3 space-y-2 w-full text-xs">
                                <label class="font-semibold text-gray-600 py-2">Kategori</label>
                                <input placeholder="Kategori Barang"
                                    class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                                    required="required" type="text" name="kategori">
                            </div>
                        </div>
                        <div class="mb-3 space-y-2 w-full text-xs">
                            <label class="font-semibold text-gray-600 py-2">Harga</label>
                            <div class="flex flex-wrap items-stretch w-full mb-4 relative">
                                <input type="text"
                                    class="flex-shrink flex-grow flex-auto leading-normal w-px flex-1 border h-10 border-grey-light rounded-lg px-3 relative focus:border-blue focus:shadow"
                                    placeholder="Harga" name="harga">
                            </div>
                        </div>
                        <div class="flex-auto w-full mb-1 text-xs space-y-2">
                            <label class="font-semibold text-gray-600 py-2">Deskripsi</label>
                            <textarea required="" name="deskripsi"
                                class="w-full min-h-[100px] max-h-[300px] h-28 appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg py-4 px-4"
                                placeholder="Enter your company info" spellcheck="false"></textarea>
                        </div>
                        <div class="mt-5 text-right md:space-x-3 md:block flex flex-col-reverse">
                            <button
                                class="mb-2 md:mb-0 bg-green-400 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-green-500"
                                type="submit">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@include('footer')
@endsection
