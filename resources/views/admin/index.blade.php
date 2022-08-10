@extends('products.layout')

@section('content')
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<style>
    @media screen and (max-width: 500px) {
        .button-text {
            display: none;
        }

        .search-bar{
            max-width: 200px;
        }

        h2{
            max-width: 200px;
        }
    }
</style>


<div class="row" marg>
    <div class="col-lg-12 margin-tb">

        <div class="pull-left" style="margin-top: 20px;">

            <h2>Main Admin Pusat Banyuwangi</h2>

        </div>

        <form action="/logout" method="POST" style="margin-top: 20px;">
            @csrf
            <div class="col-lg-20 margin-tb">
                <div class="pull-right" style="margin-top: 20px;">
                    <button type="submit" class="btn btn-danger">
                        <i class="material-icons">logout</i>
                        <span class="button-text">Keluar</span>
                    </button>
                </div>
            </div>
        </form>
        <br>
        <br>
        <br>
        <br>
        {{-- <form action="/admin" >
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="search" value="{{ request('search') }}">
                <button class="btn btn-primary" type="submit">Search</button>
            </div>
            </form> --}}
            <form class="form" method="get" action="{{ route('search') }}" style="display:inline;">
                <div class="form-group" >
                    <input type="text" class="search-bar" name="search"  id="search" placeholder="Masukkan Nomor Surat/Organisasi/Nama" style="width: 350px; height: 35px;">
                    <button type="submit" class="btn btn-primary">Cari</button>
                </div>
                
            </form>

    </div>
</div>


@if ($message = Session::get('success'))

<div class="alert alert-success">

    <p>{{ $message }}</p>

</div>

@endif


<table class="table table-bordered" style="margin-top: 20px;">

    <tr>

        <th>No</th>

        <th>Nama</th>

        <th>Subjek</th>

        <th>Tujuan</th>

        <th width="280px">Action</th>

    </tr>

    @foreach ($products as $product)

    <tr>

        <td>{{ ++$i }}</td>

        <td>{{ $product->nama }}</td>

        <td>{{ $product->subjek  }}</td>

        <td>{{ $product->tujuan_skpd}}</td>

        <td>

            <form action="{{ route('products.destroy',$product->id) }}" method="POST">

                <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">
                    <i class="material-icons">visibility</i>
                    <span class="button-text">Detail</span>
                </a>

                @csrf

                @method('DELETE')

                <button type="submit" class="btn btn-danger">
                    <i class="material-icons">delete</i>
                    <span class="button-text">Hapus</span>
                </button>

            </form>

        </td>

    </tr>

    @endforeach

</table>

{!! $products->links() !!}

@endsection