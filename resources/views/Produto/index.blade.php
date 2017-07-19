@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Produtos</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('produto.create') }}"> Adicionar Produto</a>
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
            <th>Name</th>
            <th>Preço</th>
            <th width="280px">Ação</th>
        </tr>
    @foreach ($produtos as $produto)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $produto->produto}}</td>
        <td>{{ $produto->valor}}</td>
        <td>
            <a class="btn btn-info" href="{{ route('produto.show',$produto->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('produto.edit',$produto->id) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['produto.destroy', $produto->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>
    {!! $produtos->render() !!}
 @stop