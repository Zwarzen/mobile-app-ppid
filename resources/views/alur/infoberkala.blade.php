@extends('products.layout')



@section('content')

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="http://ppid.banyuwangikab.go.id/assets/bootstrap-3.3.7/dist/css/bootstrap.min.bwi.css" rel="stylesheet">
<link href="http://ppid.banyuwangikab.go.id/assets/bootstrap-3.3.7/dist/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="http://ppid.banyuwangikab.go.id/assets/bootstrap-3.3.7/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
<link href="http://ppid.banyuwangikab.go.id/assets/bootstrap-3.3.7/docs/examples/theme/theme.css" rel="stylesheet">
<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
<script src="http://ppid.banyuwangikab.go.id/assets/bootstrap-3.3.7/assets/js/ie-emulation-modes-warning.js" type="aa59a04a88d68884fe69f0db-text/javascript"></script>
<script src="http://ppid.banyuwangikab.go.id/assets/bootstrap-3.3.7/js/jquery-1.8.3.min.js" type="aa59a04a88d68884fe69f0db-text/javascript"></script>

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Informasi Berkala : PPID Kabupaten Banyuwangi</h2>

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
    <br>
    <table border="1" style="width: 100%; ">
        <tbody>
            <tr>
                <td style="width: .45in; border: solid windowtext 1.0pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="43">
                    <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify;">
                        <strong><span style="font-size:12px;">A</span></strong>
                    </p>
                </td>
                <td style="width: 4.5in; border: solid windowtext 1.0pt; border-left: none; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="432">
                    <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify;">
                        <strong><span style="font-size:12px;"><span data-scayt_word="Informasi" data-scaytid="1">Informasi</span> <span data-scayt_word="tentang" data-scaytid="3">tentang</span> profile <span data-scayt_word="Badan" data-scaytid="5">Badan</span> <span data-scayt_word="Publik" data-scaytid="6">Publik</span> :</span><span style="text-indent: -0.25in;">&nbsp; &nbsp;&nbsp;</span></strong>
                    </p>
                </td>
                <td style="width: 10px; border-style: solid solid solid none; border-top-width: 1pt; border-right-width: 1pt; border-bottom-width: 1pt; padding: 0in 5.4pt; vertical-align: top;">
                    <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify;">
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
                <td style="width: 67.5pt; border: solid windowtext 1.0pt; border-left: none; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="90">
                    <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify;">
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
            </tr>

        
            <tr>
                <td style="width: .45in; border: solid windowtext 1.0pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="43">
                    1.</td>
                <td style="width: 4.5in; border: solid windowtext 1.0pt; border-left: none; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="432">
                    <span data-scayt_word="Informasi" data-scaytid="2">Informasi</span> <span data-scayt_word="tentang" data-scaytid="4">tentang</span> <span data-scayt_word="kedudukan" data-scaytid="7">kedudukan</span>, <span data-scayt_word="domisili" data-scaytid="8">domisili</span>&nbsp;<span data-scayt_word="dan" data-scaytid="9">dan</span> <span data-scayt_word="alamt" data-scaytid="10">alamat</span> <span data-scayt_word="lengkap" data-scaytid="11">lengkap</span>
                </td>
                <td style="width: 10px; border-style: solid solid solid none; border-top-width: 1pt; border-right-width: 1pt; border-bottom-width: 1pt; padding: 0in 5.4pt; vertical-align: top;">&nbsp;
                </td>
                <td style="width: 67.5pt; border: solid windowtext 1.0pt; border-left: none; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="90">
                    <a href="http://ppid.banyuwangikab.go.id/home/seputar_ppid" target="_blank">VIEW</a>
                </td>
            </tr>
            <tr>
                <td style="width: .45in; border: solid windowtext 1.0pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="43">
                    2.</td>
                <td style="width: 4.5in; border: solid windowtext 1.0pt; border-left: none; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="432">
                    <span data-scayt_word="Struktur" data-scaytid="13">Struktur</span>&nbsp;<span data-scayt_word="organisasi" data-scaytid="15">organisasi</span>, <span data-scayt_word="gambaran" data-scaytid="16">gambaran</span> <span data-scayt_word="umum" data-scaytid="17">umum</span> <span data-scayt_word="dan" data-scaytid="12">dan</span> <span data-scayt_word="profil" data-scaytid="19">profil</span> <span data-scayt_word="singkat" data-scaytid="20">singkat</span> <span data-scayt_word="pejabat" data-scaytid="21">pejabat</span>
                </td>
                <td style="width: 10px; border-style: solid solid solid none; border-top-width: 1pt; border-right-width: 1pt; border-bottom-width: 1pt; padding: 0in 5.4pt; vertical-align: top;">
                    <span data-scayt_word="Struktur" data-scaytid="14">Struktur</span> <span data-scayt_word="Organisasi" data-scaytid="22">Organisasi</span>
                </td>
                <td style="width: 67.5pt; border: solid windowtext 1.0pt; border-left: none; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="90">
                    <a href="http://ppid.banyuwangikab.go.id/home/kelembagaan_ppid" target="_blank">VIEW</a>
                </td>
            </tr>
            <tr>
                <td style="width: .45in; border: solid windowtext 1.0pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="43">&nbsp;
                </td>
                <td style="width: 4.5in; border: solid windowtext 1.0pt; border-left: none; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="432">&nbsp;
                </td>
                <td style="width: 10px; border-style: solid solid solid none; border-top-width: 1pt; border-right-width: 1pt; border-bottom-width: 1pt; padding: 0in 5.4pt; vertical-align: top;">
                    <span data-scayt_word="Profil" data-scaytid="24">Profil</span><span data-scayt_word="Pejabat" data-scaytid="607"> Pejabat</span>
                </td>
                <td style="width: 67.5pt; border: solid windowtext 1.0pt; border-left: none; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="90">
                    <a href="http://ppid.banyuwangikab.go.id/home/kelembagaan_ppid" target="_blank">VIEW</a>
                </td>
            </tr>
            <tr>
                <td style="width: .45in; border: solid windowtext 1.0pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="43">&nbsp;
                </td>
                <td style="width: 4.5in; border: solid windowtext 1.0pt; border-left: none; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="432">&nbsp;
                </td>
                <td style="width: 10px; border-style: solid solid solid none; border-top-width: 1pt; border-right-width: 1pt; border-bottom-width: 1pt; padding: 0in 5.4pt; vertical-align: top;">
                    <span data-scayt_word="Profil" data-scaytid="24">Gambaran</span><span data-scayt_word="Pejabat" data-scaytid="607"> Umum</span>
                </td>
                <td style="width: 67.5pt; border: solid windowtext 1.0pt; border-left: none; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="90">
                    <a href="http://banyuwangikab.go.id/profil/gambaranumum.html" target="_blank">VIEW</a>
                </td>
            </tr>
            <tr>
                <td style="width: .45in; border: solid windowtext 1.0pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="43">
                    3.</td>
                <td style="width: 4.5in; border: solid windowtext 1.0pt; border-left: none; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="432">
                    <span data-scayt_word="Visi" data-scaytid="34">Visi</span> <span data-scayt_word="Misi" data-scaytid="35">Misi</span>
                </td>
                <td style="width: 10px; border-style: solid solid solid none; border-top-width: 1pt; border-right-width: 1pt; border-bottom-width: 1pt; padding: 0in 5.4pt; vertical-align: top;">&nbsp;
                </td>
                <td style="width: 67.5pt; border: solid windowtext 1.0pt; border-left: none; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="90">
                    <a href="http://banyuwangikab.go.id/pemerintahan/visi-dan-misi.html" target="_blank">VIEW</a>
                </td>
            </tr>
            <tr>
                <td style="width: .45in; border: solid windowtext 1.0pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="43">
                    4.</td>
                <td style="width: 4.5in; border: solid windowtext 1.0pt; border-left: none; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="432">
                    <span data-scayt_word="Tugas" data-scaytid="36">Tugas</span> <span data-scayt_word="Pokok" data-scaytid="37">Pokok</span> <span data-scayt_word="dan" data-scaytid="32">dan</span> <span data-scayt_word="Fungsi" data-scaytid="39">Fungsi</span>
                </td>
                <td style="width: 10px; border-style: solid solid solid none; border-top-width: 1pt; border-right-width: 1pt; border-bottom-width: 1pt; padding: 0in 5.4pt; vertical-align: top;">
                    <span data-scayt_word="Tugas" data-scaytid="608">Tugas</span> <span data-scayt_word="Fungsi" data-scaytid="610">Fungsi</span>&nbsp;<span data-scayt_word="Kabupaten" data-scaytid="617">Kabupaten</span> <span data-scayt_word="Banyuwangi" data-scaytid="624">Banyuwangi</span>
                </td>
                <td style="width: 67.5pt; border: solid windowtext 1.0pt; border-left: none; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="90">
                    <a href="http://jdih.banyuwangikab.go.id/dokumen/perda/6.pdf" target="_blank">VIEW</a>
                </td>
            </tr>
            <tr>
                <td style="width: .45in; border: solid windowtext 1.0pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="43">&nbsp;
                </td>
                <td style="width: 4.5in; border: solid windowtext 1.0pt; border-left: none; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="432">&nbsp;
                </td>
                <td style="width: 10px; border-style: solid solid solid none; border-top-width: 1pt; border-right-width: 1pt; border-bottom-width: 1pt; padding: 0in 5.4pt; vertical-align: top;">
                    <span data-scayt_word="Tugas" data-scaytid="625">Tugas</span> <span data-scayt_word="Fungsi" data-scaytid="629">Fungsi</span>&nbsp;Unit <span data-scayt_word="Kerja" data-scaytid="634">Kerja</span>
                </td>
                <td style="width: 67.5pt; border: solid windowtext 1.0pt; border-left: none; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="90">
                    <a href="http://banyuwangikab.go.id/pemerintahan/eksekutif.html" target="_blank">VIEW</a>
                </td>
            </tr>
            <tr>
                <td style="width: .45in; border: solid windowtext 1.0pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="43">
                    5.</td>
                <td style="width: 4.5in; border: solid windowtext 1.0pt; border-left: none; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="432">
                    <p>
                        <span style="text-align: justify; text-indent: -24px;"><span data-scayt_word="Laporan" data-scaytid="40">Laporan</span>&nbsp;</span><span data-scayt_word="harta" data-scaytid="41">harta</span><span style="text-align: justify; text-indent: -24px;">&nbsp;</span><span data-scayt_word="kekayaan" data-scaytid="42">kekayaan</span><span style="text-align: justify; text-indent: -24px;">&nbsp;</span><span data-scayt_word="bagi" data-scaytid="43">bagi</span><span style="text-align: justify; text-indent: -24px;">&nbsp;</span><span data-scayt_word="pejabat" data-scaytid="33">pejabat</span><span style="text-align: justify; text-indent: -24px;">&nbsp;</span><span data-scayt_word="Negara" data-scaytid="46">Negara</span><span style="text-align: justify; text-indent: -24px;">&nbsp;yang&nbsp;</span><span data-scayt_word="telah" data-scaytid="47">telah</span>
                    </p>
                    <p>
                        <span style="text-align: justify; text-indent: -24px;">&nbsp;</span><span data-scayt_word="diperiksa" data-scaytid="49">diperiksa</span><span style="text-align: justify; text-indent: -24px;">,&nbsp;</span><span data-scayt_word="diverifikasi" data-scaytid="50">diverifikasi</span><span style="text-align: justify; text-indent: -24px;">&nbsp;</span><span data-scayt_word="dan" data-scaytid="45">dan</span><span style="text-align: justify; text-indent: -24px;">&nbsp;</span><span data-scayt_word="telah" data-scaytid="48">telah</span><span style="text-align: justify; text-indent: -24px;">&nbsp;</span><span data-scayt_word="dikirimkan" data-scaytid="52">dikirimkan</span><span style="text-align: justify; text-indent: -24px;">&nbsp;</span><span data-scayt_word="oleh" data-scaytid="53">oleh</span><span style="text-align: justify; text-indent: -24px;">&nbsp;</span><span data-scayt_word="Komisi" data-scaytid="54">Komisi</span><span style="text-align: justify; text-indent: -24px;">&nbsp;</span>
                    </p>
                    <p>
                        <span data-scayt_word="Pemberatasan" data-scaytid="55">Pemberatasan</span><span style="text-align: justify; text-indent: -24px;">&nbsp;</span><span data-scayt_word="Korupsi" data-scaytid="56">Korupsi</span><span style="text-align: justify; text-indent: -24px;">&nbsp;</span><span data-scayt_word="ke" data-scaytid="63">ke</span><span style="text-align: justify; text-indent: -24px;">&nbsp;</span><span data-scayt_word="Badan" data-scaytid="57">Badan</span><span style="text-align: justify; text-indent: -24px;">&nbsp;</span><span data-scayt_word="Publik" data-scaytid="59">Publik</span><span style="text-align: justify; text-indent: -24px;">&nbsp;</span><span data-scayt_word="untuk" data-scaytid="68">untuk</span><span style="text-align: justify; text-indent: -24px;">&nbsp;</span><span data-scayt_word="diumumkan" data-scaytid="69">diumumkan</span>
                    </p>
                </td>
                <td style="width: 10px; border-style: solid solid solid none; border-top-width: 1pt; border-right-width: 1pt; border-bottom-width: 1pt; padding: 0in 5.4pt; vertical-align: top;">&nbsp;
                </td>
                <td style="width: 67.5pt; border: solid windowtext 1.0pt; border-left: none; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="90">
                    <a href="https://drive.google.com/drive/folders/12CtSn8ViYBQQi1trxPhjaKFUMTEIVuAS?usp=sharing" target="_blank">BUPATI</a>
                    <br />
                    <br />
                    <a href="https://drive.google.com/drive/folders/12CtSn8ViYBQQi1trxPhjaKFUMTEIVuAS?usp=sharing" target="_blank">WAKIL BUPATI</a>
            </tr>
            <tr>
                <td style="width: .45in; border: solid windowtext 1.0pt; border-top: none; mso-border-top-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="43">
                    <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify;">
                        <strong><span style="font-size:12px;">B</span></strong>
                    </p>
                </td>
                <td style="width: 4.5in; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-top-alt: solid windowtext .5pt; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="432">
                    <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify;">
                        <strong><span style="font-size:12px;"><span data-scayt_word="Ringkasan" data-scaytid="70">Ringkasan</span> <span data-scayt_word="informasi" data-scaytid="71">informasi</span> <span data-scayt_word="tentang" data-scaytid="61">tentang</span> program <span data-scayt_word="dan" data-scaytid="62">dan</span>/<span data-scayt_word="atau" data-scaytid="74">atau</span> <span data-scayt_word="kegiatan" data-scaytid="75">kegiatan</span> yang <span data-scayt_word="sedang" data-scaytid="76">sedang</span> <span data-scayt_word="dijalankan" data-scaytid="77">dijalankan</span> <span data-scayt_word="dalam" data-scaytid="78">dalam</span> <span data-scayt_word="lingkup" data-scaytid="79">lingkup</span> <span data-scayt_word="Badan" data-scaytid="58">Badan</span> <span data-scayt_word="Publik" data-scaytid="60">Publik</span>, yang <span data-scayt_word="meliputi" data-scaytid="80">meliputi</span>&nbsp;:</span></strong>
                    </p>
                    <p class="MsoListParagraphCxSpFirst" style="margin-bottom: 0.0001pt; text-indent: -0.25in;">
                        <!--[if !supportLists]--> <span style="font-size:12px;">1.<span style="font-stretch: normal;">&nbsp;&nbsp;&nbsp;&nbsp;</span><span data-scayt_word="Nama" data-scaytid="85">Nama</span> program <span data-scayt_word="dan" data-scaytid="81">dan</span> <span data-scayt_word="kegiatan" data-scaytid="83">kegiatan</span></span>
                    </p>
                    <p class="MsoListParagraphCxSpMiddle" style="margin-bottom: 0.0001pt; text-indent: -0.25in;">
                        <!--[if !supportLists]--> <span style="font-size:12px;">2.<span style="font-stretch: normal;">&nbsp; &nbsp; </span><span data-scayt_word="Penanggungjawab" data-scaytid="90">Penanggungjawab</span>, <span data-scayt_word="pelaksana" data-scaytid="91">pelaksana</span> program <span data-scayt_word="dan" data-scaytid="82">dan</span> <span data-scayt_word="kegiatan" data-scaytid="84">kegiatan</span> ,&nbsp;</span><span style="text-indent: -0.25in;"><span data-scayt_word="serta" data-scaytid="92">serta</span> </span><span data-scayt_word="nomor" data-scaytid="93">nomor</span><span style="text-indent: -0.25in;"> </span><span data-scayt_word="telepon" data-scaytid="94">telepon</span><span style="text-indent: -0.25in;"> </span><span data-scayt_word="dan" data-scaytid="95">dan</span><span style="text-indent: -0.25in;">/</span><span data-scayt_word="alamat" data-scaytid="104">alamat</span><span style="text-indent: -0.25in;"> yang </span><span data-scayt_word="dapat" data-scaytid="105">dapat</span><span style="text-indent: -0.25in;"> </span><span data-scayt_word="dihububungi" data-scaytid="106">dihububungi</span>
                    </p>
                    <p class="MsoListParagraphCxSpMiddle" style="margin-bottom: 0.0001pt; text-indent: -0.25in;">
                        <!--[if !supportLists]--> <span style="font-size:12px;">3.<span style="font-stretch: normal;">&nbsp; &nbsp; </span>Target <span data-scayt_word="dan" data-scaytid="96">dan</span>/<span data-scayt_word="atau" data-scaytid="98">atau</span> <span data-scayt_word="capaian" data-scaytid="108">capaian</span> program <span data-scayt_word="kegiatan" data-scaytid="99">kegiatan</span></span>
                    </p>
                    <p class="MsoListParagraphCxSpMiddle" style="margin-bottom: 0.0001pt; text-indent: -0.25in;">
                        <!--[if !supportLists]--> <span style="font-size:12px;">4.<span style="font-stretch: normal;">&nbsp; &nbsp; </span><span data-scayt_word="Jadual" data-scaytid="111">Jadual</span> <span data-scayt_word="pelaksanaan" data-scaytid="112">pelaksanaan</span> program <span data-scayt_word="dan" data-scaytid="97">dan</span> <span data-scayt_word="kegiatan" data-scaytid="100">kegiatan</span></span>
                    </p>
                    <p class="MsoListParagraphCxSpMiddle" style="margin-bottom: 0.0001pt; text-indent: -0.25in;">
                        <!--[if !supportLists]--> <span style="font-size:12px;">5.<span style="font-stretch: normal;">&nbsp; &nbsp;&nbsp;</span><span data-scayt_word="Anggaran" data-scaytid="119"><span style="font-stretch: normal;">A</span>nggaran</span> program dam <span data-scayt_word="kegiatan" data-scaytid="113">kegiatan</span> yang &nbsp;&nbsp;<span data-scayt_word="meliputi" data-scaytid="114">meliputi</span> <span data-scayt_word="sumber" data-scaytid="122">sumber</span> <span data-scayt_word="dan" data-scaytid="115">dan</span> <span data-scayt_word="jumlah" data-scaytid="124">jumlah</span></span>
                    </p>
                    <p class="MsoListParagraphCxSpMiddle" style="margin-bottom: 0.0001pt; text-indent: -0.25in;">
                        <!--[if !supportLists]--> <span style="font-size:12px;">6.<span style="font-stretch: normal;">&nbsp; &nbsp;&nbsp;</span>Agenda <span data-scayt_word="penting" data-scaytid="125">penting</span> <span data-scayt_word="tekait" data-scaytid="126">tekait</span> <span data-scayt_word="pelaksanaan" data-scaytid="116">pelaksanaan</span> <span data-scayt_word="tugas" data-scaytid="128">tugas</span> <span data-scayt_word="Badan" data-scaytid="117">Badan</span> <span data-scayt_word="Publik" data-scaytid="118">Publik</span></span><span style="text-align: justify; text-indent: -0.25in;">&nbsp;</span>
                    </p>
                </td>
                <td style="width: 1.0in; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-top-alt: solid windowtext .5pt; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="96">
                    <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify;">
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                    <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify;">&nbsp;
                    </p>
                    <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify;">
                        <span data-scayt_word="Informasi" data-scaytid="131">Informasi</span> <span data-scayt_word="tentang" data-scaytid="132">tentang</span>&nbsp;<span data-scayt_word="nama" data-scaytid="133">n<span data-scayt_word="Nama" data-scaytid="87" style="text-indent: -24px; background-color: rgb(255, 255, 255);">ama</span></span><span style="text-indent: -24px;">&nbsp;program&nbsp;</span><span data-scayt_word="dan" data-scaytid="134">dan</span><span style="text-indent: -24px;">&nbsp;</span><span data-scayt_word="kegiatan" data-scaytid="136">kegiatan</span>, <span data-scayt_word="penanggung" data-scaytid="147">penanggung</span> <span data-scayt_word="jawab" data-scaytid="148">jawab</span>, target <span data-scayt_word="dan" data-scaytid="135">dan</span> <span data-scayt_word="capaian" data-scaytid="137">capaian</span>, <span data-scayt_word="jadual" data-scaytid="150">jadual</span>, <span data-scayt_word="anggaran" data-scaytid="151">anggaran</span> <span data-scayt_word="serta" data-scaytid="138">serta</span> agenda <span data-scayt_word="penting" data-scaytid="139">penting</span> <span data-scayt_word="Pemerintah" data-scaytid="154">Pemerintah</span> <span data-scayt_word="Provinsi" data-scaytid="155">Kabupaten</span> <span data-scayt_word="Jawa" data-scaytid="156">Banyuwangi</span> <span data-scayt_word="tersedia" data-scaytid="158">tersedia</span> <span data-scayt_word="dalam" data-scaytid="140">dalam</span>&nbsp;<span data-scayt_word="SIKD" data-scaytid="160">SIKD</span>&nbsp;(<span data-scayt_word="Sistem Informasi Keuangan" data-scaytid="161">Sistem Informasi Keuangan </span><span data-scayt_word="Daerah" data-scaytid="164">Daerah</span>) &nbsp;<span data-scayt_word="tahun" data-scaytid="165">tahun</span> berjalan .
                    </p>
                    <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify;">&nbsp;
                    </p>
                    <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify;">&nbsp;
                    </p>
                    <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify;">&nbsp;
                    </p>
                    <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify;">&nbsp;
                    </p>
                    <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify;">&nbsp;
                    </p>
                </td>
                <td style="width: 67.5pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-top-alt: solid windowtext .5pt; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="90">
                    <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify;">
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                    <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify;">
                        <a href="https://banyuwangikab.go.id/transparansi/pengelolaan.html" target="_blank">VIEW <span data-scayt_word="RINGKASAN" data-scaytid="167">RINGKASAN</span></a>
                    </p>
                    <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify;">&nbsp;
                    </p>
                    <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify;">&nbsp;
                    </p>
                    <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify;">&nbsp;
                    </p>
                    <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify;">&nbsp;
                    </p>
                    <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify;">&nbsp;
                    </p>
                    <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify;">&nbsp;
                    </p>
                    <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify;">&nbsp;
                    </p>
                    <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify;">&nbsp;
                    </p>
                </td>
            </tr>
            <tr>
                <td style="width: .45in; border: solid windowtext 1.0pt; border-top: none; mso-border-top-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="43">
                    <p>
                        7.</p>
                </td>
                <td style="width: 4.5in; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-top-alt: solid windowtext .5pt; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="432">
                    <p>
                        <span style="text-indent: -0.25in; text-align: justify;"><span data-scayt_word="Informasi" data-scaytid="166">Informasi</span>&nbsp;<span data-scayt_word="khusus" data-scaytid="170">khusus</span>&nbsp;<span data-scayt_word="lainnya" data-scaytid="171">lainnya</span>&nbsp;yang&nbsp;<span data-scayt_word="berkaitan" data-scaytid="172">berkaitan</span>&nbsp;<span data-scayt_word="langsung" data-scaytid="173">langsung</span>&nbsp;<span data-scayt_word="dengan" data-scaytid="174">dengan</span>&nbsp;</span>
                    </p>
                    <p>
                        <span style="text-indent: -0.25in; text-align: justify;"><span data-scayt_word="hak" data-scaytid="175">hak</span>&nbsp;<span data-scayt_word="hak" data-scaytid="176">hak</span>&nbsp;&nbsp;</span><span data-scayt_word="masyarakat" data-scaytid="184">masyarakat</span>
                    </p>
                </td>
                <td style="width: 1.0in; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-top-alt: solid windowtext .5pt; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="96">&nbsp;
                </td>
                <td style="width: 67.5pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-top-alt: solid windowtext .5pt; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="90">
                    <a href="https://www.banyuwangikab.go.id/layanan.html" target="_blank">VIEW</a>
                </td>
            </tr>
            <tr>
                <td style="width: .45in; border: solid windowtext 1.0pt; border-top: none; mso-border-top-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="43">
                    <p>&nbsp;
                    </p>
                    <p>
                        8.</p>
                </td>
                <td style="width: 4.5in; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-top-alt: solid windowtext .5pt; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="432">
                    <p>
                        <span style="text-indent: -0.25in; text-align: justify;"><span data-scayt_word="Informasi" data-scaytid="177"><span style="font-stretch: normal;">I</span><span data-scayt_word="Informasi" data-scaytid="146">nformasi</span></span>&nbsp;<span data-scayt_word="tentang" data-scaytid="178">tentang</span>&nbsp;<span data-scayt_word="penerimaan" data-scaytid="187">penerimaan</span>&nbsp;<span data-scayt_word="calon" data-scaytid="188">calon</span>&nbsp;<span data-scayt_word="pegawai" data-scaytid="189">pegawai</span>&nbsp;<span data-scayt_word="dan" data-scaytid="179">dan</span>/<span data-scayt_word="atau" data-scaytid="180">atau</span>&nbsp;</span>
                    </p>
                    <p>
                        <span style="text-indent: -0.25in; text-align: justify;"><span data-scayt_word="pejabat" data-scaytid="181">pejabat</span>&nbsp;<span data-scayt_word="Badan" data-scaytid="182">Badan</span>&nbsp;&nbsp;</span><span data-scayt_word="Publik" data-scaytid="183">Publik</span><span style="text-indent: -0.25in; text-align: justify;">&nbsp;</span><span data-scayt_word="Negara" data-scaytid="195">Negara</span>
                    </p>
                </td>
                <td style="width: 1.0in; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-top-alt: solid windowtext .5pt; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="96">
                    <p>
                        <span style="text-align: justify;"><span data-scayt_word="Informasi" data-scaytid="196">Informasi</span>&nbsp;</span><span data-scayt_word="tentang" data-scaytid="197">tentang</span><span style="text-align: justify;">&nbsp;</span><span data-scayt_word="penerimaan" data-scaytid="198">penerimaan</span><span style="text-align: justify;">&nbsp;</span><span data-scayt_word="calon" data-scaytid="199">calon</span><span style="text-align: justify;">&nbsp;</span><span data-scayt_word="pegawai" data-scaytid="200">pegawai</span><span style="text-align: justify;">&nbsp;</span><span data-scayt_word="tersedi" data-scaytid="209">tersedia</span><span style="text-align: justify;">&nbsp;</span><span data-scayt_word="pada" data-scaytid="210">pada</span><span style="text-align: justify;">&nbsp;</span>
                    </p>
                    <p>
                        <span style="text-align: justify;">website&nbsp;</span><span data-scayt_word="Badan" data-scaytid="201">Badan</span><span style="text-align: justify;">&nbsp;</span><span data-scayt_word="Kepaegawaian" data-scaytid="212">Kepaegawaian</span><span style="text-align: justify;">&nbsp;</span><span data-scayt_word="Daerah" data-scaytid="202">Kabupaten</span><span style="text-align: justify;">&nbsp;</span><span style="text-align: justify;">&nbsp;</span><span data-scayt_word="Banyuwangi" data-scaytid="222">Banyuwangi</span>
                    </p>
                </td>
                <td style="width: 67.5pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-top-alt: solid windowtext .5pt; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="90">
                    <p>&nbsp;
                    </p>
                    <p>
                        <a href="http://bkd.banyuwangikab.go.id/" target="_blank" style="text-align: justify;">VIEW</a>
                    </p>
                </td>
            </tr>
            <tr>
                <td style="width: .45in; border: solid windowtext 1.0pt; border-top: none; mso-border-top-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="43">
                    <p>&nbsp;
                    </p>
                    <p>
                        9</p>
                </td>
                <td style="width: 4.5in; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-top-alt: solid windowtext .5pt; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="432">
                    <p>
                        <span style="text-align: justify; text-indent: -24px;"><span data-scayt_word="Informasi" data-scaytid="214">Informasi</span>&nbsp;</span><span data-scayt_word="tentang" data-scaytid="215">tentang</span><span style="text-align: justify; text-indent: -24px;">&nbsp;</span><span data-scayt_word="penerimaan" data-scaytid="216">penerimaan</span><span style="text-align: justify; text-indent: -24px;">&nbsp;</span><span data-scayt_word="calon" data-scaytid="217">calon</span><span style="text-align: justify; text-indent: -24px;">&nbsp;</span><span data-scayt_word="peserta" data-scaytid="227">peserta</span><span style="text-align: justify; text-indent: -24px;">&nbsp;</span><span data-scayt_word="didik" data-scaytid="228">didik</span><span style="text-align: justify; text-indent: -24px;">&nbsp;</span><span data-scayt_word="pada" data-scaytid="218">pada</span>
                    </p>
                    <p>
                        <span style="text-align: justify; text-indent: -24px;">&nbsp;</span><span data-scayt_word="Badan" data-scaytid="219">Badan</span><span style="text-align: justify; text-indent: -24px;">&nbsp;</span><span data-scayt_word="Publik" data-scaytid="220">Publik</span><span style="text-align: justify; text-indent: -24px;">&nbsp;yang&nbsp;</span><span data-scayt_word="menyelenggarakan" data-scaytid="238">menyelenggarakan</span><span style="text-align: justify; text-indent: -24px;">&nbsp;</span><span data-scayt_word="pendidikan" data-scaytid="240">pendidikan</span><span style="text-align: justify; text-indent: -24px;">&nbsp;</span><span data-scayt_word="untuk" data-scaytid="232">untuk</span><span style="text-align: justify; text-indent: -24px;">&nbsp;</span><span data-scayt_word="umum" data-scaytid="234">umum</span>
                    </p>
                </td>
                <td style="width: 1.0in; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-top-alt: solid windowtext .5pt; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="96">
                    <p>
                        <span data-scayt_word="Badan" data-scaytid="236">Badan</span>&nbsp;<span data-scayt_word="Publik" data-scaytid="237">Publik</span>&nbsp;yang&nbsp;<span data-scayt_word="menyelenggarakan" data-scaytid="239">menyelenggarakan</span>&nbsp;<span data-scayt_word="pendidikan" data-scaytid="241">pendidikan</span>
                    </p>
                </td>
                <td style="width: 67.5pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-top-alt: solid windowtext .5pt; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="90">
                    <p>
                        <br />
                        &nbsp;
                    </p>
                    <p>
                        <a href="http://pendidikan.banyuwangikab.go.id/" target="_blank" style="text-align: justify;">VIEW</a>
                    </p>
                </td>
            </tr>
            <tr>
                <td style="width: .45in; border: solid windowtext 1.0pt; border-top: none; mso-border-top-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="43">
                    <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify;">
                        <strong><span style="font-size:12px;">C</span></strong>
                    </p>
                </td>
                <td style="width: 4.5in; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-top-alt: solid windowtext .5pt; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="432">
                    <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify;">
                        <strong><span style="font-size:12px;"><span data-scayt_word="Ringkasan" data-scaytid="279">Ringkasan</span> <span data-scayt_word="informasi" data-scaytid="280">informasi</span> <span data-scayt_word="tentang" data-scaytid="281">tentang</span> <span data-scayt_word="kinerja" data-scaytid="293">kinerja</span> <span data-scayt_word="Badan" data-scaytid="283">Badan</span> <span data-scayt_word="Publik" data-scaytid="284">Publik</span> <span data-scayt_word="berupa" data-scaytid="296">berupa</span> <span data-scayt_word="narasi" data-scaytid="297">narasi</span> <span data-scayt_word="tentang" data-scaytid="282">tentang</span> <span data-scayt_word="realisasi" data-scaytid="298">realisasi</span> <span data-scayt_word="kegiatan" data-scaytid="285">kegiatan</span> yang <span data-scayt_word="telah" data-scaytid="286">telah</span> <span data-scayt_word="maupun" data-scaytid="301">maupun</span> <span data-scayt_word="sedang" data-scaytid="287">sedang</span> <span data-scayt_word="dijalankan" data-scaytid="288">dijalankan</span> <span data-scayt_word="beserta" data-scaytid="304">beserta</span> <span data-scayt_word="capaiannya" data-scaytid="305">capaiannya</span></span></strong>
                    </p>
                </td>
                <td style="width: 1.0in; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-top-alt: solid windowtext .5pt; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="96">
                    <p>
                        <span data-scayt_word="Informasi" data-scaytid="306">Informasi</span>&nbsp;<span data-scayt_word="tentang" data-scaytid="307">tentang</span>&nbsp;<span data-scayt_word="kinerja" data-scaytid="308">kinerja</span>&nbsp;<span data-scayt_word="tersedia" data-scaytid="309">tersedia</span>&nbsp;<span data-scayt_word="dalam" data-scaytid="310">dalam</span>&nbsp;<span data-scayt_word="LAKIP" data-scaytid="318">LKjIP</span>&nbsp;<span data-scayt_word="Banyuwangi" data-scaytid="319">Banyuwangi</span>&nbsp;2020:
                    </p>
                    <p>&nbsp;
                    </p>
                </td>
                <td style="width: 67.5pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-top-alt: solid windowtext .5pt; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="90">
                    <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify;">
                        <a href="https://bappeda.banyuwangikab.go.id/page/dokumen_bappeda_download/730/" target="_blank">VIEW</a>
                    </p>
                </td>
            </tr>
            <tr>
                <td style="width: .45in; border: solid windowtext 1.0pt; border-top: none; mso-border-top-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="43">
                    <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify;">
                        <strong><span style="font-size:12px;">D</span></strong>
                    </p>
                </td>
                <td style="width: 4.5in; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-top-alt: solid windowtext .5pt; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="432">
                    <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify;">
                        <strong><span style="font-size:12px;"><span data-scayt_word="Ringkasan" data-scaytid="311">Ringkasan</span> <span data-scayt_word="laporan" data-scaytid="321">laporan</span> <span data-scayt_word="keuangan" data-scaytid="322">keuangan</span>, <span data-scayt_word="ysng" data-scaytid="323">ysng</span> <span data-scayt_word="meliputi" data-scaytid="312">meliputi</span> :</span></strong>
                    </p>
                </td>
                <td style="width: 1.0in; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-top-alt: solid windowtext .5pt; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="96">
                    <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify;">&nbsp;
                    </p>
                </td>
                <td style="width: 67.5pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-top-alt: solid windowtext .5pt; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="90">
                    <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify;">
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td rowspan="2" style="width: .45in; border: solid windowtext 1.0pt; border-top: none; mso-border-top-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="43">
                    1.</td>
                <td rowspan="2" style="width: 4.5in; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-top-alt: solid windowtext .5pt; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="432">
                    <span data-scayt_word="Rencana" data-scaytid="325">Rencana</span> <span data-scayt_word="dan" data-scaytid="327">dan</span> <span data-scayt_word="realisasi" data-scaytid="328">realisasi</span> <span data-scayt_word="anggaran" data-scaytid="329">anggaran</span>
                </td>
                <td style="width: 1.0in; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-top-alt: solid windowtext .5pt; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="96">
                    <span data-scayt_word="Rencana" data-scaytid="326">Rencana</span> <span data-scayt_word="anggaran" data-scaytid="330">anggaran</span>
                </td>
                <td style="width: 67.5pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-top-alt: solid windowtext .5pt; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="90">
                    <a href="http://bpkad.banyuwangikab.go.id/utama/themes/template/img/Kebijakanisi/28.pdf" target="_blank">VIEW</a>
                </td>
            </tr>
            <tr>
                <td style="width: 67.5pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-top-alt: solid windowtext .5pt; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="90">
                    <span data-scayt_word="Realisasi" data-scaytid="339">Realisasi</span> <span data-scayt_word="anggaran" data-scaytid="331">anggaran</span>
                </td>
                <td style="width: 1.0in; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-top-alt: solid windowtext .5pt; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="96">
                    <a href="http://bpkad.banyuwangikab.go.id/utama/themes/template/img/Kebijakanisi/28.pdf" target="_blank">VIEW</a>
                </td>
            </tr>
            <tr>
                <td style="width: .45in; border: solid windowtext 1.0pt; border-top: none; mso-border-top-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="43">
                    2.</td>
                <td style="width: 4.5in; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-top-alt: solid windowtext .5pt; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="432">Laporan Tri Wulan </td>
                <td style="width: 1.0in; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-top-alt: solid windowtext .5pt; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="96">&nbsp;
                </td>
                <td style="width: 67.5pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-top-alt: solid windowtext .5pt; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="90">
                    <a href="http://bpkad.banyuwangikab.go.id/utama/themes/template/img/Kebijakanisi/28.pdf" target="_blank">VIEW</a>
                </td>
            </tr>
            <tr>
                <td style="width: .45in; border: solid windowtext 1.0pt; border-top: none; mso-border-top-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="43">
                    <p>&nbsp;
                    </p>
                    <p>
                        3.</p>
                </td>
                <td style="width: 4.5in; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-top-alt: solid windowtext .5pt; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="432">
                    <p>
                        <span data-scayt_word="Laporan" data-scaytid="341">Laporan</span><span style="text-align: justify; text-indent: -24px;">&nbsp;</span><span data-scayt_word="arus" data-scaytid="347">arus</span><span style="text-align: justify; text-indent: -24px;">&nbsp;</span><span data-scayt_word="kas" data-scaytid="348">kas</span><span style="text-align: justify; text-indent: -24px;">&nbsp;</span><span data-scayt_word="dan" data-scaytid="342">dan</span><span style="text-align: justify; text-indent: -24px;">&nbsp;</span><span data-scayt_word="catatan" data-scaytid="350">catatan</span><span style="text-align: justify; text-indent: -24px;">&nbsp;</span><span data-scayt_word="atas" data-scaytid="351">atas</span><span style="text-align: justify; text-indent: -24px;">&nbsp;</span><span data-scayt_word="laporan" data-scaytid="343">laporan</span><span style="text-align: justify; text-indent: -24px;">&nbsp;</span><span data-scayt_word="keuangan" data-scaytid="344">keuangan</span><span style="text-align: justify; text-indent: -24px;">&nbsp;</span><span data-scayt_word="uang" data-scaytid="354">uang</span>
                    </p>
                    <p>
                        &nbsp;<span data-scayt_word="disusun" data-scaytid="355">disusun</span><span style="text-align: justify; text-indent: -24px;">&nbsp;</span><span data-scayt_word="sesuai" data-scaytid="356">sesuai</span><span style="text-align: justify; text-indent: -24px;">&nbsp;</span><span data-scayt_word="dengan" data-scaytid="345">dengan</span><span style="text-align: justify; text-indent: -24px;">&nbsp;</span><span data-scayt_word="standar" data-scaytid="358">standar</span><span style="text-align: justify; text-indent: -24px;">&nbsp;</span><span data-scayt_word="akuntansi" data-scaytid="359">akuntansi</span><span style="text-align: justify; text-indent: -24px;">&nbsp;yang&nbsp;</span><span data-scayt_word="berlaku" data-scaytid="366">berlaku</span></p>
                </td>
                <td style="width: 1.0in; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-top-alt: solid windowtext .5pt; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="96">&nbsp;
                </td>
                <td style="width: 67.5pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-top-alt: solid windowtext .5pt; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="90">
                    <a href="http://bpkad.banyuwangikab.go.id/utama/themes/template/img/Kebijakanisi/28.pdf" target="_blank">VIEW</a>
                </td>
            </tr>
            <tr>
                <td style="width: .45in; border: solid windowtext 1.0pt; border-top: none; mso-border-top-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="43">
                    4.</td>
                <td style="width: 4.5in; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-top-alt: solid windowtext .5pt; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="432">
                    <span data-scayt_word="Daftar" data-scaytid="360">Daftar</span>&nbsp;<span data-scayt_word="aset" data-scaytid="368">aset</span> <span data-scayt_word="dan" data-scaytid="361">dan</span> <span data-scayt_word="investasi" data-scaytid="370">investasi</span>
                </td>
                <td style="width: 1.0in; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-top-alt: solid windowtext .5pt; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="96">&nbsp;
                </td>
                <td style="width: 67.5pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-top-alt: solid windowtext .5pt; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="90">
                    <a href="http://bpkad.banyuwangikab.go.id/utama/index.php/Aset/index" target="_blank">VIEW</a>
                </td>
            </tr>
            <tr>
                <td style="width: .45in; border: solid windowtext 1.0pt; border-top: none; mso-border-top-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="43">
                    <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify;">
                        <strong><span style="font-size:12px;">E</span></strong>
                    </p>
                </td>
                <td style="width: 4.5in; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-top-alt: solid windowtext .5pt; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="432">
                    <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify;">
                        <strong><span style="font-size:12px;"><span data-scayt_word="Ringkasan" data-scaytid="362">Ringkasan</span> <span data-scayt_word="laporan" data-scaytid="363">laporan</span> <span data-scayt_word="akses" data-scaytid="373">akses</span> <span data-scayt_word="Informasi" data-scaytid="364">Informasi</span> <span data-scayt_word="Publik" data-scaytid="365">Publik</span></span></strong>
                    </p>
                </td>
                <td style="width: 1.0in; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-top-alt: solid windowtext .5pt; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="96">
                    <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify;">
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
                <td style="width: 67.5pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-top-alt: solid windowtext .5pt; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="90">
                    <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify;">
                        <a href="http://ppid.banyuwangikab.go.id/home/laporan_akses_informasi" target="_blank">VIEW</a>
                    </p>
                </td>
            </tr>
            <tr>
                <td style="width: .45in; border: solid windowtext 1.0pt; border-top: none; mso-border-top-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="43">
                    <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify;">
                        <strong><span style="font-size:12px;">F</span></strong>
                    </p>
                </td>
                <td style="width: 4.5in; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-top-alt: solid windowtext .5pt; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="432">
                    <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify;">
                        <strong><span style="font-size:12px;"><span data-scayt_word="Informasi" data-scaytid="376">Informasi</span> <span data-scayt_word="tentang" data-scaytid="378">tentang</span> <span data-scayt_word="peraturan" data-scaytid="398">peraturan</span>, <span data-scayt_word="keputusan" data-scaytid="400">keputusan</span>, <span data-scayt_word="dan" data-scaytid="380">dan</span>/<span data-scayt_word="atau" data-scaytid="382">atau</span> <span data-scayt_word="kebijakan" data-scaytid="405">kebijakan</span> <span data-scayt_word="yangmengikat" data-scaytid="407">yang mengikat</span> <span data-scayt_word="dan" data-scaytid="381">dan</span>/<span data-scayt_word="atau" data-scaytid="383">atau</span> <span data-scayt_word="berdampak" data-scaytid="408">berdampak</span> <span data-scayt_word="bagi" data-scaytid="384">bagi</span> publik yang <span data-scayt_word="dikeluarkan" data-scaytid="410">dikeluarkan</span> <span data-scayt_word="oleh" data-scaytid="385">oleh</span> <span data-scayt_word="Badan" data-scaytid="386">Badan</span> <span data-scayt_word="Publik" data-scaytid="387">Publik</span></span></strong>
                    </p>
                </td>
                <td style="width: 1.0in; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-top-alt: solid windowtext .5pt; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="96">
                    <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify;"><span data-scayt_word="Informasi" data-scaytid="377">Informasi</span> <span data-scayt_word="tentang" data-scaytid="379">tentang</span>&nbsp;<span data-scayt_word="peraturan" data-scaytid="399">peraturan</span>/<span data-scayt_word="kebijakan" data-scaytid="406">kebijakan</span> yang <span data-scayt_word="dikeluarkan" data-scaytid="411">dikeluarkan</span>&nbsp;<span data-scayt_word="Pemerintah" data-scaytid="388">Pemerintah</span> <span data-scayt_word="Provinsi" data-scaytid="389">Kabupaten</span> <span data-scayt_word="Timur" data-scaytid="391">Banyuwangi</span></p>
                </td>
                <td style="width: 67.5pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-top-alt: solid windowtext .5pt; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="90">
                    <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify;">
                        <a href="http://jdih.banyuwangikab.go.id/" target="_blank">VIEW</a>
                    </p>
                </td>
            </tr>
            <tr>
                <td style="width: .45in; border: solid windowtext 1.0pt; border-top: none; mso-border-top-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="43">
                    <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify;">
                        <strong><span style="font-size:12px;">G</span></strong>
                    </p>
                </td>
                <td style="width: 4.5in; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-top-alt: solid windowtext .5pt; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="432">
                    <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify;">
                        <strong><span style="font-size:12px;"><span data-scayt_word="Informasi" data-scaytid="424">Informasi</span> <span data-scayt_word="tentang" data-scaytid="425">tentang</span> <span data-scayt_word="hak" data-scaytid="426">hak</span> <span data-scayt_word="dan" data-scaytid="427">dan</span> <span data-scayt_word="tata" data-scaytid="436">tata</span> <span data-scayt_word="cara" data-scaytid="438">cara</span> <span data-scayt_word="memperoleh" data-scaytid="440">memperoleh</span> <span data-scayt_word="informasi" data-scaytid="429">informasi</span>, <span data-scayt_word="serta" data-scaytid="430">serta</span> <span data-scayt_word="tata" data-scaytid="437">tata</span> <span data-scayt_word="cara" data-scaytid="439">cara</span> <span data-scayt_word="pengajuan" data-scaytid="443">pengajuan</span> <span data-scayt_word="keberatan" data-scaytid="444">keberatan</span> <span data-scayt_word="dan" data-scaytid="428">dan</span> <span data-scayt_word="proses" data-scaytid="445">proses</span> <span data-scayt_word="penyelesaian" data-scaytid="446">penyelesaian</span> <span data-scayt_word="sengketa" data-scaytid="447">sengketa</span></span></strong>
                    </p>
                </td>
                <td style="width: 1.0in; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-top-alt: solid windowtext .5pt; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="96">
                    <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify;">
                        <span style="font-size:12px;">&nbsp;</span>
                    </p>
                </td>
                <td style="width: 67.5pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-top-alt: solid windowtext .5pt; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="90">
                    <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify;">
                        <a href="http://ppid.banyuwangikab.go.id/home/ppid_sop_kabupaten" target="_blank">VIEW</a>
                    </p>
                </td>
            </tr>
            <tr>
                <td style="width: .45in; border: solid windowtext 1.0pt; border-top: none; mso-border-top-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="43">
                    <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify;">
                        <strong><span style="font-size:12px;">H</span></strong>
                    </p>
                </td>
                <td style="width: 4.5in; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-top-alt: solid windowtext .5pt; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="432">
                    <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify;">
                        <strong><span style="font-size:12px;"><span data-scayt_word="Informasi" data-scaytid="448">Informasi</span> <span data-scayt_word="tentang" data-scaytid="450">tentang</span> <span data-scayt_word="tata" data-scaytid="452">tata</span> <span data-scayt_word="cara" data-scaytid="453">cara</span> <span data-scayt_word="pengaduan" data-scaytid="469">pengaduan</span> <span data-scayt_word="penyalahgunaan" data-scaytid="471">penyalahgunaan</span> <span data-scayt_word="wewenang" data-scaytid="473">wewenang</span> <span data-scayt_word="atau" data-scaytid="454">atau</span> <span data-scayt_word="pelanggaran" data-scaytid="477">pelanggaran</span> yang <span data-scayt_word="dilakukan" data-scaytid="478">dilakukan</span> <span data-scayt_word="baik" data-scaytid="480">baik</span> <span data-scayt_word="oleh" data-scaytid="456">oleh</span> <span data-scayt_word="pejabat" data-scaytid="457">pejabat</span> <span data-scayt_word="Badan" data-scaytid="458">Badan</span> <span data-scayt_word="Publik" data-scaytid="460">Publik</span> <span data-scayt_word="maupun" data-scaytid="462">maupun</span> <span data-scayt_word="pihak" data-scaytid="488">pihak</span> yang <span data-scayt_word="mendaptkan" data-scaytid="489">mendapatkan</span> <span data-scayt_word="izin" data-scaytid="490">izin</span> <span data-scayt_word="atau" data-scaytid="455">atau</span> <span data-scayt_word="perjanjian" data-scaytid="491">perjanjian</span> <span data-scayt_word="kerja" data-scaytid="492">kerja</span> <span data-scayt_word="dari" data-scaytid="493">dari</span> <span data-scayt_word="Badan" data-scaytid="459">Badan</span> <span data-scayt_word="Publik" data-scaytid="461">Publik</span> yang <span data-scayt_word="bersangkutan" data-scaytid="494">bersangkutan</span></span></strong>
                    </p>
                </td>
                <td style="width: 1.0in; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-top-alt: solid windowtext .5pt; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="96">
                    <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify;"><span style="font-size:12px;"></span><span data-scayt_word="Informasi" data-scaytid="449">Informasi</span> <span data-scayt_word="tentang" data-scaytid="451">tentang</span>&nbsp;<span data-scayt_word="pengaduan" data-scaytid="470">pengaduan</span>&nbsp;<span data-scayt_word="penyalahgunaan" data-scaytid="472">penyalahgunaan</span> <span data-scayt_word="wewenang" data-scaytid="474">wewenang</span> yang <span data-scayt_word="dilakukan" data-scaytid="479">dilakukan</span>&nbsp;<span data-scayt_word="pejabat" data-scaytid="495">pejabat</span> <span data-scayt_word="di" data-scaytid="506">di</span> <span data-scayt_word="lingkungan" data-scaytid="507">lingkungan</span> <span data-scayt_word="Pemerintah" data-scaytid="496">Pemerintah</span> <span data-scayt_word="Provinsi" data-scaytid="497">Kabupaten</span>&nbsp;<span data-scayt_word="Jawa" data-scaytid="499">Banyuwangi</span> <span data-scayt_word="tersedia" data-scaytid="503">tersedia</span>&nbsp;<span data-scayt_word="pada" data-scaytid="504">pada</span> website <span data-scayt_word="inspektorat" data-scaytid="517">inspektorat</span>&nbsp;<span data-scayt_word="Provinsi" data-scaytid="498">Kabupaten</span> <span data-scayt_word="Jawa" data-scaytid="500">Banyuwangi</span></p>
                </td>
                <td style="width: 67.5pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-top-alt: solid windowtext .5pt; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="90">
                    <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify;">
                        <a href="https://www.lapor.go.id/" target="_blank">VIEW</a>
                    </p>
                </td>
            </tr>
            <tr>
                <td style="width: .45in; border: solid windowtext 1.0pt; border-top: none; mso-border-top-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="43">
                    <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify;">
                        <strong><span style="font-size:12px;">I</span></strong>
                    </p>
                </td>
                <td style="width: 4.5in; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-top-alt: solid windowtext .5pt; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="432">
                    <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify;">
                        <strong><span style="font-size:12px;"><span data-scayt_word="Informasi" data-scaytid="518">Informasi</span> <span data-scayt_word="tentang" data-scaytid="520">tentang</span> <span data-scayt_word="pengumuman" data-scaytid="533">pengumuman</span> <span data-scayt_word="pengadaan" data-scaytid="534">pengadaan</span> <span data-scayt_word="barang" data-scaytid="536">barang</span> <span data-scayt_word="dan" data-scaytid="522">dan</span> <span data-scayt_word="jasa" data-scaytid="540">jasa</span> <span data-scayt_word="sesuai" data-scaytid="524">sesuai</span> <span data-scayt_word="dengan" data-scaytid="525">dengan</span> <span data-scayt_word="peraturan" data-scaytid="526">peraturan</span> <span data-scayt_word="perundang" data-scaytid="545">perundang</span> <span data-scayt_word="undangan" data-scaytid="546">undangan</span> yang <span data-scayt_word="terkait" data-scaytid="547">terkait</span></span></strong>
                    </p>
                </td>
                <td style="width: 1.0in; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-top-alt: solid windowtext .5pt; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="96">
                    <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify;"><span data-scayt_word="Informasi" data-scaytid="519">Informasi</span> <span data-scayt_word="tentang" data-scaytid="521">tentang</span>&nbsp;<span data-scayt_word="pengadaan" data-scaytid="535">pengadaan</span> <span data-scayt_word="barang" data-scaytid="537">barang</span> <span data-scayt_word="dan" data-scaytid="523">dan</span> <span data-scayt_word="jasa" data-scaytid="541">jasa</span> <span data-scayt_word="tersedia" data-scaytid="527">tersedia</span> <span data-scayt_word="pada" data-scaytid="528">pada</span> website <span data-scayt_word="LPSE" data-scaytid="550">LPSE</span></p>
                </td>
                <td style="width: 67.5pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-top-alt: solid windowtext .5pt; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="90">
                    <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify;">
                        <a href="http://lpse.banyuwangikab.go.id/eproc4" target="_blank">VIEW</a>
                    </p>
                    <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify;">&nbsp;
                    </p>
                </td>
            </tr>
            <tr>
                <td style="width: .45in; border: solid windowtext 1.0pt; border-top: none; mso-border-top-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="43">
                    <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify;">
                        <strong><span style="font-size:12px;">J</span></strong>
                    </p>
                </td>
                <td style="width: 4.5in; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-top-alt: solid windowtext .5pt; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="432">
                    <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify;">
                        <strong><span style="font-size:12px;"><span data-scayt_word="Informasi" data-scaytid="551">Informasi</span> <span data-scayt_word="tentang" data-scaytid="553">tentang</span> <span data-scayt_word="prosedur" data-scaytid="563">prosedur</span> <span data-scayt_word="peringatan" data-scaytid="565">peringatan</span> <span data-scayt_word="dini" data-scaytid="566">dini</span> <span data-scayt_word="dan" data-scaytid="555">dan</span> <span data-scayt_word="prosedur" data-scaytid="564">prosedur</span> <span data-scayt_word="evakuasi" data-scaytid="568">evakuasi</span> <span data-scayt_word="keadaan" data-scaytid="569">keadaan</span> <span data-scayt_word="darurat" data-scaytid="570">darurat</span> <span data-scayt_word="di" data-scaytid="556">di</span> <span data-scayt_word="setiap" data-scaytid="572">setiap</span> <span data-scayt_word="kantor" data-scaytid="573">kantor</span> <span data-scayt_word="Badan" data-scaytid="557">Badan</span> <span data-scayt_word="Publik" data-scaytid="558">Publik</span></span></strong>
                    </p>
                </td>
                <td style="width: 1.0in; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-top-alt: solid windowtext .5pt; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="96">
                    <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify;"><span data-scayt_word="Informasi" data-scaytid="552">Informasi</span> <span data-scayt_word="tentang" data-scaytid="554">tentang</span>&nbsp;<span data-scayt_word="prosedur" data-scaytid="576">prosedur</span>&nbsp;<span data-scayt_word="peringatan" data-scaytid="578">peringatan</span>&nbsp;<span data-scayt_word="dini" data-scaytid="579">dini</span>&nbsp;<span data-scayt_word="dan" data-scaytid="580">dan</span>&nbsp;<span data-scayt_word="prosedur" data-scaytid="577">prosedur</span>&nbsp;<span data-scayt_word="evakuasi" data-scaytid="581">evakuasi</span></p>
                    <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify;">
                        &nbsp;<span data-scayt_word="keadaan" data-scaytid="582">keadaan</span>&nbsp;<span data-scayt_word="darurat" data-scaytid="583">darurat</span>&nbsp;<span data-scayt_word="di" data-scaytid="584">di</span>&nbsp;<span data-scayt_word="setiap" data-scaytid="586">setiap</span>&nbsp;<span data-scayt_word="kantor" data-scaytid="587">kantor</span>&nbsp;<span data-scayt_word="tersedia" data-scaytid="589">tersedia</span>&nbsp;<span data-scayt_word="di" data-scaytid="585">di</span> <span data-scayt_word="masing-masing" data-scaytid="604">masing-masing</span> <span data-scayt_word="kantor" data-scaytid="588">kantor</span></p>
                </td>
                <td style="width: 67.5pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-top-alt: solid windowtext .5pt; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="90">
                    <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify;"></p>
                    </p>
                </td>
            </tr>
        </tbody>
    </table>

    <hr />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" type="aa59a04a88d68884fe69f0db-text/javascript"></script>
    <script type="aa59a04a88d68884fe69f0db-text/javascript">
        window.jQuery || document.write('<script src="http://ppid.banyuwangikab.go.id/assets/bootstrap-3.3.7/assets/js/vendor/jquery.min.js"><\/script>')
    </script>
    <script src="http://ppid.banyuwangikab.go.id/assets/bootstrap-3.3.7/dist/js/bootstrap.min.js" type="aa59a04a88d68884fe69f0db-text/javascript"></script>
    <script src="http://ppid.banyuwangikab.go.id/assets/bootstrap-3.3.7/assets/js/docs.min.js" type="aa59a04a88d68884fe69f0db-text/javascript"></script>
    <script src="http://ppid.banyuwangikab.go.id/assets/bootstrap-3.3.7/assets/js/ie10-viewport-bug-workaround.js" type="aa59a04a88d68884fe69f0db-text/javascript"></script>
    <script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="aa59a04a88d68884fe69f0db-|49" defer=""></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"72e914f89b7b6beb","token":"067fc07fd7884bf98dd4b4bd2dae1d55","version":"2022.6.0","si":100}' crossorigin="anonymous"></script>

</body>

@endsection