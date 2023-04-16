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
        <input type="text" class="form-control" id="nama" name="nama" value="{{ Auth::user()->fullName }}">
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
<div class="form-group" style="width: 12.5%; margin-left: 2.5%;">
    <button type="submit" class="btn btn-primary btn-block">Cari</button>
</div>




<div class="row justify-content-center">
<div class="form-group" style="width: 46.5%; height: 1%; margin-left: 2.2%;">
        <div class="card border-left-success shadow h-100 py-0">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="mb-0 h5 mb-0 font-weight-bold text-success">sTAT veriv</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Earnings (Monthly) Card Example -->
    <div class="form-group" style="width: 46.5%; height: 1%; margin-left: 2.2%;">
        <div class="card border-left-info shadow h-100 py-0">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="mb-0 h5 mb-0 font-weight-bold text-info">nip</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row justify-content-center">
<div class="form-group" style="width: 46.5%; height: 1%; margin-left: 2.2%;">
        <div class="card border-left-success shadow h-100 py-0">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="mb-0 h5 mb-0 font-weight-bold text-success">nama atasan</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Earnings (Monthly) Card Example -->
    <div class="form-group" style="width: 46.5%; height: 1%; margin-left: 2.2%;">
        <div class="card border-left-info shadow h-100 py-0">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="mb-0 h5 mb-0 font-weight-bold text-info">jabatan</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row justify-content-center">
<div class="form-group" style="width: 46.5%; height: 1%; margin-left: 2.2%;">
        <div class="card border-left-success shadow h-100 py-0">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="mb-0 h5 mb-0 font-weight-bold text-success">pangkat/golongan</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Earnings (Monthly) Card Example -->
    <div class="form-group" style="width: 46.5%; height: 1%; margin-left: 2.2%;">
        <div class="card border-left-info shadow h-100 py-0">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="mb-0 h5 mb-0 font-weight-bold text-info">3</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    
</div>

@endsection
