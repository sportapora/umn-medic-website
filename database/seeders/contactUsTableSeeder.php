<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class contactUsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contactUs')->insert([
            [
                'nama_lengkap' => 'John Doe',
                'nim' => '12345',
                'nomor_telepon' => '081234567890',
                'id_line' => 'johndoe123',
                'tipe_pengajuan' => 'Proposal Event',
                'nama_organisasi' => 'Tech Community',
                'jabatan' => 'Chairperson',
                'nama_acara' => 'Tech Fair 2024',
                'deskripsi_acara' => 'A fair showcasing innovative technologies.',
                'lokasi_acara' => 'Main Hall',
                'tanggal_acara' => '2024-12-01',
                'waktu_mulai' => '10:00:00',
                'waktu_selesai' => '15:00:00',
                'jumlah_tim_medis' => 2,
                'keterangan' => 'Need 2 first aid kits.',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_lengkap' => 'Jane Smith',
                'nim' => '54321',
                'nomor_telepon' => '081987654321',
                'id_line' => 'janesmith456',
                'tipe_pengajuan' => 'Health Campaign',
                'nama_organisasi' => 'Health Club',
                'jabatan' => 'Event Coordinator',
                'nama_acara' => 'Wellness Drive',
                'deskripsi_acara' => 'Promoting healthy lifestyles.',
                'lokasi_acara' => 'Community Center',
                'tanggal_acara' => '2024-12-10',
                'waktu_mulai' => '09:00:00',
                'waktu_selesai' => '12:00:00',
                'jumlah_tim_medis' => 3,
                'keterangan' => 'Need medical supplies.',
                'status' => false, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
