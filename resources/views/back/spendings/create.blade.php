@extends('layouts.app')
@section('content')

<div class="container col-lg-offset-1 col-lg-10">

    <h1>Viens dépenser tes sous !!!!</h1>

    <h3>Ajouter une nouvelle dépense :</h3>

    <form action="{{route('spending.store')}}" method="post">
        {{ csrf_field() }}
    <div class="form-group">
        <label for="title">Titre</label>
        <input type="text" class="form-control" name="title" id="title" placeholder="Titre" value="{{old('title')}}">
        @if($errors->has('title')) <span class="error">{{$errors->first('title')}}</span> @endif
    </div>
        <div class="form-group">
            <label for="price">Prix</label>
            <input type="text" class="form-control" name="price" id="price" placeholder="Price" value="{{old('price')}}">
            @if($errors->has('price')) <span class="error">{{$errors->first('price')}}</span> @endif
        </div>
        <div class="form-group">
            <label for="describe">Description</label>
            <input type="text" class="form-control" name="description" id="describe" placeholder="Description" value="{{old('description')}}">
            @if($errors->has('description')) <span class="error">{{$errors->first('description')}}</span> @endif
        </div>
        <div class="checkbox">
            <label>
                @foreach ($users as $id => $user)
                    <input type="checkbox" class="form-check-input" name="users[]" value="{{$id}}"
                           @if( !empty(old('users')) and in_array($id, old('users'))  )
                                checked
                            @endif>
                    <label class="form-check-label">{{$user}}</label><br>
                @endforeach
            </label>
        </div>

        <button type="submit" class="btn btn-default">En avant pour dépenser !</button>

    </form>
</div>
@endsection