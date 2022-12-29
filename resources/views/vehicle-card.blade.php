@extends('layouts.app')

@section('content')

    <link rel="stylesheet" href="/css/page-styles/vehicle-card.css">

    <div class="vehicle-card-container">
        <form method="post" action="{{route('updateInformation')}}">
            @csrf
            <div class="header">
                <div>
                    <div class="img-container">
                        <img src="/img/icons/vehicle-card-photo.png" alt="">
                    </div>
                    <div class="header-inputs">
                        <input type="text" value="{{$machines->vehicleName}}" id="vehicleName"  name="vehicleName" required>
                        <input type="text" value="{{$machines->vahicleType}}" id="vehicleType" name="vehicleType" required>
                    </div>
                </div>
            </div>
            <div class="vehicle-info">
                <label for="garageNumber">Гаражный номер</label>
                <input type="text" class="input" id="garageNumber" name="garageNumber" value="{{$machines->garageNumber}}" readonly required>
                <label for="vehicleVin">VIN-номер</label>
                <input type="text" class="input" id="vehicleVin" name="vehicleVin" value="{{$machines->vehicleVin}}" required>
                <label for="company">Производственная компания</label>
                <input type="text" class="input" id="company" name="company" value="{{$machines->company}}" required>
                <label for="vehicleObject">Объект</label>
                <input type="text" class="input" id="vehicleObject" name="vehicleObject" value="{{$machines->vehicleObject}}" required>
                <label for="vehicleArea">Участок</label>
                <input type="text" class="input" id="vehicleArea" name="vehicleArea" value="{{$machines->vehicleArea}}" required>
            </div>
            <button class="btn" type="submit">Применить</button>
        </form>
    </div>
@endsection
