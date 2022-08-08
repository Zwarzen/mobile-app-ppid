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

            <h2>Admin Pusat PPID Kabupaten</h2>

        </div>
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