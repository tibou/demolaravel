@extends('product.layout')

@section('content')
<br/><br/>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Liste des produits </h2>
        </div>

        <div class="pull-right">
            <a class="btn btn-success" href="{{route('create.product')}}"> Créer un nouveau produit</a>
        </div>

    </div>

</div>

    @if($message = Session::get('success'))
    <div class="alert alert-success">
        <p> {{$message}}</p>
    </div>
    @endif


    <table class="table table-bordered">
        <tr>
            <th width="150px"> Product Name </th>
            <th width="150px"> Product Code </th>
            <th width="200px"> Details </th>
            <th width="100px"> Product Logo </th>
            <th width="280px"> Action </th>
        </tr>

        @foreach($product as $pro)
        <tr>

            <td> {{$pro->product_name}} </td>
            <td>{{$pro->product_code}} </td>
            <td> {{str_limit($pro->details, $limit=70)}} </td>
            <td> <img src="{{URL::to($pro->logo)}}" height="70px;" width="80px;"/> </td>
            <td>
                <a class="btn btn-info" href="{{URL::to('show/product/'.$pro->id)}}">Show</a>
                <a class="btn btn-primary" href="{{URL::to('edit/product/'.$pro->id)}}">Edit</a>
                <a class="btn btn-danger" href="{{URL::to('delete/product/'.$pro->id)}}"
                onClick="return confirm('Are you sure ?')">Delete</a>
             </td>

        </tr>
         @endforeach
    </table>

    {!! $product->links() !!}


@endsection
