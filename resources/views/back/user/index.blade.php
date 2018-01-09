@extends('layouts.app')

@section('content')
    <div class="container-fluid col-lg-offset-4 col-lg-4">
        <table class="table table-bordered table-striped">
            <caption>Liste des users</caption>
            <thead>
            <tr>
                <th>Nom</th>
                <th style="width: 100px">Avatar</th>
            </tr>
            </thead>
            <tbody>
            @foreach($pictures as $picture)
                <tr>{{-- //Faire avec les users--}}
                    <th scope="row">{{$picture->name}}</th>
                    <th class="avatar1"><img src="../images/{{$picture->link}}" alt="avatar" class="avatar img-rounded"></th>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>


@endsection
