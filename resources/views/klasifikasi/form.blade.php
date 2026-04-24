@extends('layouts.app')

@section('title', 'Klasifikasi Gizi')

@section('content')
<div class="max-w-xl mx-auto px-2">
    <div class="text-center mb-8">
        <h2 class="text-3xl font-black text-slate-800 uppercase">Analisis Gizi</h2>
        <p class="text-slate-500 text-sm mt-2">
            Isi data berikut. Jika tidak tahu, lihat panduan kecil di bawah setiap kolom.
        </p>
    </div>

    <div class="bg-white rounded-[2.5rem] shadow-xl border overflow-hidden">

        <!-- 🔥 FORM (DIUBAH DI SINI SAJA) -->
        <form method="POST" action="/prediksi" class="p-8 space-y-6">
    @csrf

    <!-- 🔥 TAMBAHKAN INI -->
    <input type="hidden" name="nama" value="{{ $data['nama'] ?? '' }}">
    <input type="hidden" name="alamat" value="{{ $data['alamat'] ?? '' }}">
    <input type="hidden" name="pekerjaan" value="{{ $data['pekerjaan'] ?? '' }}">

            <!-- JK & Usia -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="text-xs font-bold text-slate-500">Jenis Kelamin</label>
                    <select name="jk" class="w-full p-4 rounded-xl border">
                        <option value="1">Laki-laki</option>
                        <option value="0">Perempuan</option>
                    </select>
                </div>

                <div>
                    <label class="text-xs font-bold text-slate-500">Usia</label>
                    <input type="number" name="usia" class="w-full p-4 rounded-xl border" placeholder="contoh: 65" required>
                </div>
            </div>

            <!-- TB & BB -->
            <div class="grid grid-cols-2 gap-6">
                <div>
                    <label class="text-xs font-bold text-slate-500">Tinggi Badan (cm)</label>
                    <input type="number" name="tb" class="w-full p-4 rounded-xl border" placeholder="contoh: 160" required>
                </div>

                <div>
                    <label class="text-xs font-bold text-slate-500">Berat Badan (kg)</label>
                    <input type="number" name="bb" class="w-full p-4 rounded-xl border" placeholder="contoh: 55" required>
                </div>
            </div>

            <!-- Tekanan Darah -->
            <div class="grid grid-cols-2 gap-6">
                <div>
                    <label class="text-xs font-bold text-slate-500">Sistolik</label>
                    <input type="number" name="sistolik" class="w-full p-4 rounded-xl border" placeholder="contoh: 120" required>
                    <p class="text-xs text-gray-400 mt-1">
                        Tekanan darah atas (contoh: 120 dari 120/80)
                    </p>
                </div>

                <div>
                    <label class="text-xs font-bold text-slate-500">Diastolik</label>
                    <input type="number" name="diastolik" class="w-full p-4 rounded-xl border" placeholder="contoh: 80" required>
                    <p class="text-xs text-gray-400 mt-1">
                        Tekanan darah bawah (contoh: 80 dari 120/80)
                    </p>
                </div>
            </div>

            <!-- Nadi & Pernapasan -->
            <div class="grid grid-cols-2 gap-6">
                <div>
                    <label class="text-xs font-bold text-slate-500">Nadi</label>
                    <input type="number" name="nadi" class="w-full p-4 rounded-xl border" placeholder="60 - 100" required>
                    <p class="text-xs text-gray-400 mt-1">
                        Hitung denyut di pergelangan tangan selama 1 menit
                    </p>
                </div>

                <div>
                    <label class="text-xs font-bold text-slate-500">Pernapasan</label>
                    <input type="number" name="pernapasan" class="w-full p-4 rounded-xl border" placeholder="12 - 20" required>
                    <p class="text-xs text-gray-400 mt-1">
                        Hitung napas selama 1 menit (naik-turun dada)
                    </p>
                </div>
            </div>

            <!-- INFO -->
            <div class="bg-blue-50 text-blue-700 p-4 rounded-xl text-xs">
                💡 Tips: Jika tidak memiliki alat tensi, Anda bisa mengisi perkiraan atau meminta bantuan tenaga kesehatan.
            </div>

            <!-- BUTTON -->
            <button type="submit"
                class="w-full bg-blue-600 text-white font-bold py-4 rounded-xl hover:bg-blue-700">
                Prediksi Sekarang
            </button>
        </form>

    </div>
</div>
@endsection
