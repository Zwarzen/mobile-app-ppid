@extends('products.layout')



@section('content')
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left" style="margin-top: 20px;">

            <h2>Visi dan Misi</h2>

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
    
    <p>Visi : </p>
    <p>Terwujudnya Pelayanan Informasi yang transparan dan akuntabel untuk memenuhi hak pemohon informasi sesuai dengan ketentuan peraturan perundang-undangan yang berlaku </p>
    <p>Misi : </p>
    <ol>
        <li>Meningkatkan pengelolaan dan pelayanan informasi yang berkualitas, benar dan bertanggungjawab. </li>
        <li>Membangun dan mengembangkan kompetensi dan kualitas SDM dalam bidang pelayanan informasi. </li>
        <li>Meningkatkan dan mengembangkan kompetensi dan kualitas SDM dalam bidang pelayanan informasi.</li>
        <li>Mewujudkan keterbukaan informasi Pemerintah Kabupaten Banyuwangi dengan proses yang cepat, tepat, mudah dan sederhana. </li>
    </ol>

</body>

@endsection