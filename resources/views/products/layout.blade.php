<!DOCTYPE html>

<html>

<head>

    <title>PPID Kabupaten Banyuwangi</title>
    <!-- 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet"> -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <link href="https://ppid.banyuwangikab.go.id/assets/bootstrap-3.3.7/dist/css/bootstrap.min.bwi.css" rel="stylesheet">
    <link href="https://ppid.banyuwangikab.go.id/assets/bootstrap-3.3.7/dist/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="https://ppid.banyuwangikab.go.id/assets/bootstrap-3.3.7/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <link href="https://ppid.banyuwangikab.go.id/assets/bootstrap-3.3.7/docs/examples/theme/theme.css" rel="stylesheet">

    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="https://ppid.banyuwangikab.go.id/assets/bootstrap-3.3.7/assets/js/ie-emulation-modes-warning.js" type="754a473f674e89a72a7224c9-text/javascript"></script>
    <script src="https://ppid.banyuwangikab.go.id/assets/bootstrap-3.3.7/js/jquery-1.8.3.min.js" type="754a473f674e89a72a7224c9-text/javascript"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

</head>

<body>
    <nav style="" class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" style="margin-top: 15px;">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="brand" href="{{ url('dashboard') }}">
                    <span></span>
                    <img class="img-responsive" src="https://ppid.banyuwangikab.go.id/assets/icon/PPID_Logo_Header_2021.png" alt="Logo" style="width: 300px; max-width: 80%;" /></a>
            </div>
            <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ url('dashboard') }}"><i class="glyphicon glyphicon-home"></i>&nbsp; Home</a></li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Profil &nbsp;<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ url('instrumen') }}">Instrument KIP</a></li>
                            <li><a href="{{ url('seputar') }}">Seputar PPID</a></li>
                            <li><a href="{{ url('visimisi') }}">Visi dan Misi</a></li>
                            <li><a href="{{ url('kelembagaan') }}">Kelembagaan</a></li>
                            <li><a href="{{ url('skppid') }}">SK PPID Kab. Banyuwangi</a></li>
                            <li><a href="{{ url('pedomanumum') }}">Pedoman Umum</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">SOP &nbsp;<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ url('sop') }}">SOP PPID Kabupaten</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Android &nbsp;<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ url('android') }}">Aplikasi Android</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ url('ppidpembantu') }}">&nbsp; PPID Pembantu</a></li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Laporan &nbsp;<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ url('laporan') }}">&nbsp; Laporan Akses Informasi</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Daftar Informasi &nbsp;<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ url('alur') }}">Alur Layanan</a></li>
                            <li><a href="{{ url('infoberkala') }}">Informasi Berkala</a></li>
                            <li><a href="{{ url('infoserta') }}">Informasi Serta - Merta</a></li>
                            <li><a href="{{ url('infotiapsaat') }}">Informasi Setiap Saat</a></li>
                            <li><a href="{{ url('infodikecualikan') }}">Informasi Dikecualikan</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ url('gallery') }}">&nbsp; Galeri</a></li>
                    
                </ul>
                
            </div>
        </div>
    </nav>

</body>

<div class="container">
    @yield('navigation')
    @yield('content')
</div>

<div class="page-header">
    <h5>Copyright &copy; Dinas Komunikasi, Informatika, dan Persandian 2022</h5>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" type="be83e06814c52ed26c44529f-text/javascript"></script>
<script type="be83e06814c52ed26c44529f-text/javascript">
    window.jQuery || document.write('<script src="https://ppid.banyuwangikab.go.id/assets/bootstrap-3.3.7/assets/js/vendor/jquery.min.js"><\/script>')
</script>
<script src="https://ppid.banyuwangikab.go.id/assets/bootstrap-3.3.7/dist/js/bootstrap.min.js" type="be83e06814c52ed26c44529f-text/javascript"></script>
<script src="https://ppid.banyuwangikab.go.id/assets/bootstrap-3.3.7/assets/js/docs.min.js" type="be83e06814c52ed26c44529f-text/javascript"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="https://ppid.banyuwangikab.go.id/assets/bootstrap-3.3.7/assets/js/ie10-viewport-bug-workaround.js" type="be83e06814c52ed26c44529f-text/javascript"></script>
<script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="be83e06814c52ed26c44529f-|49" defer=""></script>
<script>
    (function() {
        var js = "window['__CF$cv$params']={r:'73093877295a8980',m:'V..5VBDWjnB_Roa1tOD5dz0JYgBxPuuwynEebMUqKxs-1658797459-0-AbjE+4XvNVXwEU0w1DKOJWgRl4Fhv3UnxzHhPp56gpEKim556ZFr5IGESQkxCH5v51wnb5dMl48uJhFFbuHi4Pg0JlQp8Nn5zTBGTHpf16kPkOYwlurU0Q3BcW1Nc+90lw==',s:[0xf5118ce2eb,0x9b40d77ce2],u:'/cdn-cgi/challenge-platform/h/g'};var now=Date.now()/1000,offset=14400,ts=''+(Math.floor(now)-Math.floor(now%offset)),_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='/cdn-cgi/challenge-platform/h/g/scripts/alpha/invisible.js?ts='+ts,document.getElementsByTagName('head')[0].appendChild(_cpo);";
        var _0xh = document.createElement('iframe');
        _0xh.height = 1;
        _0xh.width = 1;
        _0xh.style.border = 'none';
        _0xh.style.visibility = 'hidden';
        document.body.appendChild(_0xh);

        function handler() {
            var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;
            if (_0xi) {
                var _0xj = _0xi.createElement('script');
                _0xj.innerHTML = js;
                _0xi.getElementsByTagName('head')[0].appendChild(_0xj);
            }
        }
        if (document.readyState !== 'loading') {
            handler();
        } else if (window.addEventListener) {
            document.addEventListener('DOMContentLoaded', handler);
        } else {
            var prev = document.onreadystatechange || function() {};
            document.onreadystatechange = function(e) {
                prev(e);
                if (document.readyState !== 'loading') {
                    document.onreadystatechange = prev;
                    handler();
                }
            };
        }
    })();
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"73093877295a8980","token":"067fc07fd7884bf98dd4b4bd2dae1d55","version":"2022.6.0","si":100}' crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
        <script>
            // script di dalam ini akan dijalankan pertama kali saat dokumen dimuat
            document.addEventListener('DOMContentLoaded', function () {
                resizeCanvas();
            })
    
            //script ini berfungsi untuk menyesuaikan tanda tangan dengan ukuran canvas
            function resizeCanvas() {
                var ratio = Math.max(window.devicePixelRatio || 1, 1);
                canvas.width = canvas.offsetWidth * ratio;
                canvas.height = canvas.offsetHeight * ratio;
                canvas.getContext("2d").scale(ratio, ratio);
            }
    
    
            var canvas = document.getElementById('signature-pad');
    
            //warna dasar signaturepad
            var signaturePad = new SignaturePad(canvas, {
                backgroundColor: 'rgb(255, 255, 255)'
            });
    
            //saat tombol clear diklik maka akan menghilangkan seluruh tanda tangan
            document.getElementById('clear').addEventListener('click', function () {
                signaturePad.clear();
            });
    
            //saat tombol undo diklik maka akan mengembalikan tanda tangan sebelumnya
            // document.getElementById('undo').addEventListener('click', function () {
            //     var data = signaturePad.toData();
            //     if (data) {
            //         data.pop(); // remove the last dot or line
            //         signaturePad.fromData(data);
            //     }
            // });
    
            //saat tombol change color diklik maka akan merubah warna pena
            // document.getElementById('change-color').addEventListener('click', function () {
    
            //     //jika warna pena biru maka buat menjadi hitam dan sebaliknya
            //     if(signaturePad.penColor == "rgba(0, 0, 255, 1)"){
    
            //         signaturePad.penColor = "rgba(0, 0, 0, 1)";
            //     }else{
            //         signaturePad.penColor = "rgba(0, 0, 255, 1)";
            //     }
            // })
    
            //fungsi untuk menyimpan tanda tangan dengan metode ajax
            // $(document).on('click', '#btn-submit', function () {
            //     var signature = signaturePad.toDataURL();
    
            //     $.ajax({
            //         url: "proses.php",
            //         data: {
            //             foto: signature,
            //         },
            //         method: "POST",
            //         success: function () {
            //             location.reload();
            //             alert('Tanda Tangan Berhasil Disimpan');
            //         }
    
            //     })
            // })
        </script>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->

<!-- <script>

    $(document).ready(function () {



        /*------------------------------------------

        --------------------------------------------

        Country Dropdown Change Event

        --------------------------------------------

        --------------------------------------------*/

        $('#penerima').on('change', function () {

            var idCountry = this.value;

            $.ajax({

                type: "POST",

                data: {

                    id: idSurat,

                    _token: '{{csrf_token()}}'

                },

                dataType: 'json',

                success: function (result) {

                    $('#penerima').html('<option value="">-- Select State --</option>');

                    $.each(result.states, function (key, value) {

                        $("#penerima").append('<option value="' + value

                            .id + '">' + value.name + '</option>');

                    });

                }

            });

        });

    });

</script> -->


</body>

</html>