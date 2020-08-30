@extends('product.layout')

@section('content')
<br/><br/>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Détails  produit </h2>
        </div>

        <div class="pull-right">
            <a class="btn btn-success" href="{{route('product.index')}}"> Retour</a>
        </div>

    </div>
</div>

<div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nom produit:</strong>
           {{$data->product_name}}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Code produit:</strong>
           {{$data->product_code}}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Détails produit:</strong>
           {{$data->details}}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Logo produit:</strong>
           <img src="{{URL::to($data->logo)}}" height="150px;" width="200px;"/>
        </div>
    </div>


</div>

@endsection
