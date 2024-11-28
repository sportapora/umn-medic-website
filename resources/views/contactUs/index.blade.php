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

    <!-- modal detail info -->
        <!-- Modal toggle button (ini bisa dipicu oleh eventClick) -->
            <button data-modal-target="default-modal" data-modal-toggle="default-modal" class="hidden"></button>
            
            <!-- Main modal -->
            <div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-2xl max-h-full">
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                            <h3 id="modalEventTitle" class="text-xl font-semibold text-gray-900 dark:text-white">
                                Event Title
                            </h3>
                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-4 md:p-5 space-y-4">
                            <p><strong>Tanggal:</strong> <span id="modalEventDate"></span></p>
                            <p><strong>Status:</strong> <span id="modalEventStatus"></span></p>
                            <p><strong>Deskripsi:</strong> <span id="modalEventDescription"></span></p>
                        </div>
                        <!-- Modal footer -->
                        <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                            <button data-modal-hide="default-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tutup</button>
                        </div>
                    </div>
                </div>
            </div>


@endsection