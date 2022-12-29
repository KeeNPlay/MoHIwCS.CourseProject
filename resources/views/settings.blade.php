@extends('layouts.app')

@section('content')

    <link rel="stylesheet" href="/css/page-styles/settings.css">

    <div class="settings-card-container">
        <form method="post" id="submit-settings" action="/formUpdateInformationUser">
            @csrf
            <div class="header">
                <div>
                    <div class="img-container">
                        <img src="/img/icons/profile-card-photo.png" alt="">
                    </div>
                    <div class="header-inputs">
                        <input type="text" value="{{\Illuminate\Support\Facades\Auth::user()->fullName}}" name="userName" required>
                        <input type="text" value="{{\Illuminate\Support\Facades\Auth::user()->position}}" name="jobTitle" required>
                    </div>
                </div>
            </div>
            <div class="profile-info">
                <label for="eMail">E-Mail</label>
                <input type="text" class="input" id="eMail" name="eMail" value="{{\Illuminate\Support\Facades\Auth::user()->electronic_mail}}" required>
                <label for="mobileNumber">Номер телефона</label>
                <input type="text" class="input" id="mobileNumber" name="mobileNumber" value="{{\Illuminate\Support\Facades\Auth::user()->phone_number}}" required>
                <label for="company">Производственная компания</label>
                <input type="text" class="input" id="company" name="company" value="{{\Illuminate\Support\Facades\Auth::user()->company}}" required>
            </div>
            <button class="btn" type="submit" form="submit-settings">Сохранить изменения</button>
        </form>
    </div>
@endsection
