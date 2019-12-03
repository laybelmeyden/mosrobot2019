@extends('layouts.master')

@section('content')

<section id="header_other">
<div class="container">
    <div class="row">
        <h1>Кубок Губернатора<br> Московской области<br> по робототехнике</h1>
        <div class="header_h3">
  <img src="assets/img/calendar1.svg" alt=""><h3>07/12/2019</h3>
  <img src="assets/img/placeholder-filled-point1.svg" alt="" class="right_contect"><h3>Дом Правительства Московской области</h3>
  </div>
        <div class="header_h3_main">
  <h3>Регистрация участников в 9:00</h3>
  <h3>Старт Соревнований в 10:00</h3>
  </div>
  <p style="color:red; font-size: 24px;
    padding-top: 10px;
    font-weight: bold; width: 100%;" class="plos">Убедительная просьба ознакомиться с Итоговым списком участников, Регламентом и Таймингом Соревнований, которые закреплены ниже.</p>
  </div>
</div>
</section>
<section id="rules">
<img src="assets/img/right.png" alt="" class="info_img_1">
    <div class="container">
        <div class="row">
            <h2 class="rules_h2">Общие правила соревнований</h2>
            <div class="flex_rules">
                <div>
                    <img src="assets/img/Group24.png" alt="">
                    <p>Возраст участников и количественный состав команд в каждой категории строго определяется Регламентами соревнований.</p>
                </div>
                <div>
                    <img src="assets/img/Group25.png" alt="">
                    <p>Организаторы не предоставляют компьютеры(ноутбуки) и наборы для соренований. Каждая команда приезжает со своим набором и ноутбуком.</p>
                </div>
                <div>
                    <img src="assets/img/Group26.png" alt="">
                    <p>Каждый участник соревнований (участники - дети и сопровождающие - преподаватель, сопровождающий, родитель) проходит ОБЯЗАТЕЛЬНУЮ регистрацию - индивидуально. Одна отправленная анкета - один человек.</p>
                </div>
                <p></p>
            </div>
            <h3 class="rules_h3">Внимание! Для прохода на площадку Соревнований необходимо взять с собой ОРИГИНАЛЫ ДОКУМЕНТОВ: для детей(свидетельство о рождении) и взрослых(паспорт РФ)!</h3>
            <div class="flex_two">
            <a class="btn btn-primary btn_info_one" href="https://vk.com/doc95748576_525177787?hash=0da47e18a842d83ed6&dl=d5f086af608a6cbccc" role="button">Регламенты</a>
            <a class="btn btn-primary btn_info_two" href="/about" role="button">Вопросы</a>
            <a class="btn btn-primary btn_info_two" 
            style="background: red"
            href="https://vk.com/doc95748576_526199777?hash=9acdd5dc192ffa3db6&dl=e0795268e3c1edcd06" role="button">Список участников</a>
            <a class="btn btn-primary btn_info_two" href="https://vk.com/doc95748576_526168307?hash=5194c5f43ec9fda2b3&dl=6dd728ca4a14082e18" role="button">Тайминг Соревнований</a>
            </div>
            <div class="col-xl-12">
            <div class="card" style="margin-top:68px;">
            <div class="card-body">
                <div class="flex_img_rules">
                    <div>
                    <img src="assets/img/Group12.svg" alt="">
                    </div>
                    <div class="flex_img_rules_2">
                    <h5 class="card-title">ХОККЕЙ РОБОТОВ (6-10 ЛЕТ)</h5>
                    <p class="card-text">Участники: команда из 3-человек (возраст участников от 6 до 10 лет). В этом состязании, командам необходимо забить шайбу в ворота соперника и отражать такие удары противника. Соревнование проходит в режиме серии буллитов: шайба ставится в центральный круг. Роботы поочередно осуществляют попытку забить гол в ворота соперника. Робот-соперник при этом пытается отбить шайбу.</p>
                    <a href="https://vk.com/doc95748576_525411897?hash=904bd47f0ff554f755&dl=8eaf035ad21c971c0b" class="btn btn-primary btn_rules">Дополнительная информация</a>
                    </div>
                </div>
            </div>
            </div>
            </div>
            <div class="col-xl-12">
            <div class="card">
            <div class="card-body">
                <div class="flex_img_rules">
                    <div>
                    <img src="assets/img/Group10.svg" alt="">
                    </div>
                    <div class="flex_img_rules_2">
                    <h5 class="card-title">СУМО РОБОТОВ (9-15 лет)</h5>
                    <p class="card-text">Участники: команда из 1-2 человек (возраст участников от 9 до 15 лет). В этом состязании участникам необходимо заранее подготовить автономного робота, способного наиболее эффективно выталкивать робота-противника за пределы черной линии ринга.</p>
                    <a href="https://vk.com/doc95748576_525506125?hash=32f1a2ee4e67e1e746&dl=bba309eb547c3642b1" class="btn btn-primary btn_rules">Дополнительная информация</a>
                    </div>
                </div>
            </div>
            </div>
            </div>
            <div class="col-xl-12">
            <div class="card">
            <div class="card-body">
                <div class="flex_img_rules">
                    <div>
                    <img src="assets/img/Group8.svg" alt="">
                    </div>
                    <div class="flex_img_rules_2">
                    <h5 class="card-title">Лабиринт (9-15 лет)</h5>
                    <p class="card-text">Участники: команда из 1-2 человек (возраст участников от 9 до 15 лет). В квалификационном раунде команда преодолевает неизвестный заранее лабиринт. Фиксируется время прохождения лабиринта либо число преодоленных ячеек, если робот не сумел преодолеть весь лабиринт за 2 минуты. По этому параметру составляется рейтинг и далее по парам роботы соревнуются в одновременном прохождении лабиринта, состоящего из двух одинаковых частей с общим финишем. Пересечений маршрутов двух роботов, кроме клетки финиша, нет. Выигрывает робот, первый оказавшийся на финишной ячейке. Размеры робота не более 25х25х25</p>
                    <!-- <a href="https://vk.com/doc95748576_524493961?hash=73c29cfc1d49578c22&dl=806654cd43ff9a3508" class="btn btn-primary btn_rules">РЕГЛАМЕНТ</a> -->
                    </div>
                </div>
            </div>
            </div>
            </div>
            <div class="col-xl-12">
            <div class="card">
            <div class="card-body">
                <div class="flex_img_rules">
                    <div>
                    <img src="assets/img/Group7.svg" alt="">
                    </div>
                    <div class="flex_img_rules_2">
                    <h5 class="card-title">Движение по линии (9-15 лет)</h5>
                    <p class="card-text">Участники: команда из 2 человек (возраст участников от 9 до 15 лет). В этом состязании участникам необходимо подготовить автономного робота, способного наиболее быстро проехать от зоны старта до зоны финиша по карте. Зоной финиша является зона старта, после прохождения роботом одного круга трассы.Побеждает команда, проехавшая весь маршрут за наименьшее время.</p>
                    <a href="https://vk.com/doc190245867_525493757?hash=7b9998233c4cefc77d&dl=a7bf4483c4d8d259c9" class="btn btn-primary btn_rules">Дополнительная информация</a>
                    </div>
                </div>
            </div>
            </div>
            </div>
            <div class="col-xl-12">
            <div class="card">
            <div class="card-body">
                <div class="flex_img_rules">
                    <div>
                    <img src="assets/img/Group9.svg" alt="">
                    </div>
                    <div class="flex_img_rules_2">
                    <h5 class="card-title">Кегельринг (9-15 лет)</h5>
                    <p class="card-text">Участники: команда из 1-2 человек (возраст участников от 9 до 15 лет). В этом состязании участникам необходимо подготовить автономного робота, способного выводить спутники (белые и красные кегли) на орбиту. При этом участникам запрещено выводить на орбиту космический мусор (чёрные кегли).</p>
                    <!-- <a href="https://vk.com/doc95748576_524501068?hash=a560ede849967b0836&dl=59cc7f277599be83bf" class="btn btn-primary btn_rules">РЕГЛАМЕНТ</a> -->
                    </div>
                </div>
            </div>
            </div>
            </div>
            <div class="col-xl-12">
            <div class="card">
            <div class="card-body">
                <div class="flex_img_rules">
                    <div>
                    <img src="assets/img/Group11.svg" alt="">
                    </div>
                    <div class="flex_img_rules_2">
                    <h5 class="card-title">Korolev robotic challenge (9-15 ЛЕТ)</h5>
                    <p class="card-text">Участники: команда из 1-2 человек (возраст участников от 9 до 15 лет).В этом состязании командам необходимо подготовить автономного робота, способного пройти трассу, состоящую из 3 полигонов: Движение по линии с препятствием; Кегельринг; Движение по линии с инверсией.</p>
                    <a href="https://vk.com/doc190245867_525475516?hash=7e6f5e547a12e41a97&dl=3faad612b089483de9" class="btn btn-primary btn_rules">Дополнительная информация</a>
                    </div>
                </div>
            </div>
            </div>
            </div>
            <div class="col-xl-12">
            <div class="card">
            <div class="card-body">
                <div class="flex_img_rules">
                    <div>
                    <img src="assets/img/Group13.svg" alt="">
                    </div>
                    <div class="flex_img_rules_2">
                    <h5 class="card-title">Проектная категория (6-10 ЛЕТ И 11-15 ЛЕТ)</h5>
                    <p class="card-text">Участники: команда из 1-3 человек (младшая возрастная группа 6-10 лет и старшая возрастная группа 11-15 лет). Участники могут выбрать свою тему в рамках стендового конкурса: • авиамодельный спорт; • автомодельный спорт; • судомодельный спорт; • робототехника.
В данной категории командам необходимо презентовать свой механизм или робота.Время на презентацию 3 минуты.</p>
                    <!-- <a href="https://vk.com/doc95748576_524497407?hash=a9092c0bede88464a3&dl=6686f312966f496479" class="btn btn-primary btn_rules">РЕГЛАМЕНТ</a> -->
                    </div>
                </div>
            </div>
            </div>
            </div>
        </div>
    </div>
</section>
@endsection