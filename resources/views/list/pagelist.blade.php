@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <form method="GET" action="{{ route('listlaporan') }}" class="row justify-content-center d-flex">
        <div class="form-group col-md-4">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ Auth::user()->fullName }}" readonly>
        </div>

        <div class="form-group col-md-4">
            <label for="tahun">Tahun:</label>
            <select class="form-control" id="tahun" name="tahun">
                <option value="">-- Pilih Tahun --</option>
                @for ($i = 2020; $i <= 2025; $i++)
                    <option value="{{ $i }}" {{ request()->input('tahun') == $i ? 'selected' : '' }}>{{ $i }}</option>
                @endfor
            </select>
        </div>

        <div class="form-group col-md-4">
            <label for="bulan">Bulan:</label>
            <select class="form-control" id="bulan" name="bulan">
                <option value="">-- Pilih Bulan --</option>
                @foreach (['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'] as $bulan)
                    <option value="{{ $bulan }}" {{ request()->input('bulan') == $bulan ? 'selected' : '' }}>{{ $bulan }}</option>
                @endforeach
            </select>
        </div>
    </form>
</div>

<div class="form-group" style="width: 12.5%; margin-left: 2.2%;">
    <button type="submit" class="btn btn-primary btn-block">Cari</button>
</div>

<div class="table-responsive">
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Hari,Tanggal</th>
                <th>Jam</th>
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
                <tr>
                    <td>{{ $data->hari_tanggal }}</td>
                    <td>{{ $data->jam }}</td>
                    <td>{{ $data->aktivitas }}</td>
                    <td>{{ $data->catatan }}</td>
                    <td>{{ $data->hasil }}</td>
                    <td>{{ $data->kesimpulan }}</td>
                    <td>{{ $data->keterangan }}</td>
                    <td>{{ $data->status_verifikasi }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
