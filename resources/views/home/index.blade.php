@extends('layouts.main', ['title' => 'Beranda'])

@section('content')
<!-- Welcome Page -->
    <div class="flex custom-container items-center ">
        <div class="flex flex-row w-full justify-between">
            <div class="flex flex-col gap-3 justify-center w-533">
                <p class="text-5xl font-bold text-medic-primary-dark" >Welcome to</p>
                <p class="text-5xl font-bold text-medic-primary" >UMN MEDICAL CENTER</p>
                <p class="text-wrap text-xl" >Lorem ipsum dolor sit amet consectetur. Urna massa mauris tincidunt gravida sed neque. Urna mattis et duis et ut vivamus ac. In malesuada commodo pulvinar</p>

                <div class="flex flex-row">
                    <button type="button" href="" class="focus:outline-none text-white bg-medic-primary hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-semibold rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Contact Us</button>
                </div>
            </div>
            <img src="{{ asset('assets/images/medi-ical.png') }}" class="" alt="UMN Medical Center Mascot" />
        </div>
    </div>
<!-- /Welcome Page -->

<!-- About UMN Medic -->
<div class="flex max-w-full justify-center items-center bg-medic-secondary py-52 gap-12 ">
    <img src="{{ asset('assets/logos/medic-logo.png') }}" alt="UMN Medical Center Mascot" />
    <div class="w-594">
        <p class="text-medic-primary-dark text-3xl font-bold mb-8">
            ABOUT <span class="text-medic-primary">UMN MEDICAL CENTER</span>
        </p>
        <p class="text-balance text-xl" >UMN Medical Center merupakan Lembaga Semi Otonom di bawah pengawasan Badan Eksekutif Mahasiswa yang bergerak di bidang kesehatan. Mulai beroperasi sejak tahun 2014, dan telah resmi berdiri pada tahun 2015. UMN Medical Center kini sudah memasuki generasi kesepuluh, menunjukkan eksistensinya yang berkelanjutan dan dedikasinya dalam memberikan pelayanan kesehatan terbaik bagi civitas akademika Universitas Multimedia Nusantara.</p>
    </div>
</div>
<!-- /About UMN Medic -->

<!-- Visi & Misi -->
<div class="flex flex-col py-28 gap-20">
    <div class="text-center text-5xl text-medic-primary-dark font-bold">
        VISI
    </div>

    <div class="flex flex-row justify-center items-center gap-4">
        <img src="{{ asset('assets/images/visi&misi/Group 7.png') }}" alt="">
        <div class="text-xl text-balance mt-8">
        Menjadikan UMN Medical Center sebagai unit sarana penolongan pertama di dalam kampus dengan menjunjung tinggi kekeluargaan dan budi luhur serta berintegritas dalam segala hal.
        </div>
    </div>

    <div class="text-center text-5xl text-medic-primary-dark font-bold">
        MISI
    </div>

    <div class="flex flex-row text-right items-center gap-4">
        <div class="text-xl text-balance mt-8">
        Memberikan penanganan dan pelayanan yang terbaik terhadap UMN Medical Center, baik untuk internal maupun eksternal Universitas Multimedia Nusantara.
        </div>
        <img src="{{ asset('assets/images/visi&misi/Group 8.png') }}" alt="">
    </div>

    <div class="flex flex-row items-center gap-4">
        <img src="{{ asset('assets/images/visi&misi/Group 9.png') }}" alt="">
        <div class="text-xl text-balance mt-8">
        Membangun keterampilan kerja setiap anggota UMN Medical Center dalam segala aspek secara kolaboratif.
        </div>
    </div>

    <div class="flex flex-row text-right items-center gap-4">
        <div class="text-xl text-balance mt-8">
        Menyediakan dan memberikan edukasi mengenai kesehatan kepada pihak internal dan eksternal UMN Medical Center secara kreatif, inovatif, dan interaktif.
        </div>
        <img src="{{ asset('assets/images/visi&misi/Group 10.png') }}" alt="">
    </div>

    <div class="flex flex-row items-center gap-4">
        <img src="{{ asset('assets/images/visi&misi/Group 11.png') }}" alt="">
        <div class="text-xl text-balance mt-8">
        Meningkatkan rasa kepekaan dan tanggung jawab setiap anggota UMN Medical Center dalam menjalankan kewajibannya.
        </div>
    </div>

    <div class="flex flex-row text-right items-center gap-4">
        <div class="text-xl text-balance mt-8">
        Menjadikan UMN Medical Center sebagai wadah pengembangan mahasiswa tidak hanya dari segi medis namun juga mengembangkan diri mahasiswa.
        </div>
        <img src="{{ asset('assets/images/visi&misi/Group 12.png') }}" alt="">
    </div>
    
    <div class="flex flex-row items-center gap-4">
        <img src="{{ asset('assets/images/visi&misi/Group 13.png') }}" alt="">
        <div class="text-xl text-balance mt-8">
        Menjunjung tinggi keadilan baik terhadap pasien, sesama, serta diri sendiri.
        </div>
    </div>
</div>

<!-- /Visi & Misi -->
@endsection