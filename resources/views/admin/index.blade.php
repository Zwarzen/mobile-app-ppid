@extends('products.layout')

@section('content')
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<style>
    @media screen and (max-width: 500px) {
        .button-text {
            display: none;
        }
    }
</style>


<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left" style="margin-top: 20px;">
<<<<<<< HEAD
            <h2>Admin PPID KOMINFO Banyuwangi</h2>

=======

            <h2>Admin PPID Kabupaten</h2>

>>>>>>> d37c02d1560973aae71886585f46dba1659d568a
        </div>
        <form action="/logout" method="POST" style="margin-top: 20px;">
            @csrf
            <div class="col-lg-20 margin-tb" >
                <div class="pull-right" style="margin-top: 20px;">
                <button type="submit" class="btn btn-danger">
                    <i class="material-icons">logout</i>
                    <span class="button-text">Keluar</span>
                </button>
                </div>
            </div>
        </form>
        <form  style="margin-top: 20px;">
            @csrf
            <div class="col-lg-20 margin-tb" >
                <div class="pull-right" style="margin-top: 20px;">
                    <button type="submit" class="btn btn-info">
                        <i class="material-icons">web</i>
                        <span class="button-text"><a href="{{ url('kominfoadmin') }}" style="text-decoration: none;">KOMINFO</a></span>
                    </button>
                </div>
            </div>
        </form>
        <form action="#" method="POST" style="margin-top: 20px;">
            @csrf
            <div class="col-lg-20 margin-tb" >
                <div class="pull-right" style="margin-top: 20px;">
                    <button type="submit" class="btn btn-success">
                        <i class="material-icons">web</i>
                        <span class="button-text"><a href="{{ url('ppidadmin') }}" style="text-decoration: none;">PPID</a></span>
                    </button>
                </div>
            </div>
        </form>
        <form action="admin" method="POST" style="margin-top: 20px;">
            @csrf
            <div class="col-lg-20 margin-tb" >
                <div class="pull-right" style="margin-top: 20px;">
                    <button type="submit" class="btn btn-secondary">
                        <i class="material-icons">web</i>
                        <span class="button-text" style="margin: 10px;"><a href="{{ url('admin') }}" style="text-decoration: none;">All</a></span>
                    </button>
                </div>
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
                    <i class="material-icons" >visibility</i>
                    <span class="button-text" >Detail</span>
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