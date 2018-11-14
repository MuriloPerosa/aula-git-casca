@extends('adminlte::default')

@section('content')
    <div class="container-fluid ">
        <h1>Históricos</h1>

        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                   
                    <th>Data</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach($historicos as $hist)
                    <tr>
                      
                        <td>{{ $hist->data }}</td>
                        <td>
                            <a href="{{ route('historicos.edit', ['id'=>$hist->id]) }}" class="btn btn-sm btn-success">Editar</a>
                            <a href="{{ route('historicos.destroy', ['id'=>$hist->id]) }}" class="btn btn-sm btn-danger">Excluir</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection