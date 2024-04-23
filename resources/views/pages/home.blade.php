@extends('template.welcome')

@section('content')
    <div class="container">
        <div class="d-flex mb-3">
            <h1>МОАУ "Гимназия №8"</h1> <a href="{{route('about')}}" class="ms-auto p-2">Подробнее</a>
        </div>
        <div class="d-flex">
            <img src="{{asset('img/Gimnaziya_1_.jpg')}}" class="rounded-5">
            <div>
                <h3 class="p-3 ">Муниципальное общеобразовательное автономное учреждение "Гимназия №8 имени Льва
                    Таикешева"</h3>
                <div class="bg-body-secondary d-flex position-static mt-5 ms-2 rounded-5">
                    <img src="{{asset('/img/free-icon-graduate-5403496.png')}}" class="p-3 w-25 h-50 mx-auto" alt="">
                    <div>
                        <h5>В 2023 наши выпускники поступили в</h5>
                        <p>МАРХИ, ОГУ, МГЮУ, ФУпРРФ, РАНХиГС, ОГИИ, УГЮУ, ОГПУ, РЭУ Плеханова, МГЮА, РГПУ, КНИТУ, ОГМУ,
                            МТУСИ, СПБПУ, МГСУ, НИУ ВШЭ, ОрИПС, КГАСУ</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-3 container">
        <h3>Результаты школы</h3>
        <div class="row mt-3">
            <div class="col-lg-3">
                <h2 class="text-center">72</h2>
                <p class="text-center">Призеров муниципального, регионального и федерального этапов Всероссийской олимпиады за 3 года</p>
            </div>
            <div class="col-lg-3">
                <h2 class="text-center">7</h2>
                <p class="text-center">Выпускников с золотой медалью за 2023 год</p>
            </div>
            <div class="col-lg-3">
                <h2 class="text-center">65,26</h2>
                <p class="text-center">Средний балл на ЕГЭ в 2023 году</p>
            </div>
            <div class="col-lg-3">
                <h2 class="text-center">97%</h2>
                <p class="text-center">Выпускников поступивших в ВУЗы в 2023 году</p>
            </div>
        </div>
    </div>
    <h2 class="mt-2 container">Лица нашего учереждения</h2>
    <div class="row mt-3 mx-2">
        <div class="col-lg-3">
            <img src="{{asset('img/Bogryakova.png')}}" alt="" class="rounded-5">
            <p class="text-center">Учитель начальных классов</p>
            <h5 class="text-center">Богрякова Анастасия Алексеевна</h5>
        </div>
        <div class="col-lg-3">
            <img src="{{asset('img/Achmadeeva.png')}}" alt="" class=" rounded-5">
            <p class="text-center">Социальный педагог</p>
            <h5 class="text-center">Ахмедова Надежда Александровна</h5>
        </div>
        <div class="col-lg-3">
            <img src="{{asset('img/Ruzmanova.png')}}" alt="" class="rounded-5">
            <p class="text-center">Педагог организатор</p>
            <h5 class="text-center">Рузманова Анастсия Юрьевна</h5>
        </div>
        <div class="col-lg-3">
            <img src="{{asset('img/Komendo.png')}}" alt="" class="rounded-5">
            <p class="text-center">Учитель физики</p>
            <h5 class="text-center">Комендо Елена Анатольевна</h5>
        </div>
    </div>
@endsection
