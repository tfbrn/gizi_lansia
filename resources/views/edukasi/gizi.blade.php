@extends('layouts.app')

@section('title', 'Info Kategori Gizi')

@section('content')
<div class="max-w-4xl mx-auto px-2 space-y-10 pb-20">

    <div class="text-center mb-8">
        <h2 class="text-3xl font-black text-slate-800 tracking-tight uppercase">Kategori & Pedoman Gizi</h2>
        <p class="text-slate-500 text-sm mt-2">Klasifikasi dan panduan nutrisi untuk mendukung kesehatan lansia.</p>
    </div>

    <div class="grid md:grid-cols-3 gap-5">
        <div class="bg-white p-6 rounded-[2rem] shadow-sm border border-slate-100 border-l-[12px] border-l-orange-500 hover:shadow-md transition-all">
            <div class="flex items-center space-x-3 mb-3">
                <div class="bg-orange-100 text-orange-600 p-2 rounded-xl"><i class="fa-solid fa-weight-scale"></i></div>
                <h3 class="font-black text-slate-800 uppercase text-xs tracking-tight">Gizi Kurang</h3>
            </div>
            <p class="text-slate-600 text-xs leading-relaxed">Malnutrisi akibat asupan rendah. Berisiko pada penurunan daya tahan fisik dan massa tubuh.</p>
        </div>

        <div class="bg-white p-6 rounded-[2rem] shadow-sm border border-slate-100 border-l-[12px] border-l-emerald-500 hover:shadow-md transition-all">
            <div class="flex items-center space-x-3 mb-3">
                <div class="bg-emerald-100 text-emerald-600 p-2 rounded-xl"><i class="fa-solid fa-thumbs-up"></i></div>
                <h3 class="font-black text-slate-800 uppercase text-xs tracking-tight">Gizi Normal</h3>
            </div>
            <p class="text-slate-600 text-xs leading-relaxed">Kondisi ideal di mana berat badan selaras dengan tinggi badan. Metabolisme stabil dan sehat.</p>
        </div>

        <div class="bg-white p-6 rounded-[2rem] shadow-sm border border-slate-100 border-l-[12px] border-l-red-500 hover:shadow-md transition-all">
            <div class="flex items-center space-x-3 mb-3">
                <div class="bg-red-100 text-red-600 p-2 rounded-xl"><i class="fa-solid fa-person-rays"></i></div>
                <h3 class="font-black text-slate-800 uppercase text-xs tracking-tight">Obesitas</h3>
            </div>
            <p class="text-slate-600 text-xs leading-relaxed">Akumulasi lemak berlebih. Berisiko memicu penyakit degeneratif seperti diabetes dan hipertensi.</p>
        </div>
    </div>

    <div class="bg-white p-8 rounded-[2.5rem] shadow-sm border border-slate-100">
        <div class="flex items-center space-x-4 mb-6">
            <div class="bg-blue-100 text-blue-600 w-12 h-12 rounded-2xl flex items-center justify-center text-xl">
                <i class="fa-solid fa-utensils"></i>
            </div>
            <h2 class="text-xl font-black text-slate-800 uppercase">Makanan Seimbang Lansia</h2>
        </div>

        <div class="grid md:grid-cols-2 gap-x-8 gap-y-4">
            <ul class="space-y-3">
                <li class="flex items-start gap-3 text-sm text-slate-600">
                    <i class="fa-solid fa-circle-check text-emerald-500 mt-1"></i>
                    <span><strong>Protein:</strong> Pertahankan porsi (jangan dikurangi/ditambah berlebih).</span>
                </li>
                <li class="flex items-start gap-3 text-sm text-slate-600">
                    <i class="fa-solid fa-circle-check text-emerald-500 mt-1"></i>
                    <span><strong>Kalsium & Vit D:</strong> Susu dan ikan sangat penting untuk tulang.</span>
                </li>
                <li class="flex items-start gap-3 text-sm text-slate-600">
                    <i class="fa-solid fa-circle-xmark text-red-400 mt-1"></i>
                    <span><strong>Hindari:</strong> Gorengan, tepung, dan krim cokelat manis.</span>
                </li>
            </ul>
            <ul class="space-y-3">
                <li class="flex items-start gap-3 text-sm text-slate-600">
                    <i class="fa-solid fa-circle-check text-emerald-500 mt-1"></i>
                    <span><strong>Serat Tinggi:</strong> Pepaya dan bijian untuk cegah konstipasi.</span>
                </li>
                <li class="flex items-start gap-3 text-sm text-slate-600">
                    <i class="fa-solid fa-circle-check text-emerald-500 mt-1"></i>
                    <span><strong>Porsi:</strong> Kecil tapi sering (3x makan utama, 3x selingan).</span>
                </li>
                <li class="flex items-start gap-3 text-sm text-slate-600">
                    <i class="fa-solid fa-circle-check text-emerald-500 mt-1"></i>
                    <span><strong>Tekstur:</strong> Modifikasi makanan (lunak/kukus) sesuai kemampuan gigi.</span>
                </li>
            </ul>
        </div>
    </div>

    <div class="grid md:grid-cols-2 gap-8">
        <div class="space-y-6">
            <h3 class="text-lg font-black text-slate-800 uppercase flex items-center gap-2">
                <span class="w-2 h-6 bg-red-500 rounded-full"></span> Masalah Gizi
            </h3>
            <div class="space-y-4 text-sm text-slate-600 leading-relaxed">
                <div class="bg-slate-50 p-5 rounded-2xl border border-slate-100">
                    <p class="font-bold text-slate-800 mb-1 italic">1. Obesitas</p>
                    <p>Terjadi karena konsumsi berlebih (lemak/karbo) yang tidak sebanding dengan aktivitas fisik, sehingga kalori diubah menjadi lemak tubuh.</p>
                </div>
                <div class="bg-slate-50 p-5 rounded-2xl border border-slate-100">
                    <p class="font-bold text-slate-800 mb-1 italic">2. Malnutrisi</p>
                    <p>Kurangnya vitamin, mineral, atau protein (Albumin rendah). Berdampak pada kelemahan otot, kelelahan, dan risiko tinggi jatuh.</p>
                </div>
            </div>
        </div>

        <div class="space-y-6">
            <h3 class="text-lg font-black text-slate-800 uppercase flex items-center gap-2">
                <span class="w-2 h-6 bg-emerald-500 rounded-full"></span> Kebutuhan Zat Gizi
            </h3>
            <div class="space-y-3">
                <div class="flex items-center justify-between p-3 border-b border-slate-100">
                    <span class="text-sm font-bold text-slate-700">Energi/Kalori</span>
                    <span class="text-xs bg-slate-100 px-3 py-1 rounded-full text-slate-500">Sesuai Aktivitas</span>
                </div>
                <div class="flex items-center justify-between p-3 border-b border-slate-100">
                    <span class="text-sm font-bold text-slate-700">Protein</span>
                    <span class="text-xs bg-slate-100 px-3 py-1 rounded-full text-slate-500">Zat Pembangun</span>
                </div>
                <div class="flex items-center justify-between p-3 border-b border-slate-100">
                    <span class="text-sm font-bold text-slate-700">Cairan</span>
                    <span class="text-xs bg-emerald-100 px-3 py-1 rounded-full text-emerald-600 font-bold">1500 - 2000 ml / hari</span>
                </div>
                <p class="text-[10px] text-slate-400 italic mt-2">* Hindari kopi, teh kental, dan minuman manis berlebih.</p>
            </div>
        </div>
    </div>

    <div class="bg-slate-800 text-white p-8 rounded-[2.5rem] shadow-xl">
        <h3 class="text-xl font-bold mb-6 flex items-center gap-3">
            <i class="fa-solid fa-star text-yellow-400"></i> Rekomendasi Gizi Seimbang
        </h3>
        <div class="grid md:grid-cols-2 gap-6 text-sm text-slate-300">
            <div class="space-y-4">
                <p><strong class="text-white">Batasi GGL:</strong> Kurangi Gula, Garam, dan Lemak jenuh untuk cegah hipertensi & stroke.</p>
                <p><strong class="text-white">Warna-warni:</strong> Konsumsi sayur/buah berwarna hijau, merah, atau orange.</p>
            </div>
            <div class="space-y-4">
                <p><strong class="text-white">Aktivitas Fisik:</strong> Rutin jalan santai, berkebun, atau yoga untuk menjaga kekuatan otot.</p>
                <p><strong class="text-white">Air Putih:</strong> Minimal 6 gelas per hari untuk menjaga hidrasi tubuh tetap optimal.</p>
            </div>
        </div>
        <div class="mt-8 pt-6 border-t border-slate-700 text-center text-xs text-slate-400">
            Pola makan sehat mencegah penyakit terkait makanan (Foodborne Disease).
        </div>
    </div>

</div>
@endsection
