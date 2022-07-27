@extends('products.layout')



@section('content')
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left" style="margin-top: 20px;">

            <h2>Pedoman Umum</h2>

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

    <p>Maklumat Pelayanan Informasi Publik</p>
    <center><iframe src="Maklumat Pelayanan Informasi Publik.pdf" width="100%" height="600px;"></center>
    
    <p>Pertimbangan Tertulis</p>
    <center><iframe src="Pertimbangan Tertulis.pdf" width="100%" height="600px;"></iframe></center> 
    <br>

    <p>Pertimbangan Tertulis</p>
    <center><iframe src="Pertimbangan Tertulis.pdf" width="100%" height="600px;"></iframe></center>
    <br>

    <p>Regulasi : </p>
    <center><iframe src="3._Perkip_No.1_2013.pdf" width="100%" height="600px;"></iframe></center>
    <br>
    <center><iframe src="2._Perkip_No.1_Tahun_2010.pdf" width="100%" height="600px;"></iframe></center>
    <br>
    <center><iframe src="4._PP_No.61_Tahun_2010.pdf" width="100%" height="600px;"></iframe></center>
    <br>
    <center><iframe src="1._UU_14_Tahun_2008.pdf" width="100%" height="600px;"></iframe></center>

</body>

@endsection