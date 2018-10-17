@extends('accesory.layout')



@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Edit Product</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('accesory.index') }}"> Back</a>

            </div>

        </div>

    </div>



    @if ($errors->any())

        <div class="alert alert-danger">

            <strong>Whoops!</strong> There were some problems with your input.<br><br>

            <ul>

                @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif



    <form action="{{ route('accesory.update',$accesory->id) }}" method="POST">

        @csrf

        @method('PUT')



        <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>sku:</strong>

                <input type="text" name="sku" class="form-control" placeholder="SKU" value="{{$accesory->sku}}">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Description:</strong>

                <textarea class="form-control" style="height:150px" name="description" placeholder="Detail">{{$accesory->description}}</textarea>

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Pais:</strong>

                <input type="text" name="country" class="form-control" placeholder="Pais" value="{{$accesory->country}}">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Fabricante:</strong>

                <input type="text" name="maker" class="form-control" placeholder="Fabricante" value="{{$accesory->maker}}">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Categoria:</strong>

                <select name="accesory_type_id" class="form-control">
                    <option value="">Seleccione</option>
                    <option value="1" <?=$accesory->accesory_type_id == 1 ? ' selected="selected"' : '';?>>Luces</option>
                    <option value="2" <?=$accesory->accesory_type_id == 2 ? ' selected="selected"' : '';?>>Frenos</option>
                    <option value="3" <?=$accesory->accesory_type_id == 3 ? ' selected="selected"' : '';?>>Bocinas</option>
                    <option value="4" <?=$accesory->accesory_type_id == 4 ? ' selected="selected"' : '';?>>Canastas</option>
                    <option value="5" <?=$accesory->accesory_type_id == 5 ? ' selected="selected"' : '';?>>Asientos</option>
                </select>

            </div>

        </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <button type="submit" class="btn btn-primary">Submit</button>

            </div>

        </div>



    </form>



@endsection