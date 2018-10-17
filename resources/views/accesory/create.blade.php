@extends('accesory.layout')



@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Agregar nuevo producto</h2>

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



<form action="{{ route('accesory.store') }}" method="POST">

    @csrf



    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>sku:</strong>

                <input type="text" name="sku" class="form-control" placeholder="SKU">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Description:</strong>

                <textarea class="form-control" style="height:150px" name="description" placeholder="Detail"></textarea>

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Pais:</strong>

                <input type="text" name="country" class="form-control" placeholder="Pais">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Fabricante:</strong>

                <input type="text" name="maker" class="form-control" placeholder="Fabricante">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Categoria:</strong>

                <select name="accesory_type_id" class="form-control">
                    <option value="">Seleccione</option>
                    <option value="1">Luces</option>
                    <option value="2">Frenos</option>
                    <option value="3">Bocinas</option>
                    <option value="4">Canastas</option>
                    <option value="5">Asientos</option>
                </select>

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

            <button type="submit" class="btn btn-primary">Submit</button>

        </div>

    </div>



</form>



@endsection