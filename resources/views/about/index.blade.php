@extends('layouts.app', ['title' => 'Tentang Kami'])

@section('content')
<!-- About -->
    <div class="flex flex-col items-center custom-container gap-12 pb-20">
        <div class="text-medic-primary-dark font-bold text-5xl">
            About
        </div>
        <div class="flex flex-row gap-12">
            <img class="h-auto max-w-lg rounded-lg" src="{{ asset('assets/dummy/Dummy 1.jpg') }}" alt="image description">
            <img class="h-auto max-w-lg rounded-lg" src="{{ asset('assets/dummy/Dummy 1.jpg') }}" alt="image description">
            <img class="h-auto max-w-lg rounded-lg" src="{{ asset('assets/dummy/Dummy 1.jpg') }}" alt="image description">
        </div>
        <div class="text-center text-xl">
            UMN Medical Center berorientasi pada pelayanan kesehatan dengan kewajiban untuk memberikan pertolongan pertama, obat-obatan, serta edukasi kepada seluruh civitas akademika Universitas Multimedia Nusantara melalui kampanye-kampanye interaktif dan seminar mengenai kesehatan. Selain memiliki kegiatan yang interaktif, UMN Medical Center juga belajar mengenai solidaritas dan kekeluargaan yang disertai dengan pengimplementasian nilai 5C, baik di dalam maupun di luar kampus.
        </div>
    </div>
<!-- /About -->

<!-- Filosofi -->
    <div class="flex flex-col bg-medic-secondary items-center gap-12 py-32">
        <div class="text-medic-primary-dark font-bold text-5xl">
            Filosofi Logo
        </div>
        <div class="">
            <img src="{{ asset('assets/logos/medic-logo.png') }}" alt="medic-logo">
        </div>
        <div class="flex flex-row custom-container">
            <div class="flex flex-col gap-12">
                <div class="flex flex-row gap-12 items-center">
                    <img src="{{ asset('assets/images/filosofi/Photo.png') }}" alt="">
                    <div class="flex flex-col justify-center ">
                        <div class="text-medic-primary-dark text-xl">
                            Sisi Terbuka pada Pertemuan Tanda Plus
                        </div>
                        <div class="text-xl text-wrap w-1/2">
                            Melambangkan keterbukaan
                            UMN Medical Center kepada siapapun.
                        </div>
                    </div>
                    <img src="{{ asset('assets/images/filosofi/Group 15.png') }}" alt="" class="ps-16">
                    <div class="flex flex-col justify-center ">
                        <div class="text-medic-primary-dark text-xl">
                        Logo Universitas Multimedia Nusantara
                        </div>
                        <div class="text-xl text-balance">
                        Melambangkan UMN Medical Center Merupakan bagian dari Universitas Multimedia Nusantara.
                        </div>
                    </div>
                </div>
                <div class="flex flex-row gap-12 items-center">
                    <img src="{{ asset('assets/images/filosofi/Photo (1).png') }}" alt="">
                    <div class="flex flex-col justify-center w-1/2">
                        <div class="text-medic-primary-dark text-xl">
                        Warna Hijau
                        </div>
                        <div class="text-xl text-wrap w-1/2">
                        Melambangkan kesegaran dan keharmonisan.
                        </div>
                    </div>
                    <img src="{{ asset('assets/images/filosofi/Group 16.png') }}" alt="" class="ps-16" >
                    <div class="flex flex-col justify-center ">
                        <div class="text-medic-primary-dark text-xl">
                        Tanda Plus Hijau
                        </div>
                        <div class="text-xl text-balance">
                        Melambangkan 4 fakultas yang ada di Universitas Multimedia Nusantara, yang berarti kerjasama dan solidaritas antar anggota.
                        </div>
                    </div>
                </div>
                <div class="flex flex-row gap-12 items-center">
                    <img src="{{ asset('assets/images/filosofi/Photo (2).png') }}" alt="">
                    <div class="flex flex-col justify-center ">
                        <div class="text-medic-primary-dark text-xl">
                        Bagian Melengkung pada Ujung Tanda Plus
                        </div>
                        <div class="text-xl text-wrap w-1/2">
                        Melambangkan fleksibilitas.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- /Filosofi -->

<!-- Tagline -->
    <div class="flex flex-col justify-center items-center my-16">
        <div class="flex flex-row gap-10 my-10">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#62825D" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"/></svg>
            <div class="text-medic-primary-dark text-5xl font-bold">
                Tagline Gen X
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#62825D" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"/></svg>
        </div>
        <div class="text-4xl">
        “Care for <span class="text-medic-primary" >Health</span>, Care for <span class="text-medic-primary" >Life</span>”
        </div>
    </div>
<!-- /Tagline -->

<!-- Maskot -->
    <div class="flex flex-col bg-medic-secondary gap-12 justify-center items-center">
        <div class="text-5xl text-medic-primary-dark font-bold mt-28">
            Maskot
        </div>
        <div class="mb-16">
            <img src="{{ asset('assets/images/Medi Ical.png') }}" alt="">
        </div>
    </div>
<!-- Maskot -->

<!-- Struktur -->
    <img class="w-full h-auto object-cover" src="{{ asset('assets/images/ORGANIGRAM_PROTO_3 1.png') }}" alt="">
<!-- /Struktur -->
@endsection
