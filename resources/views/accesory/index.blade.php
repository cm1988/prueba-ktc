@extends('accesory.layout')



@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Accesorios bike</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('accesory.create') }}"> Create New Product</a>

            </div>

        </div>

    </div>



    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif



    <table class="table table-bordered">

        <tr>

            <th>No</th>

            <th>SKU</th>

            <th>Descripcion</th>

            <th>Pais</th>

            <th>Fabricante</th>

            <th>Categoria</th>

            <th width="280px">Action</th>

        </tr>

        @foreach ($accesory as $accesory)

            <tr>

                <td>{{ ++$i }}</td>

                <td>{{ $accesory->sku }}</td>

                <td>{{ $accesory->description }}</td>

                <td>{{ $accesory->country }}</td>

                <td>{{ $accesory->maker }}</td>

                <td><?php switch ($accesory->accesory_type_id){
                        case 1: echo 'Luces';
                        break;
                        case 2: echo 'Frenos';
                            break;
                        case 3: echo 'Bocinas';
                            break;
                        case 4: echo 'Canastas';
                            break;
                        case 5: echo 'Asientos';
                            break;

                    } ?></td>

                <td>

                    <form action="{{ route('accesory.destroy',$accesory->id) }}" method="POST">



                        <a class="btn btn-info" href="{{ route('accesory.show',$accesory->id) }}">Show</a>

                        <a class="btn btn-primary" href="{{ route('accesory.edit',$accesory->id) }}">Edit</a>



                        @csrf

                        @method('DELETE')




                        <button type="submit" class="btn btn-danger">Delete</button>

                    </form>

                </td>

            </tr>

        @endforeach

    </table>






@endsection