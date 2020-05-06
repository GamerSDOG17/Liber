@extends('layouts.app-admin')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Professores para validar</h2>
                <a href="{{ route('admin.index.deletado')}}">Deletados</a>
            </div>
        </div>
    </div>
   
    <table class="table table-bordered">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Ação</th>
        </tr>
        @foreach ($professor as $professorI)
        <tr>
            <td>{{ $professorI->name }}</td>
            <td>{{ $professorI->email }}</td>
            <td>
                <form action="{{ route('admin.update', $professorI->id) }}" method="GET">
                    <button type='submit' name='Aceitar' value='Aceitar' class="btn btn-sucess">Aceitar</button>
                    <button type='submit' name='Delete' value='Delete' class="btn btn-sucess">Deletar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $professor->links() !!}
      
@endsection