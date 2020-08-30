@extends('product.layout')

@section('content')
<br/><br/>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Ajouter un produit </h2>
        </div>

        <div class="pull-right">
            <a class="btn btn-success" href="{{route('product.index')}}"> Retour</a>
        </div>

    </div>
</div>


<form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
@csrf

<div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <strong>Nom produit:</strong>
            <input type="text" name="product_name" class="form-control" placeholder="Nom du produit"/>
        </div>
    </div>

    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <strong>Code produit:</strong>
            <input type="text" name="product_code" class="form-control" placeholder="Code du produit"/>
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Details:</strong>
             <textarea class="form-control" style="height: 150px" name="details" placeholder="Details"></textarea>
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Image produit:</strong>
            <input type="file" name="logo"/>
        </div>
    </div>

     <div class="col-xs-12 col-sm-12 col-md-12">
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </div>

</div>

</form>


@endsection
