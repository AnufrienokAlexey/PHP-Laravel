@extends('layouts.default')

@section('content')
    @if (!empty($email))
    <div class="wrapper" style="background-color: #cc99cd">
        <p>Ваша электронная почта <?= $email?></p>
    </div>
    @else
        <div class="wrapper" style="background-color: #e53e3e">
            <p>Вы не указали адрес электронной почты!</p>
        </div>
    @endif
@stop
