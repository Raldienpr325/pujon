@extends('layouts.admin')

@section('main-content')
<div class="card">
    <!-- Page Heading -->
    <div class="card-header">
        <h3 class="font-semibold text-lg text-gray-800">List Laporan</h3>
    </div>
    <div class="table-responsive">
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>Hari,Tanggal</th>
                    <th>Aktivitas</th>
                    <th>Catatan</th>
                    <th>Hasil</th>
                    <th>Kesimpuan</th>
                    <th>Keterangan</th>
                    <th>Status Verifikasi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($laporans as $data)
                    <tr class="border-b hover:bg-gray-100">
                        <td class="py-4 px-6">{{ \Carbon\Carbon::parse($data->start_date)->format('l, m-Y') }} - {{ \Carbon\Carbon::parse($data->end_date)->format('l, m-Y') }}</td>
                        <td class="py-4 px-6">{{ $data->title }}</td>
                        <td class="py-4 px-6">{{ $data->catatan }}</td>
                        <td class="py-4 px-6">{{ $data->hasil }}</td>
                        <td class="py-4 px-6">{{ $data->kesimpulan }}</td>
                        <td class="py-4 px-6">{{ $data->keterangan }}</td>
                        <td class="py-4 px-6"><a href="#" class="btn btn-md btn-danger">Belum Diverifikasi</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $laporans->links() }}
    </div>

</div>

@endsection
