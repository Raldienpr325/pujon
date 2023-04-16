@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    
    <h1 class="mb-1 h1 mb-0 font-weight-bold text-success mb-4">{{ __('List Atasan') }}</h1>

     <!-- Earnings (Monthly) Card Example -->
     <div class="row justify-content-center">
<div class="form-group" style="width: 100%; height: 2%; margin-left: 2.2%;">
        <div class="card border-left-success shadow h-100 py-0">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <label for="nama" class="mb-1 h4 mb-0 font-weight-bold text-success">{{ Auth::user()->fullName }}</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group" style="width: 100%; height: 2%; margin-left: 2.2%;">
        <div class="card border-left-success shadow h-100 py-0">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="mb-1 h4 mb-0 font-weight-bold text-success">nama atasan</div>
                    </div>
                </div>
            </div>
        </div>
        
  
                </div>
            </div>

        </div>

    </div>

@endsection
