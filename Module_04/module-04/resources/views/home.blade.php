@extends('layouts.default')

@section('content')
    @if ($age > 18)
    <div class="wrapper" style="background-color: #70a6fd">
        <p>
            Ваш возвраст -
                @php
                    echo $age;
                @endphp
            лет
        </p>
{{--        Или вот так, что выглядит компактнее:--}}
        <p>Ваш возвраст - <?= $age;?> лет</p>
    </div>
    @else
        <div class="wrapper" style="background-color: #e53e3e">
            <p>Ваш возраст меньше 18 лет!</p>
        </div>
    @endif
@stop
