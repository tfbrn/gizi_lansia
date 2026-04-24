@extends('layouts.app')

@section('title', 'Tentang Lansia')

@section('content')
<div class="bg-white p-8 rounded-[2rem] shadow-sm border border-slate-100 mb-10">
    <div class="flex items-center space-x-4 mb-8">
        <div class="bg-emerald-100 text-emerald-600 w-14 h-14 rounded-2xl flex items-center justify-center text-2xl">
            <i class="fa-solid fa-person-cane"></i>
        </div>
        <div>
            <h2 class="text-2xl font-black text-slate-800 uppercase tracking-tight">Mengenal Lansia & Kesehatan Gizi</h2>
            <p class="text-sm text-slate-500 italic">Panduan lengkap fase lanjut usia dan pemenuhan nutrisi.</p>
        </div>
    </div>

    <div class="prose prose-slate max-w-none text-slate-600 leading-relaxed space-y-8">
        <section>
            <p>
                <strong>Lanjut usia (lansia)</strong> adalah tahap akhir perkembangan pada fase kehidupan manusia. Berdasarkan <strong>Peraturan Pemerintah Nomor 43 Tahun 2004</strong>, batasan lanjut usia adalah seseorang yang telah mencapai usia <strong>60 (enam puluh) tahun ke atas</strong>.
            </p>
            <p>
                Memasuki masa ini, status gizi menjadi indikator krusial kesehatan. Status gizi sendiri merupakan keadaan kesehatan tubuh yang dihasilkan dari konsumsi makanan serta penggunaan zat-zat gizi di dalamnya. Permasalahan gizi pada lansia seringkali merupakan akumulasi dari pola hidup sejak fase muda yang diperburuk oleh penurunan fungsi fisiologis akibat proses penuaan.
            </p>
        </section>

        <hr class="border-slate-100">

        <section>
            <h3 class="text-xl font-bold text-slate-800 flex items-center gap-2">
                <span class="w-8 h-8 bg-amber-100 text-amber-600 rounded-lg flex items-center justify-center text-sm">1</span>
                Perubahan pada Lansia
            </h3>
            <div class="grid md:grid-cols-2 gap-4 mt-4">
                <ul class="list-none space-y-2">
                    <li class="flex items-start gap-2"><i class="fa-solid fa-check text-emerald-500 mt-1"></i> Massa otot berkurang.</li>
                    <li class="flex items-start gap-2"><i class="fa-solid fa-check text-emerald-500 mt-1"></i> Kebutuhan energi berkurang.</li>
                    <li class="flex items-start gap-2"><i class="fa-solid fa-check text-emerald-500 mt-1"></i> Penurunan kemampuan mengunyah (gigi ompong).</li>
                    <li class="flex items-start gap-2"><i class="fa-solid fa-check text-emerald-500 mt-1"></i> Berkurangnya indera pengecapan.</li>
                </ul>
                <ul class="list-none space-y-2">
                    <li class="flex items-start gap-2"><i class="fa-solid fa-check text-emerald-500 mt-1"></i> Kerongkongan mengalami pelebaran.</li>
                    <li class="flex items-start gap-2"><i class="fa-solid fa-check text-emerald-500 mt-1"></i> Penurunan rasa lapar & asam lambung.</li>
                    <li class="flex items-start gap-2"><i class="fa-solid fa-check text-emerald-500 mt-1"></i> Gerakan usus melambat (pemicu konstipasi).</li>
                    <li class="flex items-start gap-2"><i class="fa-solid fa-check text-emerald-500 mt-1"></i> Penyerapan nutrisi di usus menurun.</li>
                </ul>
            </div>
        </section>

        <section class="bg-slate-50 p-6 rounded-2xl border border-slate-100">
            <h3 class="text-xl font-bold text-slate-800 mb-4">Golongan Usia Lansia (WHO)</h3>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="text-center">
                    <div class="text-emerald-600 font-bold text-lg">45 - 59</div>
                    <div class="text-xs uppercase tracking-wider text-slate-500">Usia Pertengahan</div>
                </div>
                <div class="text-center border-l border-slate-200">
                    <div class="text-emerald-600 font-bold text-lg">60 - 74</div>
                    <div class="text-xs uppercase tracking-wider text-slate-500">Lanjut Usia</div>
                </div>
                <div class="text-center border-l border-slate-200">
                    <div class="text-emerald-600 font-bold text-lg">75 - 90</div>
                    <div class="text-xs uppercase tracking-wider text-slate-500">Lansia Tua</div>
                </div>
                <div class="text-center border-l border-slate-200">
                    <div class="text-emerald-600 font-bold text-lg">> 90</div>
                    <div class="text-xs uppercase tracking-wider text-slate-500">Lansia Sangat Tua</div>
                </div>
            </div>
        </section>

        <section>
            <h3 class="text-xl font-bold text-slate-800 mb-4">Pemenuhan Gizi Seimbang</h3>
            <div class="bg-emerald-50 p-6 rounded-2xl text-emerald-900 border border-emerald-100">
                <h4 class="font-bold mb-3 flex items-center gap-2">
                    <i class="fa-solid fa-utensils"></i> Pedoman Gizi Lansia:
                </h4>
                <ul class="grid md:grid-cols-2 gap-x-8 gap-y-2 text-sm">
                    <li>• Konsumsi makanan padat gizi</li>
                    <li>• Batasi gula, garam, dan lemak jenuh</li>
                    <li>• Cukupi Kalsium & Vitamin D (Ikan, Susu)</li>
                    <li>• Perbanyak sayur hijau, merah, & orange</li>
                    <li>• Cukupi asupan air putih</li>
                    <li>• Konsumsi Vitamin B12, Kalium, & Zat Besi</li>
                </ul>
            </div>
        </section>

        <section>
            <h3 class="text-xl font-bold text-slate-800 mb-4 text-center">Pengukuran Status Gizi (IMT)</h3>
            <p class="text-center text-sm mb-6">Status gizi diukur menggunakan Indeks Massa Tubuh (IMT) dengan rumus:</p>

            <div class="flex justify-center mb-8">
                <div class="bg-slate-800 text-white p-4 rounded-xl font-mono text-center shadow-lg">
                    IMT = Berat Badan (kg) / [Tinggi Badan (m) x Tinggi Badan (m)]
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="min-w-full text-center border-collapse">
                    <thead>
                        <tr class="bg-slate-100">
                            <th class="p-3 border border-slate-200 text-slate-700">Kategori</th>
                            <th class="p-3 border border-slate-200 text-slate-700">Nilai IMT</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="p-3 border border-slate-200">Kurus</td>
                            <td class="p-3 border border-slate-200 text-blue-600 font-bold">< 18,5</td>
                        </tr>
                        <tr>
                            <td class="p-3 border border-slate-200">Normal</td>
                            <td class="p-3 border border-slate-200 text-emerald-600 font-bold">18,5 – 25</td>
                        </tr>
                        <tr>
                            <td class="p-3 border border-slate-200">Kegemukan</td>
                            <td class="p-3 border border-slate-200 text-orange-500 font-bold">26 – 29</td>
                        </tr>
                        <tr>
                            <td class="p-3 border border-slate-200">Obesitas</td>
                            <td class="p-3 border border-slate-200 text-red-600 font-bold">> 29</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <div class="bg-blue-50 p-6 rounded-2xl border border-blue-100 flex gap-4 items-start text-blue-900">
            <i class="fa-solid fa-circle-info text-2xl text-blue-500"></i>
            <div>
                <h4 class="font-bold">Tips Sehat Lansia:</h4>
                <p class="text-sm">Tetap lakukan aktivitas fisik ringan (jalan pagi), cek kesehatan secara rutin, dan pilih makanan rendah kolesterol untuk menjaga kualitas hidup di masa tua.</p>
            </div>
        </div>
    </div>
</div>
@endsection
