@extends('products.layout')



@section('content')
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left" style="margin-top: 20px;">

            <h2>Kelembagaan</h2>

        </div>

    </div>

</div>

<style>
    body {
        font-family: Arial;
    }

    /* Style the tab */
    .tab {
        overflow: hidden;
        border: 1px solid #ccc;
        background-color: #f1f1f1;
    }

    /* Style the buttons inside the tab */
    .tab button {
        background-color: inherit;
        float: left;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 14px 16px;
        transition: 0.3s;
        font-size: 17px;
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
        background-color: #ddd;
    }

    /* Create an active/current tablink class */
    .tab button.active {
        background-color: #ccc;
    }

    /* Style the tab content */
    .tabcontent {
        display: none;
        padding: 6px 12px;
        border: 1px solid #ccc;
        border-top: none;
    }
</style>
</head>

<body>
    <h3>Dasar Pembentukan PPID.</h3>
    <p>Peraturan yang mendasari Pembentukan PPID: </p>
    <ul>
        <li>PERATURAN MENTERI DALAM NEGERI REPUBLIK INDONESIA NOMOR 3 TAHUN 2017 TENTANG PEDOMAN PENGELOLAAN PELAYANAN INFORMASI DAN DOKUMENTASI KEMENTERIAN DALAM NEGERI DAN PEMERINTAHAN DAERAH</li>
        <li>PERATURAN MENTERI KOMUNIKASI DAN INFORMATIKA NO. 10 / 2010 TENTANG PEDOMAN PENGELOLAAN PELAYANAN INFORMASI DAN DOKUMENTASI DI LINGKUNGAN KEMENTERIAN KOMUNIKASI DAN INFORMATIKA</li>
        <li>PERATURAN MENTERI DALAM NEGERI NO. 2 /2010 TENTANG PEDOMAN PENGELOLAAN PELAYANAN INFORMASI DAN DOKUMENTASI DI LINGKUNGAN KEMENTERIAN DALAM NEGERI</li>
        <li>PERATURAN KOMISI INFORMASI NO. 1 / 2010 TENTANG STANDAR LAYANAN INFORMASI PUBLIK </li>
        <li>PERATURAN PEMERINTAH RI NO. 61 /2010 TENTANG PELAKSANAAN UNDANG-UNDANG NO 14 /2008</li>
        <li>UNDANG-UNDANG RI NO. 14 /2008 TENTANG KETERBUKAAN INFORMASI PUBLIK</li>
    </ul>
    <p>Peraturan yang mendasari Pembentukan PPID Kabupaten Banyuwangi: </p>
    <ul>
        <li>KEPUTUSAN BUPATI BANYUWANGI NOMOR: 188/6/KEP/429.016/2022 TANGGAL 25 Februari 2022 TENTANG PEMBENTUKAN PENGELOLA LAYANAN INFORMASI DAN DOKUMENTASI KABUPATEN BANYUWANGI</li>
        <li>KEPUTUSAN BUPATI BANYUWANGI NOMOR: 188/6/KEP/429.016/2021 TANGGAL 29 April 2021 TENTANG PEMBENTUKAN PENGELOLA LAYANAN INFORMASI DAN DOKUMENTASI KABUPATEN BANYUWANGI</li>
        <li>KEPUTUSAN BUPATI BANYUWANGI NOMOR: 188/25/KEP/429.011/2021 TANGGAL 08 FEBRUARI 2021 TENTANG PEMBENTUKAN PENGELOLA LAYANAN INFORMASI DAN DOKUMENTASI KABUPATEN BANYUWANGI</li>
        <li>KEPUTUSAN BUPATI BANYUWANGI NOMOR: 188/139/KEP/429.011/2020 TANGGAL 29 APRIL 2020 TENTANG PENUNJUKAN PENGELOLA LAYANAN INFORMASI DAN DOKUMENTASI KABUPATEN BANYUWANGI</li>
        <li>PERATURAN BUPATI BANYUWANGI NOMOR 23 TAHUN 2020 TANGGAL 26 MARET 2020 TENTANG PEDOMAN PENGELOLAAN PELAYANAN INFORMASI DAN DOKUMENTASI DI LINGKUNGAN PEMERINTAH KABUPATEN BANYUWANGI</li>
        <li>KEPUTUSAN BUPATI BANYUWANGI NOMOR: 188/144/KEP/429.011/2017 TANGGAL 6 MARET 2017 TENTANG PENUNJUKAN PEJABAT PENGELOLA INFORMASI DAN DOKUMENTASI KABUPATEN BANYUWANGI</li>
        <li>KEPUTUSAN BUPATI BANYUWANGI NOMOR 188/121/KEP/429.011/2015 TANGGAL 6 Januari 2015 TENTANG PENUNJUKAN PEJABAT PENGELOLA INFORMASI DAN DOKUMENTASI (PPID) DI KABUPATEN BANYUWANGI</li>
        <li>KEPUTUSAN BUPATI BANYUWANGI NOMOR 188/239/KEP/429.011/2014 TANGGAL 22 APRIL 2014 TENTANG PENUNJUKAN PEJABAT PENGELOLA INFORMASI DAN DOKUMENTASI (PPID) DI KABUPATEN BANYUWANGI</li>
        <li>KEPUTUSAN BUPATI BANYUWANGI NOMOR 188/279/KEP/429.011/2013 TANGGAL 5 APRIL 2013 TENTANG PENUNJUKAN PEJABAT PENGELOLA INFORMASI DAN DOKUMENTASI (PPID) DI KABUPATEN BANYUWANGI</li>
        <li>SURAT KEPUTUSAN BUPATI NOMOR : 199/511/KEP/429.011/2012 TENTANG PEMBENTUKAN TIM PENYUSUNAN RANCANGAN PERATURAN BUPATI TENTANG PEDOMAN PENGELOLAAN PELAYANAN INFORMASI DAN DOKUMENTASI DI KABUPATEN BANYUWANGI</li>
        <li>PERATURAN BUPATI BANYUWANGI NOMOR 19 THN 2012 TANGGAL 25 JUNI 2012 Tentang PEDOMAN PELAYANAN INFORMASI DAN DOKUMENTASI DI LINGKUNGAN PEMERINTAH KABUPATEN BANYUWANGI</li>
    </ul>
    <br>
    <center><img src="struktur_ppid.jpg" width="70%;"></center> 
    <br>
    <br>
    <center><iframe src="Profil_Anggota_PPID_2022_Fix.pdf" width="100%" height="600px;"></iframe></center>
    <br>
    <br>
    <p>Tugas dan Fungsi : </p>
    <center><iframe src="Tugas_Fungsi_PPID.pdf" width="100%" height="600px;"></iframe></center>

</body>

@endsection