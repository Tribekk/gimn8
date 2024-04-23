@extends('template.welcome')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-7">
            <h1>О школе</h1>
            <h2>Муниципальное общеобразовательное автономное учреждение "Гимназия №8 имени Льва Таикешева"</h2>
            <h3>МОАУ "Гимназия №8"</h3>
            <p>С самого освоения гимназия становится социокультурным и образовательным центром микрорайона, так как расположена она на окраине Северного округа города Оренбурга, где практически отсутствовали культурные учреждения.</p>
            <p>За первые десятилетия школа выпустила немало учеников, ставших известными врачами, инженерами и офицерами. Кроме этого многие выпускники вернулись в школу и стали ее учителями, работающими и по настоящее время.</p>
            <h2>История школы</h2>
            <p>МОАУ «Гимназия №8» свою историю начинает с 1978 года как школа № 44 города Оренбурга.
                90-е годы – годы больших перемен, как в стране, так и в школе № 44. С 1995 года школа выходит на новые этапы развития. Начинаются большие изменения в учебном процессе и воспитательной системе. В 1997 году была разработана новая концепция воспитательной системы школы: «Адаптивная школа — дом».
                В 2003 году в школе открыт первый кадетский класс. В последствие был сформирован кадетский корпус имени Льва Таикешева, просуществовавший до 2012 года. Корпус носил имя ученика школы № 44, офицера, участника Чеченской войны, награжденного орденом Мужества (посмертно). В этот же период в школе открываются первые профильные классы: НИШ (начально-инженерная школа), экологический, лингвистический, гуманитарный и т.д.
                В 2012 году школа становится муниципальным общеобразовательным автономным учреждением "Гимназия №8".
                В 2019 году МОАУ «Гимназия №8» присвоено имя Льва Таикешева.</p>
        </div>
        <div class="col-lg-3">
            <img src="{{asset('img/1.jpg')}}" alt="" class="rounded-5 mb-3">
            <img src="{{asset('img/4.jpeg')}}" alt="" class="rounded-5 mb-3">
            <img src="{{asset('img/5.jpeg')}}" alt="" class="rounded-5 mb-3">
        </div>
    </div>
</div>
@endsection