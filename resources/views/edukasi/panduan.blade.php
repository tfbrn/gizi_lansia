@extends('layouts.app')

@section('title', 'Panduan Penggunaan')

@section('content')
<div class="max-w-xl mx-auto">
    <div class="text-center mb-8">
        <h2 class="text-3xl font-black text-slate-800 tracking-tight uppercase">Panduan Aplikasi</h2>
        <p class="text-slate-500 text-sm mt-2">Ikuti langkah berikut untuk mengecek kondisi gizi lansia dengan mudah.</p>
    </div>

    <div class="space-y-6">

        <!-- 1 -->
        <div class="flex items-start space-x-4 group">
            <div class="bg-blue-600 text-white font-black rounded-2xl w-12 h-12 flex items-center justify-center">1</div>
            <div class="bg-white p-6 rounded-[2rem] shadow-sm border">
                <h4 class="font-black text-slate-800 mb-1 uppercase text-sm">Masuk ke Aplikasi</h4>
                <p class="text-sm text-slate-500">Silakan login terlebih dahulu menggunakan akun yang sudah terdaftar.</p>
            </div>
        </div>

        <!-- 2 -->
        <div class="flex items-start space-x-4 group">
            <div class="bg-blue-600 text-white font-black rounded-2xl w-12 h-12 flex items-center justify-center">2</div>
            <div class="bg-white p-6 rounded-[2rem] shadow-sm border">
                <h4 class="font-black text-slate-800 mb-1 uppercase text-sm">Buka Menu Klasifikasi</h4>
                <p class="text-sm text-slate-500">Pilih menu <span class="font-bold text-blue-600">"Klasifikasi Gizi"</span>.</p>
            </div>
        </div>

        <!-- 3 -->
        <div class="flex items-start space-x-4 group">
            <div class="bg-blue-600 text-white font-black rounded-2xl w-12 h-12 flex items-center justify-center">3</div>
            <div class="bg-white p-6 rounded-[2rem] shadow-sm border">
                <h4 class="font-black text-slate-800 mb-1 uppercase text-sm">Isi Data Diri</h4>
                <p class="text-sm text-slate-500">Masukkan nama, alamat, dan pekerjaan terlebih dahulu.</p>
            </div>
        </div>

        <!-- 4 -->
        <div class="flex items-start space-x-4 group">
            <div class="bg-blue-600 text-white font-black rounded-2xl w-12 h-12 flex items-center justify-center">4</div>
            <div class="bg-white p-6 rounded-[2rem] shadow-sm border">
                <h4 class="font-black text-slate-800 mb-1 uppercase text-sm">Isi Data Kesehatan</h4>
                <p class="text-sm text-slate-500">Masukkan data seperti usia, tinggi badan (TB), berat badan (BB), tekanan darah, nadi, dan pernapasan.</p>
            </div>
        </div>

        <!-- 5 -->
        <div class="flex items-start space-x-4 group">
            <div class="bg-blue-600 text-white font-black rounded-2xl w-12 h-12 flex items-center justify-center">5</div>
            <div class="bg-white p-6 rounded-[2rem] shadow-sm border">
                <h4 class="font-black text-slate-800 mb-1 uppercase text-sm">Klik Prediksi</h4>
                <p class="text-sm text-slate-500">Tekan tombol <span class="font-bold text-blue-600">"Prediksi Sekarang"</span> untuk memproses data.</p>
            </div>
        </div>

        <!-- 6 -->
        <div class="flex items-start space-x-4 group">
            <div class="bg-blue-600 text-white font-black rounded-2xl w-12 h-12 flex items-center justify-center">6</div>
            <div class="bg-white p-6 rounded-[2rem] shadow-sm border">
                <h4 class="font-black text-slate-800 mb-1 uppercase text-sm">Lihat Hasil</h4>
                <p class="text-sm text-slate-500">Hasil status gizi akan ditampilkan lengkap dengan saran kesehatan.</p>
            </div>
        </div>

        <!-- 7 -->
        <div class="flex items-start space-x-4 group">
            <div class="bg-blue-600 text-white font-black rounded-2xl w-12 h-12 flex items-center justify-center">7</div>
            <div class="bg-white p-6 rounded-[2rem] shadow-sm border">
                <h4 class="font-black text-slate-800 mb-1 uppercase text-sm">Cek Riwayat</h4>
                <p class="text-sm text-slate-500">Buka menu <span class="font-bold text-blue-600">"Riwayat"</span> untuk melihat data sebelumnya.</p>
            </div>
        </div>

    </div>
</div>
@endsection
