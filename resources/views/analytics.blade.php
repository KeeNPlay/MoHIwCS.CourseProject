@extends('layouts.app')

@section('content')

    <link rel="stylesheet" href="/css/page-styles/analytics.css">

    <div class="title">
        <h2>{{$companyName}}</h2>
    </div>
    <div class="analytics">
        <div class="analytic-cards">
            <div class="card">
                <span class="title">Количество техники в автопарке</span>
                <span class="number">{{$countMachines}}</span>
            </div>
            <div class="card">
                <span class="title">Количество техники в рейсе</span>
                <span class="number">{{$CountMachinesAtWork}}</span>
            </div>
            <div class="card">
                <span class="title">Количество техники на текущем ремонте</span>
                <span class="number">{{$CountMachinesUnderOngoingRenovation}}</span>
            </div>
            <div class="card">
                <span class="title">Количество техники в простое без водителя</span>
                <span class="number">{{$CountMachinesNotDriver}}</span>
            </div>
            <div class="card">
                <span class="title">Количество техники в технолог. простое</span>
                <span class="number">{{$CountMachinesTechnologistSimple}}</span>
            </div>
            <div class="card">
                <span class="title">Количество техники в перебазировке</span>
                <span class="number">{{$CountMachinesRelocation}}</span>
            </div>
            <div class="card">
                <span class="title">Количество техники на хранении (испр.)</span>
                <span class="number">{{$CountMachinesInStorageIsp}}</span>
            </div>
            <div class="card">
                <span class="title">Количество техники на хранении (не испр.)</span>
                <span class="number">{{$CountMachinesInStorageNotIsp}}</span>
            </div>
        </div>
        <div class="statistical-analytic">
            <div class="title">
                <h3>Статистический анализ</h3>
            </div>
            <div class="statistical-analytic-content">
                <div class="statistical-analytic-item">
                    <span class="statistical-analytic-item-title">Использование техники в среднем (часов в сутки): </span>
                    <span class="statistical-analytic-item-number">{{$AverageUseOfTechnology}}</span>
                </div>
                <div class="statistical-analytic-item">
                    <span class="statistical-analytic-item-title">Средний показатель использования техники (часов за 1 смену): </span>
                    <span class="statistical-analytic-item-number">{{$AverageUseOfTechnology1}}</span>
                </div>
                <div class="statistical-analytic-item">
                    <span class="statistical-analytic-item-title">Средний показатель использования техники (часов за 2 смену): </span>
                    <span class="statistical-analytic-item-number">{{$AverageUseOfTechnology2}}</span>
                </div>
                <div class="statistical-analytic-item">
                    <span class="statistical-analytic-item-title">Коэффицент технической готовности: </span>
                    <span class="statistical-analytic-item-number">{{$TechnicalReadinessFactor}}</span>
                </div>
                <div class="statistical-analytic-item">
                    <span class="statistical-analytic-item-title">Средний простой с выключенным двигателем (часов в сутки): </span>
                    <span class="statistical-analytic-item-number">{{$AverageIdleWithEngineOff}}</span>
                </div>
                <div class="statistical-analytic-item">
                    <span class="statistical-analytic-item-title">Среднее время работы двигателя на холостом ходу (часов в сутки): </span>
                    <span class="statistical-analytic-item-number">{{$AverageEngineIdlingTime}}</span>
                </div>
            </div>
        </div>
    </div>

@endsection
