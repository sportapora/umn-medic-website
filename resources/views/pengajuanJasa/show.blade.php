@extends('layouts.main', ['title' => $pengajuan_jasa->nama_acara])

@section('content')
    <div class="container mx-auto p-6">
        <div class="bg-white shadow-md rounded-lg p-6">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center">
                <h1 class="text-3xl font-bold text-green-600 mb-6 border-b pb-3">Pengajuan
                    Jasa untuk: {{$pengajuan_jasa->nama_acara}}</h1>

                <p class="mb-10 md:mb-0">Status: @if($pengajuan_jasa->status == 'Approved')
                        <span
                            class="bg-blue-100 text-blue-800 font-medium me-2 px-2.5 py-0.5 rounded">
                                {{ $pengajuan_jasa->status }}</span>
                    @elseif($pengajuan_jasa->status == 'Pending')
                        <span
                            class="bg-gray-100 text-gray-800 font-medium me-2 px-2.5 py-0.5 rounded">
                                {{ $pengajuan_jasa->status }}</span>
                    @elseif($pengajuan_jasa->status == 'Completed')
                        <span
                            class="bg-green-100 text-green-800 font-medium me-2 px-2.5 py-0.5 rounded">
                                {{ $pengajuan_jasa->status }}</span>
                    @elseif($pengajuan_jasa->status == 'Canceled')
                        <span
                            class="bg-red-100 text-red-800 font-medium me-2 px-2.5 py-0.5 rounded">
                                {{ $pengajuan_jasa->status }}</span>
                    @elseif($pengajuan_jasa->status == 'On progress')
                        <span
                            class="bg-yellow-100 text-yellow-800 font-medium me-2 px-2.5 py-0.5 rounded">
                                {{ $pengajuan_jasa->status }}</span>
                    @endif</p>
            </div>

            @if(session('success'))
                <div x-data="{ show: true }"
                     x-show="show"
                     x-transition
                     x-init="setTimeout(() => show = false, 2000)" class="bg-green-100 text-green-700 p-4 rounded mb-6">
                    {{ session('success') }}
                </div>
            @endif

            <div class="flex flex-col gap-6">
                <div class="flex flex-col md:flex-row">
                    <div class="w-full md:w-1/2">Nama Pengaju</div>
                    <div class="font-semibold">{{$pengajuan_jasa->nama_lengkap}}</div>
                </div>
                <div class="flex flex-col md:flex-row">
                    <div class="w-full md:w-1/2">NIM</div>
                    <div class="font-semibold">{{$pengajuan_jasa->nim}}</div>
                </div>
                <div class="flex flex-col md:flex-row">
                    <div class="w-full md:w-1/2">Nama Organisasi</div>
                    <div class="font-semibold">{{$pengajuan_jasa->nama_organisasi}}</div>
                </div>
                <div class="flex flex-col md:flex-row">
                    <div class="w-full md:w-1/2">Jabatan</div>
                    <div class="font-semibold">{{$pengajuan_jasa->jabatan}}</div>
                </div>
                <div class="flex flex-col md:flex-row">
                    <div class="w-full md:w-1/2">No. Telepon</div>
                    <div class="font-semibold">{{$pengajuan_jasa->nomor_telepon}}</div>
                </div>
                <div class="flex flex-col md:flex-row">
                    <div class="w-full md:w-1/2">ID LINE</div>
                    <div class="font-semibold">{{$pengajuan_jasa->id_line}}</div>
                </div>
                <div class="flex flex-col md:flex-row">
                    <div class="w-full md:w-1/2">Tipe Pengajuan</div>
                    <div class="font-semibold">{{$pengajuan_jasa->tipe_pengajuan}}</div>
                </div>
                <div class="flex flex-col md:flex-row">
                    <div class="w-full md:w-1/2">Deskripsi Acara</div>
                    <div class="font-semibold">{{$pengajuan_jasa->deskripsi_acara}}</div>
                </div>
                <div class="flex flex-col md:flex-row">
                    <div class="w-full md:w-1/2">Lokasi Acara</div>
                    <div class="font-semibold">{{$pengajuan_jasa->lokasi_acara}}</div>
                </div>
                <div class="flex flex-col md:flex-row">
                    <div class="w-full md:w-1/2">Tanggal Acara</div>
                    <div class="font-semibold">{{$pengajuan_jasa->tanggal_acara}}</div>
                </div>
                <div class="flex flex-col md:flex-row">
                    <div class="w-full md:w-1/2">Waktu</div>
                    <div
                        class="font-semibold">{{$pengajuan_jasa->waktu_mulai . ' - ' . $pengajuan_jasa->waktu_selesai}}</div>
                </div>
                <div class="flex flex-col md:flex-row">
                    <div class="w-full md:w-1/2">Jumalah Tim Medis</div>
                    <div class="font-semibold">{{$pengajuan_jasa->jumalah_tim_medis ?? '-'}}</div>
                </div>
                <div class="flex flex-col md:flex-row">
                    <div class="w-full md:w-1/2">Keterangan</div>
                    <div class="font-semibold">{{$pengajuan_jasa->keterangan}}</div>
                </div>

                <p class="font-bold text-lg mt-10">Update status pengajuan</p>
                <form action="{{route('pengajuan-jasa.update', $pengajuan_jasa)}}" class="w-full md:w-1/2" method="post">
                    @csrf
                    @method('put')
                    <label for="status" class="font-bold">Update status pengajuan</label>
                    <select name="status" id="status"
                            class="w-full mt-2 border-gray-300 rounded-lg focus:border-medic-primary">
                        <option value="Pending" @selected($pengajuan_jasa->status == 'Pending')>Pending</option>
                        <option value="Approved" @selected($pengajuan_jasa->status == 'Accepted')>Approved</option>
                        <option value="On progress" @selected($pengajuan_jasa->status == 'On progress')>On Progress</option>
                        <option value="Canceled" @selected($pengajuan_jasa->status == 'Canceled')>Canceled</option>
                    </select>
                    <x-input-error :messages="$errors->get('pengajuan_jasa')" class="mt-2"/>

                    <button type="submit"
                            class="mt-8 bg-white border border-medic-primary hover:bg-medic-primary hover:text-white text-medic-primary transition-colors ease-in-out duration-200 px-4 w-full md:w-[265px] xl:w-[300px] rounded-lg py-2">
                        Update
                    </button>
                </form>
            </div>
        </div>
    </div>

@endsection
