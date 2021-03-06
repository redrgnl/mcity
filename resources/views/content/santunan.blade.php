
<?php
//index.php




?>
<!DOCTYPE html>
<html>
 <head>
  <title>Agenda Temanggung</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="templatemo">
  <!-- 
  Compass Template
  http://www.templatemo.com/tm-454-compass
  -->
  <meta charset="UTF-8">

  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css' rel='stylesheet' type='text/css'>
  <!-- CSS Bootstrap & Custom -->
  <link href="{{ asset('csscore/bootstrap/css/bootstrap.css') }}" rel="stylesheet" media="screen">
  <link rel="stylesheet" href="{{ asset('csscore/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('csscore/css/templatemo-misc.css') }}">
  <link rel="stylesheet" href="{{ asset('csscore/css/animate.css') }}">


  <!-- Favicons -->
  <link rel="shortcut icon" href="images/ico/favicon.ico">
  <!-- JavaScripts -->
<!--   <script src="{{ asset('csscore/js/jquery-1.10.2.min.js') }}"></script>
 -->  <script src="{{ asset('csscore/js/modernizr.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js"></script>

  <!--[if lt IE 8]>
  <div style=' clear: both; text-align:center; position: relative;'>
          <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" alt="" /></a>
      </div>
  <![endif]-->



 </head>
 <body>
  <br />
  @csrf
  {{-- <h2 align="center"><a href="#">Hasil Pencarian</a></h2> --}}
  <br />

  <div class="container">
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Dusun</th>
                <th>Desa</th>
                <th>Kecamatan</th>

            </tr>
        </thead>
        <tbody>
          @foreach($santunan as $sw)
            <tr>
                <td>{{$sw->no}}</td>
                <td style="max-width: 200px;word-wrap: break-word;">{{$sw->nik}}</td>
                <td>{{$sw->nama}}</td>
                <td>{{$sw->dsn}}</td>
                <td>{{$sw->ds}}</td>
                <td>{{$sw->kec}}</td>

            </tr>
          @endforeach

        </tbody>
        <tfoot>
            <tr>
                <th>No</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Dusun</th>
                <th>Desa</th>
                <th>Kecamatan</th>

            </tr>
        </tfoot>
    </table> 
     </div>
 </body>

 <script src="{{ asset('csscore/bootstrap/js/bootstrap.min.js') }}"></script>
 <script src="{{ asset('csscore/js/plugins.js') }}"></script>
 <script src="{{ asset('csscore/js/jquery.lightbox.js') }}"></script>
 <script src="{{ asset('csscore/js/custom.js') }}"></script>
 <script>
   $(document).ready(function() {
    $('#example').DataTable();
} );
 </script>
 <script>

    $(document).ready(function(){

        var id = $('.id_url').data('menu');
        var _token = $('input[name="_token"]').val();

        $.ajax({
            url: "{{ route('detailmenu.fetch') }}",
            method: "POST",
            data: {
                    _token: _token,
                    id: id
                },
            success:function(data){
                // console.log(id);
                $('.menu-det').html(data);
            }

        });
    });
    function data_content($id) {
            var load = document.getElementById('loader');

            var id = $id;
            var _token = $('input[name="_token"]').val();
            // console.log(id);
            // alert(id);

            $.ajax({
                url: "{{ route('content.fetch') }}",
                method: "POST",
                data: {
                    _token: _token,
                    id: id
                },
                success: function(data) {

                    var json = JSON.parse(data);
                    Swal.fire({
                        title: '<span style="font-size:20px">' + json['result'].name + '<span>',
                        html: '<span style="font-size:17px">' + json['result'].description + '<span>' + '<p> <a href="https://maps.google.com/?q=@' + json['result'].lat + ',' + json['result'].lng + '" target="_blank" >Klik Untuk Buka Maps</a> </p>',
                        imageUrl: 'http://temanggung.mcity.id/files/content/' + json['result'].images,
                        imageWidth: 400,
                        imageHeight: 300,
                        imageAlt: 'Custom image',
                        width: '650px',
                        customClass: {
                            html: 'swal-text',
                        }
                    })

                    $("#gone ").remove();
                    // console.log(data);
                }
            });
            // setTimeout(remove_load, 280);
        }
  </script>
</html>