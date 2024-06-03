@extends('template/template')

@section('title')
Halaman Dashboard
@endsection

@section('content')
<div class="mx-72 fixed pt-8 ">
    <div class="p-6 flex items-center justify-center">
        <div class="container max-w-screen-lg mx-auto">
            <div>
                <div class="bg-slate-800   rounded shadow-lg px-4 p-8 mb-6">
                    <div class="grid text-sm grid-cols-1 text-white lg:grid-cols-2">
                        <div class="text-white">
                            <p class="font-creal text-lg">Pengeditan Paket Haji</p>
                        </div>
                        <form action="{{route('admineditpaketproses',$data->id)}}" method="post">
                            @csrf
                            <div class="lg:col-span-2">
                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                                    <div class="md:col-span-5">
                                        <label>Nama Paket</label>
                                        <input type="text" name="namapaket"
                                            class="h-10 mt-1 rounded px-4 w-full bg-gray-500" value="{{$data->namapaket}}" />
                                        <span>{{$errors->first('namapaket')}}</span>
                                    </div>
                                    <div class="md:col-span-5">
                                        <label>Harga</label>
                                        <input type="text" name="harga"
                                            class="h-10 mt-1 rounded px-4 w-full bg-gray-500" value="{{$data->harga}}"
                                            placeholder="" />
                                        <span>{{$errors->first('harga')}}</span>
                                    </div>
                                    <div class="md:col-span-5">
                                        <label>Deskripsi</label>
                                        <textarea type="text" name="deskripsi"
                                            class="h-10 mt-1 rounded px-4 w-full bg-gray-500" value="{{$data->deskripsi}}">
                                        </textarea>
                                        <span>{{$errors->first('deskripsi')}}</span>
                                    </div>
                                    <div class="md:col-span-5">
                                        <label>Durasi</label>
                                        <input type="text" name="durasi"
                                            class="h-10 mt-1 rounded px-4 w-full bg-gray-500" value="{{$data->durasi}}"
                                            placeholder="" />
                                        <span>{{$errors->first('durasi')}}</span>
                                    </div>
                                    <div class="md:col-span-5">
                                        <label>Status Ketersediaan : </label>
                                        <input type="radio" id="html" name="tersedia" value="Tersedia">
                                          <label for="html">Tersedia</label>
                                        <input type="radio" id="html" name="tersedia" value="Tidak Tersedia">
                                          <label for="html">Tidak Tersedia</label><br>
                                        <span>{{$errors->first('tersedia')}}</span>
                                    </div>
                                    <div class="md:col-span-5">
                                        <label>Tanggal Berangkat</label>
                                        <input type="text" name="tanggalberangkat"
                                            class="h-10 mt-1 rounded px-4 w-full bg-gray-500" value="{{$data->tanggalberangkat}}"
                                            placeholder="" />
                                        <span>{{$errors->first('tanggalberangkat')}}</span>
                                    </div>
                                    <div class="md:col-span-5">
                                        <label>Asal Keberangkatan</label>
                                        <select name="asalkeberangkatan" class="bg-gray-500">
                                            @foreach($dataresult as $i => $d)
                                                <option value="{{$d->concatenated_results}}">{{$d->concatenated_results}}
                                                </option>
                                            @endforeach
                                        </select>
                                        <span>{{$errors->first('asalkeberangkatan')}}</span>
                                    </div>
                                    <div class="md:col-span-5 text-right">
                                        <div class="inline-flex items-end">
                                            <button type="submit"
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