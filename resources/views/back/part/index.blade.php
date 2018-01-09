@extends('layouts.app')

@section('content')
    <div class="container-fluid col-lg-offset-4 col-lg-4">
        {{$users->links()}}
        <ul>
            <li>Total des Dépenses : {{$totalSpending}} &euro;</li>
            <li>Total des  parts : {{$pricePart}} parts</li>
        </ul>
        <table class="table table-bordered table-striped">
            <caption>Balance</caption>
            <thead>
            <tr>
                <th>Nom</th>
                <th>Nombre de part</th>
                <th>PriceStay</th>
                <th>PriceDébit</th>
                <th>PriceCrédit</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>{{-- //Faire avec les users--}}
                    @php
                        $priceStay = round($pricePart*$user->part->day, 2);
                        $priceDebit =  $user->spendings()->sum('spending_user.price');
                    @endphp
                    <th scope="row">{{$user->name}}</th>
                    <th>{{$user->part->day}}</th>
                    <th>{{$priceStay}} &euro;</th>
                    <th>{{$priceDebit}} &euro;</th>
                    <th>{{$priceStay - $priceDebit}} &euro;</th>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{$users->links()}}
    </div>


@endsection
