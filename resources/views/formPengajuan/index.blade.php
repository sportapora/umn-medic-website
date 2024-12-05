@extends('layouts.app',['title' => 'Form Pengajuan'])

@section('content')
    <h1 class="text-center text-[50px] font-bold text-medic-primary-dark leading-[3rem]">Form Pengajuan Jasa </h1>
    <br/>
    <h1 class="text-center text-[50px] font-bold text-medic-primary-dark leading-[3rem]">Alat Kesehatan dan Medis</h1>
    <br/>
    <div class="flex items-center justify-center">
        <form action="{{ route('form.store') }}" method="POST" class="w-full px-[5rem] xl:px-[20rem]">
            @csrf
            <div class="mb-4">
                <label for="nama_lengkap" class="block font-medium">Nama Lengkap</label>
                <input placeholder="Masukkan nama lengkap" type="text" name="nama_lengkap" id="nama_lengkap" class="w-full border-gray-300 rounded">
            </div>
            <div class="mb-4">
                <label for="nim" class="block font-medium">NIM</label>
                <input placeholder="ex.12345(Tanpa angka 0 di depan)" type="text" name="nim" id="nim" class="w-full border-gray-300 rounded">
            </div>
            <div class="mb-4">
                <label for="nomor_telepon" class="block font-medium">Nomor Telepon</label>
                <input placeholder="ex.0812345678910" name="nomor_telepon" id="nomor_telepon" class="w-full border-gray-300 rounded">
            </div>
            <div class="mb-4">
                <label for="id_line" class="block font-medium">ID Line</label>
                <input placeholder="Masukkan ID Line" name="id_line" id="id_line" class="w-full border-gray-300 rounded">
            </div>
            <div class="mb-4">
                <label for="tipe_pengajuan" class="block font-medium">Tipe Pengajuan</label>
                <select id="tipe_pengajuan" class="w-full border-gray-300 rounded">
                    <option></option>
                    <option value="Medis">Medis</option>
                    <option value="Alat Kesehatan">Alat Kesehatan</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="nama_organisasi" class="block font-medium">Nama Organisasi</label>
                <input placeholder="Masukkan nama organisasi" type="text" name="nama_organisasi" id="nama_organisasi" class="w-full border-gray-300 rounded">
            </div>
            <div class="mb-4">
                <label for="jabatan" class="block font-medium">Jabatan</label>
                <input placeholder="Masukkan jabatan anda" name="jabatan" id="jabatan" class="w-full border-gray-300 rounded">
            </div>
            <div class="mb-4">
                <label for="nama_acara" class="block font-medium">Nama Acara</label>
                <input placeholder="Masukkan nama acara" type="text" name="nama_acara" id="nama_acara" class="w-full border-gray-300 rounded">
            </div>
            <div class="mb-4">
                <label for="deskripsi_acara" class="block font-medium">Deskripsi</label>
                <textarea placeholder="Masukkan deskripsi acara" id="deskripsi_acara" class="w-full border-gray-300 rounded"></textarea>
            </div>
            <div class="mb-4">
                <label for="lokasi_acara" class="block font-medium">Lokasi</label>
                <input placeholder="Masukkan lokasi acara" type="text" name="lokasi_acara" id="lokasi_acara" class="w-full border-gray-300 rounded">
            </div>
            <div class="mb-4">
                <label for="tanggal_acara" class="block font-medium">Tanggal</label>
                <input type="date" name="tanggal_acara" id="tanggal_acara" class="w-full border-gray-300 rounded">
            </div>
            <div class="mb-4">
                <label for="waktu_mulai" class="block font-medium">Waktu Mulai</label>
                <input placeholder="" type="time" name="waktu_mulai" id="waktu_mulai" class="w-full border-gray-300 rounded">
            </div>
            <div class="mb-4">
                <label for="waktu_selesai" class="block font-medium">Waktu Selesai</label>
                <input type="time" name="waktu_selesai" id="waktu_selesai" class="w-full border-gray-300 rounded">
            </div>
            <div class="mb-4">
                <label for="jumlah_tim_medis" class="block font-medium">Jumlah Tim Medis</label>
                <input type="number" name="jumlah_tim_medis" id="jumlah_tim_medis"
                       class="w-full border-gray-300 rounded">
            </div>
            <div class="mb-4">
                <label for="keterangan" class="block font-medium">Keterangan</label>
                <textarea name="keterangan" id="keterangan" class="w-full border-gray-300 rounded"></textarea>
            </div>
            <div class="content-center">
                <button type="submit" class="focus:outline-none border border-medic-primary text-medic-primary bg-white focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-10 py-2.5 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                    Submit
                </button>
            </div>
        </form>
    </div>
@endsection
