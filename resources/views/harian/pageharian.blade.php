@extends('layouts.admin')

@section('main-content')

<div class="form-group row">
    <label for="bulan_tahun" class="col-md-4 col-form-label text-md-right">{{ __('Bulan') }}</label>

    <div class="col-md-6 d-flex align-items-center">
        <select id="bulan" class="form-control @error('bulan') is-invalid @enderror mr-2" name="bulan" required>
            <option value="01" {{ ($bulan === '01') ? 'selected' : '' }}>Jan</option>
            <option value="02" {{ ($bulan === '02') ? 'selected' : '' }}>Feb</option>
            <option value="03" {{ ($bulan === '03') ? 'selected' : '' }}>Mar</option>
            <option value="04" {{ ($bulan === '04') ? 'selected' : '' }}>Apr</option>
            <option value="05" {{ ($bulan === '05') ? 'selected' : '' }}>Mei</option>
            <option value="06" {{ ($bulan === '06') ? 'selected' : '' }}>Jun</option>
            <option value="07" {{ ($bulan === '07') ? 'selected' : '' }}>Jul</option>
            <option value="08" {{ ($bulan === '08') ? 'selected' : '' }}>Agu</option>
            <option value="09" {{ ($bulan === '09') ? 'selected' : '' }}>Sep</option>
            <option value="10" {{ ($bulan === '10') ? 'selected' : '' }}>Okt</option>
            <option value="11" {{ ($bulan === '11') ? 'selected' : '' }}>Nov</option>
            <option value="12" {{ ($bulan === '12') ? 'selected' : '' }}>Des</option>
        </select>

        <span class="">{{ __('Tahun') }}</span>
        <input id="tahun" type="text" class="form-control @error('tahun') is-invalid @enderror ml-2" name="tahun" value="{{ $tahun }}" required>

        @error('bulan')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        @error('tahun')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
<div class="row">

<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2" data-toggle="modal" data-target="#myModal1">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="mb-1 h1 mb-0 font-weight-bold text-primary">1</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal popup untuk card 1 -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Input Laporan Harian</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <form method="post" action="submit.php">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="tanggal1">Tanggal:</label>
                        <input type="date" class="form-control" id="tanggal1" name="tanggal1" required>
                    </div>
                    <div class="form-group">
                        <label for="jam1">Jam:</label>
                        <input type="time" class="form-control" id="jam1" name="jam1" required>
                    </div>
                    <div class="form-group">
                        <label for="aktivitas1">Aktivitas:</label>
                        <textarea class="form-control" id="aktivitas1" name="aktivitas1" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="hasil1">Hasil:</label>
                        <textarea class="form-control" id="hasil1" name="hasil1" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="catatan1">Catatan:</label>
                        <textarea class="form-control" id="catatan1" name="catatan1" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="kesimpulan1">Kesimpulan:</label>
                        <textarea class="form-control" id="kesimpulan1" name="kesimpulan1" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="keterangan1">Keterangan:</label>
                        <textarea class="form-control" id="keterangan1" name="keterangan1" rows="3" required></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2" data-toggle="modal" data-target="#myModal1">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="mb-1 h1 mb-0 font-weight-bold text-primary">2</div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal popup untuk card 1 -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Input Laporan Harian</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <form method="post" action="submit.php">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="tanggal1">Tanggal:</label>
                        <input type="date" class="form-control" id="tanggal1" name="tanggal1" required>
                    </div>
                    <div class="form-group">
                        <label for="jam1">Jam:</label>
                        <input type="time" class="form-control" id="jam1" name="jam1" required>
                    </div>
                    <div class="form-group">
                        <label for="aktivitas1">Aktivitas:</label>
                        <textarea class="form-control" id="aktivitas1" name="aktivitas1" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="hasil1">Hasil:</label>
                        <textarea class="form-control" id="hasil1" name="hasil1" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="catatan1">Catatan:</label>
                        <textarea class="form-control" id="catatan1" name="catatan1" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="kesimpulan1">Kesimpulan:</label>
                        <textarea class="form-control" id="kesimpulan1" name="kesimpulan1" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="keterangan1">Keterangan:</label>
                        <textarea class="form-control" id="keterangan1" name="keterangan1" rows="3" required></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2" data-toggle="modal" data-target="#myModal1">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="mb-1 h1 mb-0 font-weight-bold text-primary">3</div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal popup untuk card 1 -->
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Input Laporan Harian</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <form method="post" action="submit.php">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="tanggal1">Tanggal:</label>
                        <input type="date" class="form-control" id="tanggal1" name="tanggal1" required>
                    </div>
                    <div class="form-group">
                        <label for="jam1">Jam:</label>
                        <input type="time" class="form-control" id="jam1" name="jam1" required>
                    </div>
                    <div class="form-group">
                        <label for="aktivitas1">Aktivitas:</label>
                        <textarea class="form-control" id="aktivitas1" name="aktivitas1" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="hasil1">Hasil:</label>
                        <textarea class="form-control" id="hasil1" name="hasil1" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="catatan1">Catatan:</label>
                        <textarea class="form-control" id="catatan1" name="catatan1" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="kesimpulan1">Kesimpulan:</label>
                        <textarea class="form-control" id="kesimpulan1" name="kesimpulan1" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="keterangan1">Keterangan:</label>
                        <textarea class="form-control" id="keterangan1" name="keterangan1" rows="3" required></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2" data-toggle="modal" data-target="#myModal1">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="mb-1 h1 mb-0 font-weight-bold text-primary">4</div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal popup untuk card 1 -->
<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Input Laporan Harian</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <form method="post" action="submit.php">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="tanggal1">Tanggal:</label>
                        <input type="date" class="form-control" id="tanggal1" name="tanggal1" required>
                    </div>
                    <div class="form-group">
                        <label for="jam1">Jam:</label>
                        <input type="time" class="form-control" id="jam1" name="jam1" required>
                    </div>
                    <div class="form-group">
                        <label for="aktivitas1">Aktivitas:</label>
                        <textarea class="form-control" id="aktivitas1" name="aktivitas1" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="hasil1">Hasil:</label>
                        <textarea class="form-control" id="hasil1" name="hasil1" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="catatan1">Catatan:</label>
                        <textarea class="form-control" id="catatan1" name="catatan1" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="kesimpulan1">Kesimpulan:</label>
                        <textarea class="form-control" id="kesimpulan1" name="kesimpulan1" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="keterangan1">Keterangan:</label>
                        <textarea class="form-control" id="keterangan1" name="keterangan1" rows="3" required></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>


@endsection






