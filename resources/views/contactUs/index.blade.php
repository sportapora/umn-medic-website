@extends('layouts.app', ['title' => 'Hubungi Kami'])

@section('content')
    <div class="flex custom-container">
        <div class="flex flex-col gap-4">
            <p class="text-medic-primary-dark font-bold text-3xl">Pengajuan Jasa</p>
            <p class="text-medic-primary-dark font-bold text-3xl">Alat Kesehatan dan Medis</p>
            <p class="text-medic-primary text-2xl mt-6 font-medium">Syarat dan Ketentuan</p>
            <div class="flex flex-col ms-2 mt-2">
                <p class="" >1. Pengajuan jasa harus diajukan minimal H-7 sebelum acara berlangsung.</p>
                <p class="" >2. Anggota Medic wajib mendapatkan konsumsi yang layak apabila pengaju membutuhkan jasa medis selama 3 jam atau lebih. Jumlah konsumsi disesuai kan dengan jumlah tenaga medis yang diajukan.</p>
                <p class="" >3. Pengaju wajib datang ke UKK apabila sudah dihubungi oleh pihak UMN Medical Center, untuk menandatangani form pengajuan.</p>
                <p class="" >4. Anggota Medic wajib diperlakukan dengan baik sesuai aturan serta norma yang berlaku. Jika ditemukan perlakukan tidak baik terhadap anggota Medic, maka Medic berhak memberikan sanksi yang terberat adalah dengan menarik anggota dari pengajuan jasa dan blackpst acara.</p>
                <br />
                <p>Selebihnya, tercantum dalam SOP Eksternal UMN Medical Center.</p>
            </div>
            
            <!-- add calendar -->
            <div class="flex flex-col md:flex-row items-center justify-between md:space-x-4 space-y-4 md:space-y-0">
                <div class="flex flex-col">
                    <p class="text-medic-primary-dark text-3xl font-bold">Kalender Pengajuan
                        <br />
                        Jasa
                    </p>
                    <img src="{{asset("assets/images/ContactUs.png")}}" class="ms-28 w-[300px] md:w-[500px] h-[300px] md:h-[480px] object-contain" alt="">
                </div>
                <div class="w-[300px] md:w-[703.61px] h-[300px] md:h-[619px] me-12" id="calendar"></div>
            </div>
            <!-- end calendar -->

            <div class="flex justify-center mt-24">
                <a type="button" href="{{route('about')}}"
                        class="focus:outline-none border border-medic-primary text-medic-primary bg-white focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-10 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                    Form Pengajuan
                </a>
            </div>
        </div>
    </div>
@endsection