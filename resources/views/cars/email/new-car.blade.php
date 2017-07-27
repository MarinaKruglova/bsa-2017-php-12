@extends('cars.email.base')

@section('title', $car['model'])

@section('content')
    <div class="row">
        <div class="col-md-12 main">
            <div class="card mb-3">
                <div class="card-block">
                    <h4 class="card-title">{{ $car['model'] }}</h4>
                    <p class="card-text">
                        <ul>
                            <li>Model: {{ $car['model'] }}</li>
                            <li>Year: {{ $car['year'] }}</li>
                            <li>Registration number: {{ $car['registration_number'] }}</li>
                            <li>Color: {{ $car['color'] }}</li>
                            <li>Price: {{ $car['price'] }}</li>
                            <li>Mileag: {{ $car['milage'] }}</li>
                        </ul>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection