@extends('layouts.app',['title' => 'Form Pengajuan'])

@section('content')
    <h1 class="text-center text-medic-primary-dark font-extrabold text-3xl md:text-4xl">Form Pengajuan Jasa <span
                class="block mt-2">Alat Kesehatan dan Medis</span></h1>

    <div class="flex flex-col items-center mt-10">
        @if(session('success'))
            <div x-data="{ show: true }"
                 x-show="show"
                 x-transition
                 x-init="setTimeout(() => show = false, 2000)"
                 class="bg-green-100 w-3/4 md:w-1/2 text-green-700 p-4 rounded mb-6">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('form.store') }}" method="POST" class="w-3/4 md:w-1/2">
            @csrf
            <div class="mb-4">
                <label for="nama_lengkap" class="block font-medium">Nama Lengkap</label>
                <input type="text" value="{{old('nama_lengkap')}}" placeholder="Masukkan nama lengkap"
                       name="nama_lengkap" id="nama_lengkap"
                       class="w-full border-gray-300 rounded-lg focus:border-medic-primary">

                <x-input-error :messages="$errors->get('nama_lengkap')" class="mt-2"/>
            </div>
            <div class="mb-4">
                <label for="nim" class="block font-medium">NIM</label>
                <input type="text" value="{{old('nim')}}" placeholder="ex. 12345 (Tanpa angka 0 di depan)" name="nim"
                       id="nim"
                       class="w-full border-gray-300 rounded-lg focus:border-medic-primary">

                <x-input-error :messages="$errors->get('nim')" class="mt-2"/>
            </div>
            <div class="mb-4">
                <label for="nomor_telepon" class="block font-medium">Nomor Telepon</label>
                <input type="text" value="{{old('nomor_telepon')}}" placeholder="ex. 0812345678910" name="nomor_telepon"
                       id="nomor_telepon"
                       class="w-full border-gray-300 rounded-lg focus:border-medic-primary">

                <x-input-error :messages="$errors->get('nomor_telepon')" class="mt-2"/>
            </div>
            <div class="mb-4">
                <label for="id_line" class="block font-medium">ID Line</label>
                <input type="text" value="{{old('id_line')}}" placeholder="Masukkan ID Line" name="id_line" id="id_line"
                       class="w-full border-gray-300 rounded-lg focus:border-medic-primary">

                <x-input-error :messages="$errors->get('id_line')" class="mt-2"/>
            </div>
            <div class="mb-4">
                <label for="tipe_pengajuan" class="block font-medium">Tipe Pengajuan</label>
                <select name="tipe_pengajuan" id="tipe_pengajuan"
                        class="w-full border-gray-300 rounded-lg focus:border-medic-primary">
                    <option value="" disabled selected class="bg-gray-200">-- PILIH TIPE PENGAJUAN --</option>
                    <option value="Alat kesehatan">Alat kesehatan</option>
                    <option value="Medis">Medis</option>
                </select>

                <x-input-error :messages="$errors->get('tipe_pengajuan')" class="mt-2"/>
            </div>
            <div class="mb-4">
                <label for="nama_organisasi" class="block font-medium">Nama Organisasi</label>
                <input type="text" value="{{old('nama_organisasi')}}" placeholder="Masukkan nama orgnisasi"
                       name="nama_organisasi" id="nama_organisasi"
                       class="w-full border-gray-300 rounded-lg focus:border-medic-primary">

                <x-input-error :messages="$errors->get('nama_organisasi')" class="mt-2"/>
            </div>
            <div class="mb-4">
                <label for="jabatan" class="block font-medium">Jabatan</label>
                <input type="text" value="{{old('jabatan')}}" placeholder="Masukkan jabatan Anda" name="jabatan"
                       id="jabatan"
                       class="w-full border-gray-300 rounded-lg focus:border-medic-primary">

                <x-input-error :messages="$errors->get('jabatan')" class="mt-2"/>
            </div>
            <div class="mb-4">
                <label for="nama_acara" class="block font-medium">Nama Acara</label>
                <input type="text" value="{{old('nama_acara')}}" placeholder="Masukkan nama acara" name="nama_acara"
                       id="nama_acara"
                       class="w-full border-gray-300 rounded-lg focus:border-medic-primary">

                <x-input-error :messages="$errors->get('nama_acara')" class="mt-2"/>
            </div>
            <div class="mb-4">
                <label for="deskripsi_acara" class="block font-medium">Deskripsi</label>
                <textarea name="deskripsi_acara" placeholder="Masukkan deskripsi acara" id="deskripsi_acara"
                          class="w-full border-gray-300 rounded-lg focus:border-medic-primary">{{old('deskripsi_acara')}}</textarea>

                <x-input-error :messages="$errors->get('deskripsi_acara')" class="mt-2"/>
            </div>
            <div class="mb-4">
                <label for="lokasi_acara" class="block font-medium">Lokasi</label>
                <input type="text" value="{{old('lokasi')}}" placeholder="Masukkan lokasi acara" name="lokasi_acara"
                       id="lokasi_acara"
                       class="w-full border-gray-300 rounded-lg focus:border-medic-primary">

                <x-input-error :messages="$errors->get('lokasi_acara')" class="mt-2"/>
            </div>
            <div class="mb-4">
                <label for="tanggal_acara" class="block font-medium">Tanggal</label>
                <input type="date" value="{{old('tanggal_acara')}}" name="tanggal_acara" id="tanggal_acara"
                       class="w-full border-gray-300 rounded-lg focus:border-medic-primary">

                <x-input-error :messages="$errors->get('tanggal_acara')" class="mt-2"/>
            </div>
            <div class="mb-4">
                <label for="waktu_mulai" class="block font-medium">Waktu Mulai</label>
                <input type="time" value="{{old('waktu_mulai')}}" name="waktu_mulai" id="waktu_mulai"
                       class="w-full border-gray-300 rounded-lg focus:border-medic-primary">

                <x-input-error :messages="$errors->get('waktu_mulai')" class="mt-2"/>
            </div>
            <div class="mb-4">
                <label for="waktu_selesai" class="block font-medium">Waktu Selesai</label>
                <input type="time" value="{{old('waktu_selesai')}}" name="waktu_selesai" id="waktu_selesai"
                       class="w-full border-gray-300 rounded-lg focus:border-medic-primary">

                <x-input-error :messages="$errors->get('waktu_selesai')" class="mt-2"/>
            </div>
            <div class="mb-4">
                <label for="jumlah_tim_medis" class="block font-medium">Jumlah Tim Medis</label>
                <input type="number" value="{{old('jumlah_tim_medis')}}"
                       placeholder="Isi 0 jika meminjam alat kesehatan" name="jumlah_tim_medis"
                       id="jumlah_tim_medis"
                       class="w-full border-gray-300 rounded-lg focus:border-medic-primary">

                <x-input-error :messages="$errors->get('jumlah_tim_medis')" class="mt-2"/>
            </div>
            <div class="mb-4">
                <label for="keterangan" class="block font-medium">Keterangan</label>
                <textarea name="keterangan" id="keterangan"
                          placeholder="Bisa berupa obat apa saja yang dibutuhkan atau catatan lainnya (opsional)"
                          class="w-full border-gray-300 rounded-lg focus:border-medic-primary">{{old('keterangan')}}</textarea>

                <x-input-error :messages="$errors->get('keterangan')" class="mt-2"/>
            </div>
            <div class="flex justify-center mt-6">
                <button type="submit"
                        class="bg-white border border-medic-primary hover:bg-medic-primary hover:text-white text-medic-primary transition-colors ease-in-out duration-200 px-4 w-full md:w-[265px] xl:w-[300px] rounded-lg py-2">
                    Submit
                </button>
            </div>
        </form>
    </div>
@endsection
