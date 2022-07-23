@extends('products.layout')

@section('navigation')

<body>

    <nav style="" class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="brand" href="https://ppid.banyuwangikab.go.id/">
                    <span></span>
                    <img class="img-responsive" src="https://ppid.banyuwangikab.go.id/assets/icon/PPID_Logo_Header_2021.png" alt="Logo" /></a>
            </div>
            <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="https://ppid.banyuwangikab.go.id/"><i class="glyphicon glyphicon-home"></i>&nbsp; Home</a></li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Profil &nbsp;<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="https://ppid.banyuwangikab.go.id/home/instrument_kip">Instrument KIP</a></li>
                            <li><a href="https://ppid.banyuwangikab.go.id/home/seputar_ppid">Seputar PPID</a></li>
                            <li><a href="https://ppid.banyuwangikab.go.id/home/Visi_dan_Misi">Visi dan Misi</a></li>
                            <li><a href="https://ppid.banyuwangikab.go.id/home/kelembagaan_ppid">Kelembagaan</a></li>
                            <li><a href="https://ppid.banyuwangikab.go.id/home/sk_bupati">SK PPID Kab. Banyuwangi</a></li>
                            <li class="disabled"><a href="https://ppid.banyuwangikab.go.id/">Pedoman Umum</a></li>
                            <li><a href="https://ppid.banyuwangikab.go.id/home/pedoman_umum/maklumat-layanan">&nbsp;&nbsp; A. &nbsp; Maklumat Pelayanan Informasi Publik</a></li>
                            <li><a href="https://ppid.banyuwangikab.go.id/home/pedoman_umum/pertimbangan-tertulis">&nbsp;&nbsp; B. &nbsp; Pertimbangan Tertulis</a></li>
                            <li><a href="https://ppid.banyuwangikab.go.id/home/pedoman_umum/regulasi">&nbsp;&nbsp; C. &nbsp; Regulasi</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">SOP &nbsp;<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="https://ppid.banyuwangikab.go.id/home/ppid_sop_kabupaten">SOP PPID Kabupaten</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Android &nbsp;<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="https://ppid.banyuwangikab.go.id/home/Apk_Android">Aplikasi Android</a></li>
                        </ul>
                    </li>
                    <li><a href="https://ppid.banyuwangikab.go.id/home/ppid_pembantu">&nbsp; PPID Pembantu</a></li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Laporan &nbsp;<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="https://ppid.banyuwangikab.go.id/home/laporan_akses_informasi">&nbsp; Laporan Akses Informasi</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Daftar Informasi &nbsp;<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="https://ppid.banyuwangikab.go.id/home/ppid_dip/layanan-keberatan">Alur Layanan</a></li>
                            <li><a href="https://ppid.banyuwangikab.go.id/home/ppid_dip/info-berkala">Informasi Berkala</a></li>
                            <li><a href="https://ppid.banyuwangikab.go.id/home/ppid_dip/info-serta-merta">Informasi Serta - Merta</a></li>
                            <li><a href="https://ppid.banyuwangikab.go.id/home/ppid_dip/info-setiap-saat">Informasi Setiap Saat</a></li>
                            <li><a href="https://ppid.banyuwangikab.go.id/home/ppid_dip/info-dikecualikan">Informasi Dikecualikan</a></li>
                        </ul>
                    </li>
                    <li><a href="https://ppid.banyuwangikab.go.id/gallery/gallery">&nbsp; Galeri</a></li>
                </ul>
            </div>
        </div>
    </nav>

</body>

@endsection