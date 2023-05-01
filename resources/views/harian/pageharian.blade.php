@extends('layouts.admin')

@section('css')
<meta name="csrf_token" content="{{ csrf_token() }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@endsection

@section('main-content')
    <div class="modal fade" id="laporanHarian" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Laporan Harian</h5>
              </div>
              <div class="modal-body">
                <label for="title">Aktivitas</label>
                <input type="text" class="form-control" id="title">
                <span id="titleError" class="text-danger"></span>

                <label for="hasil">hasil</label>
                <input type="text" class="form-control" id="hasil">
                <span id="titleError" class="text-danger"></span>

                <label for="catatan">catatan</label>
                <input type="text" class="form-control" id="catatan">
                <span id="titleError" class="text-danger"></span>

                <label for="kesimpulan">kesimpulan</label>
                <input type="text" class="form-control" id="kesimpulan">
                <span id="titleError" class="text-danger"></span>

                <label for="keterangan">keterangan</label>
                <input type="text" class="form-control" id="keterangan">
                <span id="titleError" class="text-danger"></span>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" onclick="$('#laporanHarian').modal('hide')">Batal</button>
                <button type="button" class="btn btn-primary" id="saveBtn">Simpan</button>
              </div>
            </div>
          </div>
    </div>

    <div class="card shadow">
        <div class="card-body">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="col-md-11 offset-1 mt-5 mb-5">
                  <div id="calendar"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>


@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

<script>
    $(document).ready(function(){

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
            },
        });

        var event = @json($events);
        $('#calendar').fullCalendar({
            header:{
                left : 'prev next today',
                center : 'title',
                right : 'month, agendaWeek, agendaDay',
            },
            events : event,
            selectable :true,
            selectHelper:true,
            select:function(start,end, allDays){
                $('#laporanHarian').modal('toggle');

                $('#saveBtn').click(function(){
                    var title = $('#title').val()
                    var hasil = $('#hasil').val()
                    var catatan = $('#catatan').val()
                    var kesimpulan = $('#kesimpulan').val()
                    var keterangan = $('#keterangan').val()
                    var start_date = moment(start).format('YYYY-MM-DD');
                    var end_date = moment(end).format('YYYY-MM-DD');


                    $.ajax({
                        url:"{{ route('pageharian.store') }}",
                        type:'POST',
                        dataType:'json',
                        data:{
                            start_date,end_date,title,hasil,kesimpulan,catatan,keterangan
                        },
                        success:function(response){
                            $('#laporanHarian').modal('hide')
                            swal("Laporan berhasil ditambahkan", "", "success");
                                setTimeout(function() {
                                    location.reload();
                                }, 1500);
                        },error:function(err){
                            console.log(err)
                        }
                    })
                })
            },
            editable:true,
            eventDrop:function(event){
                var id = event.id;
                var start_date = moment(event.start).format('YYYY-MM-DD');
                var end_date = moment(event.end).format('YYYY-MM-DD');

                $.ajax({
                        url:"{{ route('pageharian.update','') }}"+'/'+id,
                        type:'PATCH',
                        dataType:'json',
                        data:{
                            start_date,end_date
                        },
                        success:function(response){
                            swal("Berhasil", "Laporan berhasil diupdate", "success");
                        },error:function(err){
                            console.log(err)
                        }
                    });
            },
            eventClick: function(event){
                var id = event.id
                swal({
                    title: "Ingin menghapus laporan?",
                    icon: "warning",
                    buttons: {
                        cancel: "Batal",
                        confirm: {
                            text: "Ya, hapus!",
                            value: true,
                            visible: true,
                            className: "btn btn-danger",
                            closeModal: false,
                        },
                    },
                }).then((isConfirm) => {
                    if (isConfirm) {
                        $.ajax({
                            url:"{{ route('pageharian.destroy','') }}"+'/'+id,
                            type:'DELETE',
                            dataType:'json',
                            success:function(response){
                                $('#calendar').fullCalendar('removeEvents',response);
                                swal("Laporan berhasil dihapus", "", "success");
                                setTimeout(function() {
                                    location.reload();
                                }, 1500);
                            },error:function(err){
                                console.log(err)
                            }
                        });
                    }
                });
            }
        })
    });

</script>
@endsection









