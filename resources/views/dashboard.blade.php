@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="max-w-5xl mx-auto space-y-8 pb-10">

    <div class="relative overflow-hidden bg-slate-900 rounded-[2.5rem] p-8 md:p-12 shadow-2xl">
        <div class="absolute top-0 right-0 -mt-10 -mr-10 w-64 h-64 bg-emerald-500/20 rounded-full blur-3xl"></div>

        <div class="relative flex flex-col md:flex-row items-center justify-between gap-8">
            <div class="text-center md:text-left">
                <h2 class="text-3xl md:text-4xl font-black text-white tracking-tight mb-3">
                    Halo, {{ auth()->user()->name }}! 👋
                </h2>
                <p class="text-slate-400 text-lg max-w-md leading-relaxed">
                    Memeriksa kondisi gizi lansia kini lebih mudah. Anda hanya perlu memasukkan data, lalu hasilnya akan ditampilkan secara otomatis.
                </p>
                <div class="mt-8 flex justify-center md:justify-start">
                    <a href="/klasifikasi" class="px-8 py-4 bg-emerald-500 hover:bg-emerald-600 text-white font-bold rounded-2xl transition-all shadow-lg shadow-emerald-500/25 flex items-center gap-3 group">
                        <i class="fa-solid fa-wand-magic-sparkles transition-transform group-hover:rotate-12"></i>
                        Mulai Cek Sekarang
                    </a>
                </div>
            </div>

            <div class="hidden md:block">
                <div class="w-40 h-40 border-4 border-dashed border-slate-700 rounded-full flex items-center justify-center animate-[spin_10s_linear_infinite]">
                    <i class="fa-solid fa-microchip text-5xl text-emerald-500/50"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

        <div class="group bg-white p-8 rounded-[2rem] shadow-sm border border-slate-100 hover:shadow-md transition-all">
            <div class="w-12 h-12 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center text-xl mb-6">
                <i class="fa-solid fa-clock-rotate-left"></i>
            </div>
            <h4 class="font-bold text-slate-800 uppercase tracking-tight mb-2">Riwayat Data</h4>
            <p class="text-xs text-slate-500 mb-4">Lihat kembali hasil klasifikasi yang telah dilakukan sebelumnya.</p>
            <a href="/lansia" class="text-sm font-bold text-blue-600 flex items-center gap-2">
                Buka Riwayat <i class="fa-solid fa-chevron-right text-[10px]"></i>
            </a>
        </div>

        <div class="group bg-white p-8 rounded-[2rem] shadow-sm border border-slate-100 hover:shadow-md transition-all">
            <div class="w-12 h-12 bg-emerald-50 text-emerald-600 rounded-xl flex items-center justify-center text-xl mb-6">
                <i class="fa-solid fa-book-open"></i>
            </div>
            <h4 class="font-bold text-slate-800 uppercase tracking-tight mb-2">Panduan Gizi</h4>
            <p class="text-xs text-slate-500 mb-4">Informasi lengkap mengenai nutrisi, IMT, dan kesehatan lansia.</p>
            <a href="/penjelasan-lansia" class="text-sm font-bold text-emerald-600 flex items-center gap-2">
                Pelajari Gizi <i class="fa-solid fa-chevron-right text-[10px]"></i>
            </a>
        </div>

        <div class="bg-gradient-to-br from-slate-50 to-slate-100 p-8 rounded-[2rem] border border-slate-200">
            <h4 class="font-bold text-slate-800 uppercase tracking-tight mb-3">💡 Tahukah Anda?</h4>
            <p class="text-xs text-slate-600 leading-relaxed italic">
                "Penurunan indera pengecap pada lansia sering membuat nafsu makan menurun. Sajikan makanan dengan warna menarik untuk merangsang selera."
            </p>
            <div class="mt-4 pt-4 border-t border-slate-200 text-[10px] text-slate-400">
                Sumber: Pedoman Gizi Kemenkes
            </div>
        </div>

    </div>
</div>
@endsection
