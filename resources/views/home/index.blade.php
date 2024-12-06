@extends('layouts.app', ['title' => 'Beranda'])

@section('content')
    <!-- Welcome Page -->
    <div class="flex custom-container items-center mx-24">
        <div class="flex flex-col lg:flex-row w-full justify-between">
            <div class="flex flex-col gap-2 justify-center w-full lg:w-1/2">
                <h1 class="text-4xl lg:text-5xl font-bold text-medic-primary-dark">Welcome to</h1>
                <h1 class="text-4xl lg:text-5xl font-bold text-medic-primary">UMN MEDICAL CENTER</h1>
                <p class="text-wrap text-xl text-justify">
                    UMN Medical Center merupakan Lembaga Semi Otonom di bawah pengawasan Badan Eksekutif Mahasiswa yang
                    bergerak di bidang kesehatan. Mulai beroperasi sejak tahun 2014, dan telah resmi berdiri pada tahun
                    2015, UMN Medical Center kini sudah memasuki generasi kesepuluh, menunjukkan eksistensinya yang
                    berkelanjutan dan dedikasinya dalam memberikan pelayanan kesehatan terbaik bagi civitas akademika
                    Universitas Multimedia Nusantara.
                </p>

                <div class="flex flex-row gap-4">
                    <a type="button" href="{{route('contactUs')}}"
                       class="focus:outline-none text-white bg-medic-primary hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                        Contact Us
                    </a>
                    <a type="button" href="{{route('about')}}"
                       class="focus:outline-none border border-medic-primary text-medic-primary bg-white focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                        About Us
                    </a>
                </div>
            </div>
            <img src="{{ asset('assets/images/medi-ical.png') }}" class="w-1/2 lg:w-auto self-center"
                 alt="UMN Medical Center Mascot"/>
        </div>
    </div>
    <!-- /Welcome Page -->

    <!-- About UMN Medic -->
    <div class=" bg-medic-secondary py-40">
        <div class="mx-10 flex flex-col lg:flex-row max-w-full justify-start lg:justify-center items-center gap-12">
            <img src="{{ asset('assets/logos/medic-logo.png') }}" class="w-1/2 lg:w-auto about-logo" data-animate alt="UMN Medical Center Mascot"/>
            <div>
                <p class="text-medic-primary-dark text-3xl font-bold mb-8 about-title" data-animate>
                    ABOUT <span class="text-medic-primary">UMN MEDICAL CENTER</span>
                </p>
                <p class="text-balance text-xl text-justify about-description" data-animate>
                    UMN Medical Center berorientasi pada pelayanan kesehatan dengan kewajiban untuk memberikan
                    pertolongan pertama, obat-obatan, serta edukasi kepada seluruh civitas akademika Universitas Multimedia
                    Nusantara melalui kampanye-kampanye interaktif dan seminar mengenai kesehatan. Selain memiliki kegiatan yang
                    interaktif, UMN Medical Center juga belajar mengenai solidaritas dan kekeluargaan yang disertai dengan
                    pengimplementasian nilai 5C, baik di dalam maupun di luar kampus.
                </p>
            </div>
        </div>
    </div>

    <!-- /About UMN Medic -->

    <!-- Visi & Misi -->
        <!-- Visi -->
        <div class="flex my-12 flex-col">
            <div class="my-4 text-center text-5xl text-medic-primary-dark font-bold">
                VISI
            </div>
            <div class="flex flex-col text-xl text-center">
                <div class="text-xl text-center">
                    Menjadikan UMN Medical Center sebagai unit sarana penolongan pertama di dalam kampus dengan
                </div>
                <div class="text-xl text-center">
                    menjunjung tinggi kekeluargaan dan budi luhur serta berintegritas dalam segala hal.
                </div>     
            </div>
        </div>
        <!-- /Visi -->

        <!-- Misi -->
        <div class="flex h-cover lg:flex-col bg-medic-secondary gap-4">
            <div class="my-20 lg:custom-container mx-12">
                <div class="flex flex-col lg:flex-row">
                    <div class="flex flex-col gap-2 text">
                        <div class="text-center lg:text-left text-5xl text-medic-primary-dark font-bold my-4">
                            MISI
                        </div>
                        <div class="text-center text-wrap lg:text-justify lg:text-left lg:mr-48">
                            <p class="text-xl font-medium text-black my-2">
                                1. Memberikan penanganan dan pelayanan yang terbaik terhadap UMN Medical Center, baik untuk internal maupun
                                eksternal Universitas Multimedia Nusantara.
                            </p>
                            <p class="text-xl font-medium text-black my-2">
                                2. Membangun keterampilan kerja setiap anggota UMN Medical Center dalam segala aspek secara kolaboratif.
                            </p>
                            <p class="text-xl font-medium text-black my-2">
                                3. Menyediakan dan memberikan edukasi mengenai kesehatan kepada pihak internal dan eksternal UMN Medical
                                Center secara kreatif, inovatif, dan interaktif.
                            </p>
                            <p class="text-xl font-medium text-black my-2">
                                4. Meningkatkan rasa kepekaan dan tanggung jawab setiap anggota UMN Medical Center dalam menjalankan
                                kewajibannya.
                            </p>
                            <p class="text-xl font-medium text-black my-2">
                                5. Menjadikan UMN Medical Center sebagai wadah pengembangan mahasiswa tidak hanya dari segi medis namun
                                juga mengembangkan diri mahasiswa.
                            </p>
                            <p class="text-xl font-medium text-black my-2">
                                6. Menjunjung tinggi keadilan baik terhadap pasien, sesama, serta diri sendiri.
                            </p>
                        </div>
                    </div>
                    <img src="{{ asset('assets/images/visi&misi/Misi.png') }}" alt="" class="w-1/2 self-center lg:w-auto" >
                </div>
            </div>
        </div>
        <!-- /Misi -->
    <!-- /Visi & Misi -->
@endsection