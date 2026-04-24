@extends('layouts.app')

@section('title', 'Input Data Diri')

@section('content')
<div class="max-w-xl mx-auto mt-10">

    <h2 class="text-2xl font-bold text-center mb-6">
        Input Data Diri
    </h2>

    <div class="bg-white shadow-xl rounded-2xl p-6">

        <form method="GET" action="/klasifikasi/form">

            <div class="space-y-4">

                <div>
                    <label>Nama</label>
                    <input type="text" name="nama" class="w-full p-3 border rounded-xl" required>
                </div>

                <div>
                    <label>Alamat</label>
                    <input type="text" name="alamat" class="w-full p-3 border rounded-xl" required>
                </div>

                <div>
                    <label>Pekerjaan</label>
                    <input type="text" name="pekerjaan" class="w-full p-3 border rounded-xl" required>
                </div>

                <button type="submit"
                    class="w-full bg-blue-600 text-white py-3 rounded-xl">
                    Lanjut ke Klasifikasi
                </button>

            </div>

        </form>

    </div>

</div>
@endsection
