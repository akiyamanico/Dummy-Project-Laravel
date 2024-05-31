@extends('template/template')

@section('title')
Halaman Home
@endsection
@section('content')
<style>
  .gradient-overlay::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(to top, rgba(0, 0, 0, 20), transparent);
    z-index: 50;
  }

  @media (prefers-color-scheme: light) {
    .gradient-overlay::before {
      background: linear-gradient(to top, rgba(255, 255, 255, 20), transparent);
    }
  }
</style>
<div class="dark:bg-black">
  <div class="relative flex flex-col md:flex-row justify-between text-4xl md:text-6xl lg:text-8xl pt-16 md:pt-32  lg:px-32 font-helmed text-black dark:text-white">
    <span>
      Informasi Tiket
    </span>
  
    <div class="container max-w-full md:max-w-96 rounded-lg shadow-xl">
      
      <div class="flex justify-center items-center">

      </div>
      <div class="flex justify-center items-center">
        <h1 class="text-2xl md:text-3xl lg:text-4xl font-helmed text-black dark:text-white">
          <span class="text-white">
            Harga Paket
          </span>
        </h1>
      </div>
      <div class="flex justify-center flex-col items-center pt-2 pb-2">
        <h2 class="border rounded-lg flex-col bg-stone-700 bg-gradient-to-r from-gray-700 to-black border-black shadow-inner text-xl md:text-2xl pt-2 py-2 px-4 text-black flex justify-center dark:text-white">
          <button type="submit" class="font-hellight">
            Rp. {{$paketdata->harga}}
          </button>
          <span>
            Paket 1
          </span>
        </h2>
        <form action="{{ route('paymentgateway') }}" method="POST">
        @csrf
        <input type="hidden" name="harga" value="{{ $paketdata->harga }}">
        <input type="hidden" name="namapaket" value="{{ $paketdata->namapaket }}">
        <input type="hidden" name="id" value="{{ $paketdata->id }}">
        <button type="submit" class="font-hellight text-3xl">Pesan Sekarang!</button>
          </form>  
        </a>
      </div>
    </div>
  </div>
  <div class="dark:text-white px-48 text-2xl font-helmed">
    <span>{{$paketdata->namapaket}}</span>
  </div>
  <div class="container text-xl md:text-2xl text-white font-hellight px-8 md:px-24 lg:px-48 max-w-auto">
    <span>Deskripsi Tiket</span>
  </div>
  <div class="container text-lg md:text-xl text-white font-hellight pb-8 px-8 md:px-24 lg:px-48 max-w-screen-xl">
    <span>
      {{$paketdata->deskripsi}}
    </span>
  </div>
  <div class="container text-2xl md:text-3xl text-white font-hellight pt-4 py-4 px-8 md:px-24 lg:px-48">
    <span>Paket Haji Lainnya</span>
  </div>
  <div class="px-8 md:px-32 lg:px-64 ">
    <div class="block rounded-lg bg-gray-700 shadow-secondary-1 max-w-full md:max-w-64 max-h-auto dark:bg-surface-dark">
      <a href="#!">
        <img class="rounded-t-lg" src="https://tecdn.b-cdn.net/img/new/standard/nature/184.jpg" alt="" />
      </a>
      <div class="p-6 text-surface dark:text-white">
        <h5 class="mb-2 text-lg md:text-xl font-helmed leading-tight">Paket 2</h5>
        <p class="mb-4 font-hellight text-base">
          Lorem Ipsum
        </p>
        <button type="button" class="inline-block rounded bg-gray-500 shadow-inner px-6 pb-2 pt-2.5 text-xs md:text-sm font-quicksand uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out hover:bg-primary-accent-300 hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 focus:outline-none focus:ring-0 active:bg-primary-600 active:shadow-primary-2 dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong">
          Button
        </button>
      </div>
    </div>
  </div>

  @include('navbar')
  @include('footer')
@endsection
