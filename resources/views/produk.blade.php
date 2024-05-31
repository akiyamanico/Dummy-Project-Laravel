@extends('template/template')

@section('title')
Travel Haji Gabut | Halaman Tiket
@endsection
@section('content')
<div class="dark:bg-black">
    <div class="pt-28 mx-auto max-w-7xl sm:px-6 lg:px-8 pb-16">
        @foreach ($paketdata as $i => $a)
        <div
            class="relative dark:bg-gradient-to-r from-black to-gray-500 flex items-center justify-between h-48 bg-white lg:rounded-md lg:shadow-lg  lg:px-8 lg:py-6">
            <div class="flex-shrink-0">
                    <a href="{{route('produkdetail', $a->id)}}" title=""
                        class="dark:text-white text-base text-xl text-black transition-all duration-200 hover:text-blue-600 focus:text-blue-600 font-helmed">
                        <span>{{$a->namapaket}}</span>
                    </a>
                    <div class="font-quicksand flex flex-col">
                        <span>Jadwal Keberangkatan : {{$a->tanggalberangkat}} </span>
                        <span>Durasi Paket : {{$a->durasi}}</span>
                        <span>Berangkat Dari : {{$a->asalkeberangkatan}}</span>
                    </div>
               
            </div>
            <div class="hidden lg:flex lg:items-center lg:space-x-10">
                <div
                    class="dark:text-white  font-quicksand font-medium text-black transition-all duration-200 hover:text-blue-600 focus:text-blue-600">
                    <span>
                        Harga :
                    </span>
                    <span>
                        {{$a->harga}}
                    </span>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@include('navbar')
@include('footer')
@endsection