@extends('layouts.app', ['title' => 'Program Kerja'])

@section('content')
    <style>
        .container {
            width: 90%;
            margin: 0 auto;
            text-align: center;
        }

        .program-section.featured {
            background-color: #E0F7E9;
            padding: 20px 0;
            width: 100vw;
            margin-left: calc(-50vw + 50%);
            border-radius: 0;
        }

        .routine-title, .featured-title {
            font-family: 'Poppins', sans-serif;
            font-style: normal;
            font-weight: 700;
            font-size: 36px;
            line-height: 72px;
            color: #62825D;
            margin: 50px 0;
            text-align: center;
        }

        .program-section {
            margin: 50px 0;
        }

        .program-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }

        .program-cards.featured {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            justify-content: center;
            justify-items: center;
        }


        .card.featured {
            width: 100%;
            max-width: 250px;
            height: 250px;
            overflow: hidden;
            border: none;
            box-shadow: none;
            background-color: transparent;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            border-radius: 10px;
        }

        .card h3 {
            font-size: 18px;
            margin: 10px 0;
            color: #333;
        }

        .card p {
            font-size: 14px;
            color: #666;
        }
    </style>
    <div class="container">
        <div class="program-section">
            <h2 class="routine-title">Program Kerja Rutin</h2>
            <div class="program-cards">
                <div class="card featured">
                    <img src="assets/images/proker/Group 1.png" alt="Pelatihan">
                </div>
                <div class="card featured">
                    <img src="assets/images/proker/Group 2.png" alt="Piket">
                </div>
                <div class="card featured">
                    <img src="assets/images/proker/Group 3.png" alt="Rapat">
                </div>
                <div class="card featured">
                    <img src="assets/images/proker/Group 4.png" alt="Penggunaan Jasa">
                </div>
            </div>
        </div>

        <div class="program-section featured">
            <h2 class="featured-title">Program Kerja Unggulan</h2>
            <div class="program-cards featured">
                <div class="card featured">
                    <img src="assets/images/proker/Group 5.png" alt="Apresiasi">
                </div>
                <div class="card featured">
                    <img src="assets/images/proker/Group 6.png" alt="Identity Card">
                </div>
                <div class="card featured">
                    <img src="assets/images/proker/Group 7.png" alt="Afkir">
                </div>
                <div class="card featured">
                    <img src="assets/images/proker/Group 8.png" alt="Cek Kesehatan">
                </div>
                <div class="card featured">
                    <img src="assets/images/proker/Group 9.png" alt="Pelatihan Civitas">
                </div>
                <div class="card featured">
                    <img src="assets/images/proker/Group 10.png" alt="Bonding">
                </div>
            </div>
        </div>
    </div>

@endsection
