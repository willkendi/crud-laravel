@extends('templates.template')

@section('content')
<h1 class="text-center">@if(isset($book))Editar @else Cadastrar @endif</h1>

<div class="col-8 m-auto">
    @if(isset($book))
    <form name="formEdit" id="formCad" method="POST" action="{{url("books/$book->id")}}">
    @method('PUT')
    @else

    <form name="formCad" id="formCad" method="POST" action="{{url('books')}}">
        @endif
        @csrf
        <input class="form-control" type="text" name="title" id="title" placeholder="Título:" value="{{$book->title ?? ''}}"><br>
        <select class="form-control" type="id_user" name="id_user" id="id_user">
            <option value="{{$book->relUsers->id ?? ''}}">{{$book->relUsers->name ?? ''}}</option>
            @foreach($users as $user)
            <option value="{{$user->id}}">{{$user->name}}</option>
            @endforeach
        </select><br>
        <input class="form-control" type="text" name="pages" id="pages" placeholder="Páginas:" value="{{$book->pages ?? ''}}"><br>
        <input class="form-control" type="text" name="price" id="price" placeholder="Preço:" value="{{$book->price ?? ''}}"><br>
        <input class="btn btn-primary" type="submit" value="@if(isset($book))Editar  @else Cadastrar @endif"><br>
    </form>

</div>
@endsection