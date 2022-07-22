@extends('products.layout')



@section('content')
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left" style="margin-top: 20px;">

            <h2>SOP PPID Kabupaten Banyuwangi</h2>

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
    <h6> A.1. SOP PERMOHONAN INFORMASI PUBLIK: </h6>
    <center>
        <br>
        <img src="SOP1_Kab_2016.jpg" width="70%;">
        <br>
        <img src="SOP2_Kab_2016.jpg" width="70%;">
        <br>
    </center>
    <h6> A.2. SOP KEBERATAN ATAS PEMBERIAN INFORMASI: </h6>
    <center>
        <br>
        <img src="SOP3_Kab_2016.jpg" width="70%;">
        <br>
        <img src="SOP4_Kab_2016.jpg" width="70%;">
        <br>
    </center>
    <h6> A.3. SOP PENYUSUNAN DAFTAR INFORMASI PUBLIK: </h6>
    <center>
        <br>
        <img src="1._SOP_Penyusunan_DIP_PPID.jpg" width="70%;">
        <br>
        <img src="1._Uraian_SOP_Penyusunan_DIP_PPID.jpg" width="70%;">
        <br>
    </center>
    <h6> A.4. SOP PENANGANAN SENGKETA INFORMASI PUBLIK: </h6>
    <center>
        <br>
        <img src="2._SOP_Sengketa_Informasi.jpg" width="70%;">
        <br>
        <img src="2._Uraian_SOP_Sengketa_Informasi.jpg" width="70%;">
        <br>
    </center>
    <h6> A.5. SOP UJI KONSEKUENSI INFORMASI PUBLIK: </h6>
    <center>
        <br>
        <img src="3._SOP_Informasi_Dikecualikan.jpg" width="70%;">
        <br>
        <img src="3._Uraian_SOP_Informasi_Dikecualikan.jpg" width="70%;">
        <br>
    </center>
    

</body>

@endsection