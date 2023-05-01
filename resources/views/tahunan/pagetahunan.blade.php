@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->


    <!-- Page Heading -->
    <form method="GET" action="{{ route('listlaporan') }}" class="row justify-content-center d-flex">
        <div class="form-group col-md-4">
         <label for="nama">Nama:</label>
        <input type="text" class="form-control" id="nama" name="nama" value="{{ Auth::user()->fullName }}">
    </div>

    <form method="GET" action="{{ route('listlaporan') }}" class="row justify-content-center d-flex">
        <div class="form-group col-md-4">
         <label for="nama">Jabatan:</label>
        <input type="text" class="form-control" id="nama" name="nama" value="{{ Auth::user()->jabatan }}">
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

   
</form>
</div>
<div class="form-group" style="width: 12.5%; margin-left: 4%;">
    <button type="submit" class="btn btn-primary btn-block">Cari</button>
</div>




<form method="GET" action="{{ route('listlaporan') }}" class="row justify-content-left d-flex">
    <div class="form-group" style="width: 41.5%; margin-left: 5.1%; margin-top: 25px;">
        <label for="nama">Nama:</label>
        <input type="text" class="form-control" id="nama" name="nama" value="{{ Auth::user()->fullName }}" readonly>
    </div>
    
</form>
<form method="GET" action="{{ route('listlaporan') }}" class="row justify-content-center d-flex">
    <div class="form-group" style="width: 41.5%; margin-left: 2.5%;">
        <label for="nama">Nama Atasan:</label>
        <input type="text" class="form-control" id="nama" name="nama" value="{{ Auth::user()->nama_atasan }}" readonly>
    </div>
    <div class="form-group" style="width: 41.5%; margin-left: 9.5%;">
        <label for="nama">NIP::</label>
        <input type="text" class="form-control" id="nama" name="nama" value="{{ Auth::user()->nip }}" readonly>
    </div>
</form>
<form method="GET" action="{{ route('listlaporan') }}" class="row justify-content-center d-flex">
    <div class="form-group" style="width: 41.5%; margin-left: 2.5%;margin-bottom: 35px;">
        <label for="nama">Pangkat/Golongan:</label>
        <input type="text" class="form-control" id="nama" name="nama" value="{{ Auth::user()->pangkatgolongan }}" readonly>
    </div>
    <div class="form-group" style="width: 41.5%; margin-left: 9.5%;margin-bottom: 35px;">
        <label for="nama">Jabatan:</label>
        <input type="text" class="form-control" id="nama" name="nama" value="{{ Auth::user()->jabatan }}" readonly>
    </div>
</form>


<form method="GET" action="{{ route('listlaporan') }}" class="row justify-content-center d-flex">
    <div class="form-group" style="width: 21.5%; margin-left: 2.5%; margin-top: 15px;">
        <label for="nama">Uraian:</label>
        <input type="text" class="form-control" id="nama" name="nama" value="{{ Auth::user()->fullName }}" readonly>
    </div>
    <div class="form-group" style="width: 21.5%; margin-left: 2.1%;margin-top: 15px;">
        <label for="nama">Target:</label>
        <input type="text" class="form-control" id="nama" name="nama" value="{{ Auth::user()->fullName }}" readonly>
    </div>
    <div class="form-group" style="width: 21.5%; margin-left: 2.1%;margin-top: 15px;">
        <label for="nama">Relasi:</label>
        <input type="text" class="form-control" id="nama" name="nama" value="{{ Auth::user()->fullName }}" readonly>
    </div>
    <div class="form-group" style="width: 21.5%; margin-left: 2.1%;margin-top: 15px;">
        <label for="nama">Waktu:</label>
        <input type="text" class="form-control" id="nama" name="nama" value="{{ Auth::user()->fullName }}" readonly>
    </div>
</form>
<form method="GET" action="{{ route('listlaporan') }}" class="row justify-content-center d-flex">
    <div class="form-group" style="width: 21.5%; margin-left: 2.5%;">
        <input type="text" class="form-control" id="nama" name="nama" value="{{ Auth::user()->fullName }}" readonly>
    </div>
    <div class="form-group" style="width: 21.5%; margin-left: 2.1%;">
        <input type="text" class="form-control" id="nama" name="nama" value="{{ Auth::user()->fullName }}" readonly>
    </div>
    <div class="form-group" style="width: 21.5%; margin-left: 2.1%;">
        <input type="text" class="form-control" id="nama" name="nama" value="{{ Auth::user()->fullName }}" readonly>
    </div>
    <div class="form-group" style="width: 21.5%; margin-left: 2.1%;">
        <input type="text" class="form-control" id="nama" name="nama" value="{{ Auth::user()->fullName }}" readonly>
    </div>
</form>
</form>
<form method="GET" action="{{ route('listlaporan') }}" class="row justify-content-center d-flex">
    <div class="form-group" style="width: 21.5%; margin-left: 2.5%;">
        <input type="text" class="form-control" id="nama" name="nama" value="{{ Auth::user()->fullName }}" readonly>
    </div>
    <div class="form-group" style="width: 21.5%; margin-left: 2.1%;">
        <input type="text" class="form-control" id="nama" name="nama" value="{{ Auth::user()->fullName }}" readonly>
    </div>
    <div class="form-group" style="width: 21.5%; margin-left: 2.1%;">
        <input type="text" class="form-control" id="nama" name="nama" value="{{ Auth::user()->fullName }}" readonly>
    </div>
    <div class="form-group" style="width: 21.5%; margin-left: 2.1%;">
        <input type="text" class="form-control" id="nama" name="nama" value="{{ Auth::user()->fullName }}" readonly>
    </div>
</form>


      

    
</div>

@endsection
