@extends('layouts.app',['title' => 'Form Pengajuan'])

@section('content')
    <h1>Form Pengajuan</h1>
    <form action="{{ route('form.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="nama_lengkap" class="block font-medium">Nama Lengkap</label>
            <input type="text" name="nama_lengkap" id="nama_lengkap" class="w-full border-gray-300 rounded">
        </div>
        <div class="mb-4">
            <label for="nim" class="block font-medium">NIM</label>
            <input type="text" name="nim" id="nim" class="w-full border-gray-300 rounded">
        </div>
        <div class="mb-4">
            <label for="nomor_telepon" class="block font-medium">Nomor Telepon</label>
            <input type="text" name="nomor_telepon" id="nomor_telepon" class="w-full border-gray-300 rounded">
        </div>
        <div class="mb-4">
            <label for="id_line" class="block font-medium">ID Line</label>
            <input type="text" name="id_line" id="id_line" class="w-full border-gray-300 rounded">
        </div>
        <div class="mb-4">
            <label for="tipe_pengajuan" class="block font-medium">Tipe Pengajuan</label>
            <input type="text" name="tipe_pengajuan" id="tipe_pengajuan" class="w-full border-gray-300 rounded">
        </div>
        <div class="mb-4">
            <label for="nama_organisasi" class="block font-medium">Nama Organisasi</label>
            <input type="text" name="nama_organisasi" id="nama_organisasi" class="w-full border-gray-300 rounded">
        </div>
        <div class="mb-4">
            <label for="jabatan" class="block font-medium">Jabatan</label>
            <input type="text" name="jabatan" id="jabatan" class="w-full border-gray-300 rounded">
        </div>
        <div class="mb-4">
            <label for="nama_acara" class="block font-medium">Nama Acara</label>
            <input type="text" name="nama_acara" id="nama_acara" class="w-full border-gray-300 rounded">
        </div>
        <div class="mb-4">
            <label for="deskripsi_acara" class="block font-medium">Deskripsi</label>
            <textarea name="deskripsi_acara" id="deskripsi_acara" class="w-full border-gray-300 rounded"></textarea>
        </div>
        <div class="mb-4">
            <label for="lokasi_acara" class="block font-medium">Lokasi</label>
            <input type="text" name="lokasi_acara" id="lokasi_acara" class="w-full border-gray-300 rounded">
        </div>
        <div class="mb-4">
            <label for="tanggal_acara" class="block font-medium">Tanggal</label>
            <input type="date" name="tanggal_acara" id="tanggal_acara" class="w-full border-gray-300 rounded">
        </div>
        <div class="mb-4">
            <label for="waktu_mulai" class="block font-medium">Waktu Mulai</label>
            <input type="time" name="waktu_mulai" id="waktu_mulai" class="w-full border-gray-300 rounded">
        </div>
        <div class="mb-4">
            <label for="waktu_selesai" class="block font-medium">Waktu Selesai</label>
            <input type="time" name="waktu_selesai" id="waktu_selesai" class="w-full border-gray-300 rounded">
        </div>
        <div class="mb-4">
            <label for="jumlah_tim_medis" class="block font-medium">Jumlah Tim Medis</label>
            <input type="number" name="jumlah_tim_medis" id="jumlah_tim_medis" class="w-full border-gray-300 rounded">
        </div>
        <div class="mb-4">
            <label for="keterangan" class="block font-medium">Keterangan</label>
            <textarea name="keterangan" id="keterangan" class="w-full border-gray-300 rounded"></textarea>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">
            Submit
        </button>
    </form>
@endsection
