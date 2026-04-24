@extends('layouts.app')

@section('title', 'Riwayat Prediksi')

@section('content')
<div class="max-w-5xl mx-auto mt-10">

    <h2 class="text-2xl font-bold mb-6">Riwayat Prediksi</h2>

    <div class="bg-white shadow rounded-xl p-6">

        <table class="w-full text-sm">
            <thead>
                <tr class="border-b">
                    <th>No</th>
                    <th>Nama</th>
                    <th>Pekerjaan</th>
                    <th>Usia</th>
                    <th>BB</th>
                    <th>TB</th>
                    <th>Hasil</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $item)
                <tr class="border-b text-center">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->pekerjaan }}</td>
                    <td>{{ $item->usia }}</td>
                    <td>{{ $item->bb }}</td>
                    <td>{{ $item->tb }}</td>
                    <td class="
                        @if($item->hasil == 'Kurang') text-red-500
                        @elseif($item->hasil == 'Normal') text-green-500
                        @else text-yellow-500
                        @endif
                    ">
                        {{ $item->hasil }}
                    </td>
                    <td>{{ $item->created_at->format('d-m-Y') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>
@endsection
