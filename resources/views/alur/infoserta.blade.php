@extends('products.layout')



@section('content')
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left" style="margin-top: 20px;">

            <h2>Informasi Serta - Merta : PPID Kabupaten Banyuwangi</h2>

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
    <table border="1" id="mytable" class="tbl table-stripped" style="width: 100%;">
        <tbody>
            <tr>
                <td style="width: .45in; border: solid windowtext 1.0pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="43">
                    <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify;">
                        <span style="font-size:14px;"><span style="font-family:arial,helvetica,sans-serif;">A</span></span>
                    </p>
                </td>
                <td style="width: 4.5in; border: solid windowtext 1.0pt; border-left: none; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="432">
                    <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify;">
                        <span style="font-size:14px;"><span style="font-family:arial,helvetica,sans-serif;"><span data-scayt_word="Setiap" data-scaytid="1">Setiap</span> <span data-scayt_word="Badan" data-scaytid="2">Badan</span> <span data-scayt_word="Publik" data-scaytid="4">Publik</span> yang <span data-scayt_word="memiliki" data-scaytid="6">memiliki</span> <span data-scayt_word="kewenangan" data-scaytid="7">kewenangan</span> <span data-scayt_word="atas" data-scaytid="8">atas</span> <span data-scayt_word="suatu" data-scaytid="9">suatu</span> <span data-scayt_word="informasi" data-scaytid="10">informasi</span> yang <span data-scayt_word="dapat" data-scaytid="12">dapat</span> <span data-scayt_word="mengancamhajat" data-scaytid="13">mengancamhajat</span> <span data-scayt_word="hidup" data-scaytid="14">hidup</span> <span data-scayt_word="orang" data-scaytid="16">orang</span> <span data-scayt_word="banyak" data-scaytid="18">banyak</span> <span data-scayt_word="dan" data-scaytid="20">dan</span> <span data-scayt_word="ketertiban" data-scaytid="24">ketertiban</span> <span data-scayt_word="umum" data-scaytid="26">umum</span> <span data-scayt_word="dan" data-scaytid="21">dan</span>/<span data-scayt_word="atau" data-scaytid="28">atau</span> <span data-scayt_word="Badan" data-scaytid="3">Badan</span> <span data-scayt_word="Publik" data-scaytid="5">Publik</span> yang <span data-scayt_word="berwenang" data-scaytid="30">berwenang</span> <span data-scayt_word="memberikan" data-scaytid="31">memberikan</span> <span data-scayt_word="izin" data-scaytid="32">izin</span> <span data-scayt_word="dan" data-scaytid="22">dan</span>/<span data-scayt_word="atau" data-scaytid="29">atau</span> <span data-scayt_word="melakukan" data-scaytid="33">melakukan</span> <span data-scayt_word="perjanjian" data-scaytid="34">perjanjian</span> <span data-scayt_word="kerja" data-scaytid="35">kerja</span> <span data-scayt_word="dengan" data-scaytid="36">dengan</span> <span data-scayt_word="pihak" data-scaytid="37">pihak</span> lain yang <span data-scayt_word="kegiatannya" data-scaytid="38">kegiatannya</span> <span data-scayt_word="berpotensi" data-scaytid="39">berpotensi</span> <span data-scayt_word="mengancam" data-scaytid="40">mengancam</span> <span data-scayt_word="hajat" data-scaytid="41">hajat</span> <span data-scayt_word="hidup" data-scaytid="15">hidup</span> <span data-scayt_word="orang" data-scaytid="17">orang</span> <span data-scayt_word="banyak" data-scaytid="19">banyak</span> <span data-scayt_word="dan" data-scaytid="23">dan</span> <span data-scayt_word="ketertiban" data-scaytid="25">ketertiban</span> <span data-scayt_word="umum" data-scaytid="27">umum</span> <span data-scayt_word="wajib" data-scaytid="42">wajib</span> <span data-scayt_word="mengumumkan" data-scaytid="43">mengumumkan</span> <span data-scayt_word="informasi" data-scaytid="11">informasi</span> <span data-scayt_word="serta" data-scaytid="44">serta</span> <span data-scayt_word="merta" data-scaytid="45">merta</span>.</span></span>
                    </p>
                </td>
                <td style="width: 67.5pt; border: solid windowtext 1.0pt; border-left: none; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="90">
                    <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify;">
                        <span style="font-size:14px;"><span style="font-family:arial,helvetica,sans-serif;">&nbsp;</span></span>
                    </p>
                    <a href="http://portal.banyuwangikab.go.id/news" target="_blank">SKPD</a><br /><br />
                    <a href="http://banyuwangikab.go.id/daftar-berita-daerah.html" target="_blank">KABUPATEN</a>
                </td>
            </tr>
            <tr>
                <td style="width: .45in; border: solid windowtext 1.0pt; border-top: none; mso-border-top-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="43">
                    <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify;">
                        <span style="font-size:14px;"><span style="font-family:arial,helvetica,sans-serif;">B</span></span>
                    </p>
                </td>
                <td style="width: 4.5in; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-top-alt: solid windowtext .5pt; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="432">
                    <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify;">
                        <span style="font-size:14px;"><span style="font-family:arial,helvetica,sans-serif;"><span data-scayt_word="Informasi" data-scaytid="155">Informasi</span> yang <span data-scayt_word="dapat" data-scaytid="46">dapat</span> <span data-scayt_word="mengancam" data-scaytid="47">mengancam</span> <span data-scayt_word="hajat" data-scaytid="48">hajat</span> <span data-scayt_word="hidup" data-scaytid="49">hidup</span> <span data-scayt_word="orang" data-scaytid="50">orang</span> <span data-scayt_word="banyak" data-scaytid="51">banyak</span> <span data-scayt_word="dan" data-scaytid="52">dan</span> <span data-scayt_word="ketertiban" data-scaytid="53">ketertiban</span> <span data-scayt_word="umum" data-scaytid="54">umum</span> <span data-scayt_word="sebagaimana" data-scaytid="165">sebagaimana</span> <span data-scayt_word="dimaksud" data-scaytid="166">dimaksud</span> <span data-scayt_word="pada" data-scaytid="167">pada</span> <span data-scayt_word="ayat" data-scaytid="168">ayat</span> (1) <span data-scayt_word="meliputi" data-scaytid="169">meliputi</span> <span data-scayt_word="antara" data-scaytid="170">antara</span> lain :</span></span>
                    </p>
                    <p class="MsoListParagraphCxSpFirst" style="margin-bottom: 0.0001pt; text-align: justify; text-indent: -0.25in;">
                        <!--[if !supportLists]--> <span style="font-size:14px;"><span style="font-family:arial,helvetica,sans-serif;">1.<span style="font-stretch: normal;">&nbsp;&nbsp;</span><span data-scayt_word="Informasi" data-scaytid="171">Informasi</span> <span data-scayt_word="tentang" data-scaytid="172">tentang</span> <span data-scayt_word="bencana" data-scaytid="173">bencana</span> <span data-scayt_word="alam" data-scaytid="174">alam</span> <span data-scayt_word="seperti" data-scaytid="176">seperti</span> <span data-scayt_word="kekeringan" data-scaytid="177">kekeringan</span>, <span data-scayt_word="kebakaran" data-scaytid="178">kebakaran</span> <span data-scayt_word="hutan" data-scaytid="179">hutan</span> <span data-scayt_word="karena" data-scaytid="180">karena</span> factor <span data-scayt_word="alam" data-scaytid="175">alam</span>, <span data-scayt_word="hama" data-scaytid="181">hama</span> <span data-scayt_word="penyakit" data-scaytid="182">penyakit</span> <span data-scayt_word="tanaman" data-scaytid="183">tanaman</span>, epidemic, <span data-scayt_word="wabah" data-scaytid="184">wabah</span>, <span data-scayt_word="kejadian" data-scaytid="185">kejadian</span> <span data-scayt_word="luar" data-scaytid="187">luar</span> <span data-scayt_word="biasa" data-scaytid="188">biasa</span>, <span data-scayt_word="kejadian" data-scaytid="186">kejadian</span> <span data-scayt_word="antariksa" data-scaytid="189">antariksa</span> <span data-scayt_word="atau" data-scaytid="109">atau</span> <span data-scayt_word="benda" data-scaytid="191">benda</span> <span data-scayt_word="benda" data-scaytid="192">benda</span> <span data-scayt_word="angkasa" data-scaytid="193">angkasa</span></span></span>
                    </p>
                    <p class="MsoListParagraphCxSpMiddle" style="margin-bottom: 0.0001pt; text-align: justify; text-indent: -0.25in;">
                        <!--[if !supportLists]--> <span style="font-size:14px;"><span style="font-family:arial,helvetica,sans-serif;">2.<span style="font-stretch: normal;">&nbsp;</span><span data-scayt_word="Informasi" data-scaytid="217">Informasi</span> <span data-scayt_word="tentang" data-scaytid="218">tentang</span> <span data-scayt_word="keadaan" data-scaytid="236">keadaan</span> <span data-scayt_word="bencana" data-scaytid="219">bencana</span> non <span data-scayt_word="alam" data-scaytid="220">alam</span> <span data-scayt_word="seperti" data-scaytid="221">seperti</span> <span data-scayt_word="kegagalan" data-scaytid="240">kegagalan</span> industry <span data-scayt_word="atau" data-scaytid="222">atau</span> <span data-scayt_word="teknologi" data-scaytid="242">teknologi</span>, <span data-scayt_word="dampak" data-scaytid="243">dampak</span> industry, <span data-scayt_word="ledakan" data-scaytid="244">ledakan</span> <span data-scayt_word="nuklir" data-scaytid="245">nuklir</span>, <span data-scayt_word="pencemaran" data-scaytid="246">pencemaran</span> <span data-scayt_word="lingkungan" data-scaytid="247">lingkungan</span> <span data-scayt_word="dan" data-scaytid="223">dan</span> <span data-scayt_word="kegiatan" data-scaytid="249">kegiatan</span> <span data-scayt_word="keantariksaan" data-scaytid="250">keantariksaan</span>.</span></span>
                    </p>
                    <p class="MsoListParagraphCxSpMiddle" style="margin-bottom: 0.0001pt; text-align: justify; text-indent: -0.25in;">
                        <!--[if !supportLists]--> <span style="font-size:14px;"><span style="font-family:arial,helvetica,sans-serif;">3.<span style="font-stretch: normal;">&nbsp;&nbsp;</span><span data-scayt_word="Bencana" data-scaytid="259">Bencana</span> social <span data-scayt_word="seperti" data-scaytid="231">seperti</span> <span data-scayt_word="kerusuhan" data-scaytid="261">kerusuhan</span> social, <span data-scayt_word="konflik" data-scaytid="262">konflik</span> social <span data-scayt_word="antar" data-scaytid="263">antar</span> <span data-scayt_word="kelompok" data-scaytid="265">kelompok</span> <span data-scayt_word="atau" data-scaytid="232">atau</span> <span data-scayt_word="antar" data-scaytid="264">antar</span> <span data-scayt_word="komunitas" data-scaytid="267">komunitas</span> <span data-scayt_word="masyarakat" data-scaytid="268">masyarakat</span> <span data-scayt_word="dan" data-scaytid="233">dan</span> terror</span></span>
                    </p>
                    <p class="MsoListParagraphCxSpMiddle" style="margin-bottom: 0.0001pt; text-align: justify; text-indent: -0.25in;">&nbsp;</p>
                    <p class="MsoListParagraphCxSpMiddle" style="margin-bottom: 0.0001pt; text-align: justify; text-indent: -0.25in;">
                        <!--[if !supportLists]--> <span style="font-size:14px;"><span style="font-family:arial,helvetica,sans-serif;">4.<span style="font-stretch: normal;">&nbsp;&nbsp;&nbsp;</span><span data-scayt_word="Informasi" data-scaytid="254">Informasi</span> <span data-scayt_word="tentang" data-scaytid="255">tentang</span> <span data-scayt_word="jenis" data-scaytid="287">jenis</span>, <span data-scayt_word="persebaran" data-scaytid="288">persebaran</span> <span data-scayt_word="dan" data-scaytid="256">dan</span> <span data-scayt_word="daerah" data-scaytid="290">daerah</span> yang <span data-scayt_word="menjadi" data-scaytid="291">menjadi</span> <span data-scayt_word="sumber" data-scaytid="292">sumber</span> <span data-scayt_word="penyakit" data-scaytid="257">penyakit</span> yang <span data-scayt_word="berpotensi" data-scaytid="258">berpotensi</span> <span data-scayt_word="menular" data-scaytid="295">menular</span></span></span>
                    </p>
                    <p class="MsoListParagraphCxSpMiddle" style="margin-bottom: 0.0001pt; text-align: justify; text-indent: -0.25in;">&nbsp;</p>
                    <p class="MsoListParagraphCxSpMiddle" style="margin-bottom: 0.0001pt; text-align: justify; text-indent: -0.25in;">
                        <!--[if !supportLists]--> <span style="font-size:14px;"><span style="font-family:arial,helvetica,sans-serif;">5.<span style="font-stretch: normal;">&nbsp; &nbsp;</span><span data-scayt_word="Informasi" data-scaytid="275">Informasi</span> <span data-scayt_word="tentang" data-scaytid="277">tentang</span> <span data-scayt_word="racun" data-scaytid="310">racun</span> <span data-scayt_word="pada" data-scaytid="279">pada</span> <span data-scayt_word="baan" data-scaytid="312">bahan</span> <span data-scayt_word="makanan" data-scaytid="313">makanan</span> yang <span data-scayt_word="dikonsumsi" data-scaytid="314">dikonsumsi</span> <span data-scayt_word="oleh" data-scaytid="315">oleh</span> <span data-scayt_word="masyarakat" data-scaytid="280">masyarakat</span>, <span data-scayt_word="dan" data-scaytid="281">dan</span>/<span data-scayt_word="atau" data-scaytid="282">atau</span></span></span>
                    </p>
                    <p class="MsoListParagraphCxSpLast" style="margin-bottom: 0.0001pt; text-align: justify; text-indent: -0.25in;">
                        <!--[if !supportLists]--> <span style="font-size:14px;"><span style="font-family:arial,helvetica,sans-serif;">6.<span style="font-stretch: normal;">&nbsp; &nbsp;</span><span data-scayt_word="Informasi" data-scaytid="276">Informasi</span> <span data-scayt_word="tentang" data-scaytid="278">tentang</span> <span data-scayt_word="rencana" data-scaytid="319">rencana</span> <span data-scayt_word="gangguan" data-scaytid="320">gangguan</span> <span data-scayt_word="terhadap" data-scaytid="321">terhadap</span> <span data-scayt_word="utilitas" data-scaytid="322">utilitas</span> <span data-scayt_word="publik" data-scaytid="323">publik</span></span></span>
                    </p>
                </td>
                <td style="width: 67.5pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-top-alt: solid windowtext .5pt; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="90">
                    <p>
                        <strong><span data-scayt_word="Bencana" data-scaytid="283">Bencana</span> <span data-scayt_word="alam" data-scaytid="284">alam</span>:</strong>
                    </p>
                    <a href="http://bpbd.banyuwangikab.go.id/" target="_blank">BPBD / </a><br />
                    <a href="http://dinkes.banyuwangikab.go.id/portal/informasi-virus-corona-covid-19/" target="_blank">Panduan Info Corona </a><br />
                    <br />
                    <a href="http://www.meteobanyuwangi.info/hari_ini.html" target="_blank">BMKG</a><br /><br />
                    <p>
                        <strong><span data-scayt_word="Penyakit" data-scaytid="330">Penyakit</span>&nbsp;:</strong>
                    </p>
                    <a href="http://dinkes.banyuwangikab.go.id/" target="_blank">DINKES /</a> <br />
                    <a href="https://corona.banyuwangikab.go.id/#peta-sebaran" target="_blank">Peta Sebaran Corona</a> <br />
                </td>
            </tr>
            <tr>
                <td style="width: .45in; border: solid windowtext 1.0pt; border-top: none; mso-border-top-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="43">
                    <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify;">
                        <span style="font-size:14px;"><span style="font-family:arial,helvetica,sans-serif;">C</span></span>
                    </p>
                </td>
                <td style="width: 4.5in; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-top-alt: solid windowtext .5pt; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="432">
                    <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify;">
                        <span style="font-size:14px;"><span style="font-family:arial,helvetica,sans-serif;"><span data-scayt_word="Standar" data-scaytid="373">Standar</span> <span data-scayt_word="pengumuman" data-scaytid="374">pengumuman</span> <span data-scayt_word="informasi" data-scaytid="341">informasi</span> <span data-scayt_word="sebagaimana" data-scaytid="342">sebagaimana</span> <span data-scayt_word="dimaksud" data-scaytid="343">dimaksud</span> <span data-scayt_word="pada" data-scaytid="344">pada</span> <span data-scayt_word="ayat" data-scaytid="345">ayat</span> (1) <span data-scayt_word="sekurang" data-scaytid="380">sekurang</span> <span data-scayt_word="kurang" data-scaytid="381">kurang</span>&nbsp;&nbsp;<span data-scayt_word="meliputi" data-scaytid="346">meliputi</span> :</span></span>
                    </p>
                    <p class="MsoListParagraphCxSpFirst" style="margin-bottom: 0.0001pt; text-align: justify; text-indent: -0.25in;">
                        <!--[if !supportLists]--> <span style="font-size:14px;"><span style="font-family:arial,helvetica,sans-serif;">1.<span style="font-stretch: normal;">&nbsp;</span><span data-scayt_word="Potensi" data-scaytid="405">Potensi</span> <span data-scayt_word="bahaya" data-scaytid="406">bahaya</span> <span data-scayt_word="dan" data-scaytid="354">dan</span>/<span data-scayt_word="atau" data-scaytid="356">atau</span> <span data-scayt_word="besaran" data-scaytid="411">besaran</span> <span data-scayt_word="dampak" data-scaytid="358">dampak</span> yang <span data-scayt_word="dapat" data-scaytid="360">dapat</span> <span data-scayt_word="ditimbulkan" data-scaytid="415">ditimbulkan</span></span></span>
                    </p>
                    <p class="MsoListParagraphCxSpMiddle" style="margin-bottom: 0.0001pt; text-align: justify; text-indent: -0.25in;">
                        <!--[if !supportLists]--> <span style="font-size:14px;"><span style="font-family:arial,helvetica,sans-serif;">2.<span style="font-stretch: normal;">&nbsp; </span><span data-scayt_word="Pihak" data-scaytid="416">Pihak</span> <span data-scayt_word="pihak" data-scaytid="361">pihak</span> yang <span data-scayt_word="berpotensi" data-scaytid="362">berpotensi</span> <span data-scayt_word="terkena" data-scaytid="419">terkena</span> <span data-scayt_word="dampak" data-scaytid="359">dampak</span> <span data-scayt_word="baik" data-scaytid="420">baik</span> <span data-scayt_word="masyarakat" data-scaytid="363">masyarakat</span> <span data-scayt_word="umummaupun" data-scaytid="422">umummaupun</span> <span data-scayt_word="pegawai" data-scaytid="423">pegawai</span> <span data-scayt_word="Badan" data-scaytid="364">Badan</span> <span data-scayt_word="Publik" data-scaytid="366">Publik</span> yang <span data-scayt_word="menerima" data-scaytid="428">menerima</span> <span data-scayt_word="ijin" data-scaytid="429">ijin</span> <span data-scayt_word="atau" data-scaytid="357">atau</span> <span data-scayt_word="perjanjian" data-scaytid="368">perjanjian</span> <span data-scayt_word="kerja" data-scaytid="369">kerja</span> <span data-scayt_word="dari" data-scaytid="432">dari</span> <span data-scayt_word="Badan" data-scaytid="365">Badan</span> <span data-scayt_word="Publik" data-scaytid="367">Publik</span> <span data-scayt_word="tersebut" data-scaytid="433">tersebut</span></span></span>
                    </p>
                    <p class="MsoListParagraphCxSpMiddle" style="margin-bottom: 0.0001pt; text-align: justify; text-indent: -0.25in;">
                        <!--[if !supportLists]--> <span style="font-size:14px;"><span style="font-family:arial,helvetica,sans-serif;">3. &nbsp;<span data-scayt_word="Prosedur" data-scaytid="434">Prosedur</span> <span data-scayt_word="dan" data-scaytid="355">dan</span> <span data-scayt_word="tempat" data-scaytid="435">tempat</span> <span data-scayt_word="avakuasi" data-scaytid="436">evakuasi</span> <span data-scayt_word="apabila" data-scaytid="437">apabila</span> <span data-scayt_word="keadaan" data-scaytid="370">keadaan</span> <span data-scayt_word="darurat" data-scaytid="439">darurat</span> <span data-scayt_word="terjadi" data-scaytid="440">terjadi</span></span></span>
                    </p>
                    <p class="MsoListParagraphCxSpMiddle" style="margin-bottom: 0.0001pt; text-align: justify; text-indent: -0.25in;">
                        <!--[if !supportLists]--> <span style="font-size:14px;"><span style="font-family:arial,helvetica,sans-serif;">4.<span style="font-stretch: normal;">&nbsp;&nbsp;</span>Cara <span data-scayt_word="menghindari" data-scaytid="449">menghindari</span> <span data-scayt_word="bahaya" data-scaytid="441">bahaya</span> <span data-scayt_word="dan" data-scaytid="400">dan</span>/<span data-scayt_word="atau" data-scaytid="401">atau</span> <span data-scayt_word="dampak" data-scaytid="402">dampak</span> yang <span data-scayt_word="ditimbulkan" data-scaytid="445">ditimbulkan</span></span></span>
                    </p>
                    <p class="MsoListParagraphCxSpMiddle" style="margin-bottom: 0.0001pt; text-align: justify; text-indent: -0.25in;">
                        <!--[if !supportLists]--> <span style="font-size:14px;"><span style="font-family:arial,helvetica,sans-serif;">5.<span style="font-stretch: normal;">&nbsp;&nbsp;</span>Cara <span data-scayt_word="mendapatkan" data-scaytid="455">mendapatkan</span> <span data-scayt_word="bantuan" data-scaytid="456">bantuan</span> <span data-scayt_word="dari" data-scaytid="446">dari</span> <span data-scayt_word="pihak" data-scaytid="403">pihak</span> yang <span data-scayt_word="berwenang" data-scaytid="404">berwenang</span></span></span>
                    </p>
                    <p class="MsoListParagraphCxSpMiddle" style="margin-bottom: 0.0001pt; text-align: justify; text-indent: -0.25in;">
                        <!--[if !supportLists]--> <span style="font-size:14px;"><span style="font-family:arial,helvetica,sans-serif;">6.<span style="font-stretch: normal;">&nbsp;</span><span data-scayt_word="Pihak" data-scaytid="460">Pihak</span> <span data-scayt_word="pihak" data-scaytid="461">pihak</span> yang <span data-scayt_word="wajib" data-scaytid="462">wajib</span> <span data-scayt_word="mengumumkan" data-scaytid="463">mengumumkan</span> <span data-scayt_word="informasi" data-scaytid="464">informasi</span> yang <span data-scayt_word="dapat" data-scaytid="465">dapat</span> <span data-scayt_word="mengancam" data-scaytid="466">mengancam</span> <span data-scayt_word="hajt" data-scaytid="511">hajt</span> <span data-scayt_word="hidup" data-scaytid="467">hidup</span> <span data-scayt_word="orang" data-scaytid="468">orang</span> <span data-scayt_word="banyak" data-scaytid="469">banyak</span> <span data-scayt_word="dan" data-scaytid="470">dan</span> <span data-scayt_word="ketertiban" data-scaytid="471">ketertiban</span> <span data-scayt_word="umum" data-scaytid="472">umum</span></span></span>
                    </p>
                    <p class="MsoListParagraphCxSpMiddle" style="margin-bottom: 0.0001pt; text-align: justify; text-indent: -0.25in;">
                        <!--[if !supportLists]--> <span style="font-size:14px;"><span style="font-family:arial,helvetica,sans-serif;">7.<span style="font-stretch: normal;">&nbsp;&nbsp;</span>Tata <span data-scayt_word="cara" data-scaytid="518">cara</span> <span data-scayt_word="pengumuman" data-scaytid="486">pengumuman</span> <span data-scayt_word="informasi" data-scaytid="487">informasi</span> <span data-scayt_word="apabuila" data-scaytid="521">apabuila</span> <span data-scayt_word="keadaan" data-scaytid="488">keadaan</span> <span data-scayt_word="darurat" data-scaytid="489">darurat</span> <span data-scayt_word="terjadi" data-scaytid="490">terjadi</span></span></span>
                    </p>
                    <p class="MsoListParagraphCxSpLast" style="margin-bottom: 0.0001pt; text-align: justify; text-indent: -0.25in;">
                        <!--[if !supportLists]--> <span style="font-size:14px;"><span style="font-family:arial,helvetica,sans-serif;">8.<span style="font-stretch: normal;">&nbsp;&nbsp;</span><span data-scayt_word="Upaya" data-scaytid="525">Upaya</span> <span data-scayt_word="upaya" data-scaytid="526">upaya</span> yang <span data-scayt_word="dilakukan" data-scaytid="527">dilakukan</span> <span data-scayt_word="oleh" data-scaytid="491">oleh</span> <span data-scayt_word="Badan" data-scaytid="492">Badan</span> <span data-scayt_word="Publik" data-scaytid="493">Publik</span> <span data-scayt_word="dan" data-scaytid="494">dan</span>/<span data-scayt_word="atau" data-scaytid="496">atau</span> <span data-scayt_word="pihak" data-scaytid="498">pihak</span> <span data-scayt_word="pihak" data-scaytid="499">pihak</span> yang <span data-scayt_word="berwenang" data-scaytid="500">berwenang</span> <span data-scayt_word="dalam" data-scaytid="538">dalam</span> <span data-scayt_word="menanggulangi" data-scaytid="539">menanggulangi</span> <span data-scayt_word="bahaya" data-scaytid="501">bahaya</span> <span data-scayt_word="dan" data-scaytid="495">dan</span>/<span data-scayt_word="atau" data-scaytid="497">atau</span> <span data-scayt_word="dampak" data-scaytid="502">dampak</span> yang <span data-scayt_word="ditimbulkan" data-scaytid="503">ditimbulkan</span></span></span>
                    </p>
                </td>
                <td style="width: 67.5pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-top-alt: solid windowtext .5pt; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0in 5.4pt 0in 5.4pt;" valign="top" width="90">
                    <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify;">
                        <span style="font-size:14px;"><span style="font-family:arial,helvetica,sans-serif;">&nbsp;</span></span>
                    </p>
                    <a href="http://bpbd.banyuwangikab.go.id/peta" target="_blank">BPBD</a>
                </td>
            </tr>
        </tbody>
    </table>
</body>

@endsection