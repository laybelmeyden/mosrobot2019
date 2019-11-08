@extends('layouts.master')

@section('content')

<section id="header_other">
<div class="container">
    <div class="row">
        <h1>Кубок Губернатора<br> Московской области<br> по робототехнике</h1>
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
                    <p>Команда состоит не более чем из 2 человек. </p>
                </div>
                <div>
                    <img src="assets/img/Group25.png" alt="">
                    <p>Организаторы не предоставляют компьютеры(ноутбуки) и наборы для соренований. Каждая команда приезжает со своим набором и нотубуком.</p>
                </div>
                <div>
                    <img src="assets/img/Group26.png" alt="">
                    <p>Во всех категориях кроме проектной роботы собираются дома. В проектной категории робот собирается на площадке</p>
                </div>
            </div>
            <h3 class="rules_h3">Внимание! При регистрации в качестве руководителя команды может быть указан тренер или иное лицо, сопровождающее участников. Если команду помимо руководителя сопровождают другие лица, то они регистрируются как посетители.</h3>
            <div class="flex_two">
            <a class="btn btn-primary btn_info_two" href="/about" style="margin-left: 0;"role="button">Вопросы</a>
            <a class="btn btn-primary btn_info_tgree" href="https://rusinnovations.timepad.ru/event/1112004/" role="button">РЕГИСТРАЦИЯ НА кубОК губернатора</a>
            </div>
            <div class="col-xl-12">
            <div class="card" style="margin-top:68px;">
            <div class="card-body">
                <div class="flex_img_rules">
                    <div>
                    <img src="assets/img/Group12.png" alt="">
                    </div>
                    <div class="flex_img_rules_2">
                    <h5 class="card-title">Хоккей роботов (9-15 лет)</h5>
                    <p class="card-text">В этом состязании, участникам необходимо подготовить автономного робота, способного забивать штрафной удар в ворота соперника и отражать такие удары противника. Соревнование проходит в режиме серии буллитов: шайба ставится в центральный круг. Роботы поочередно осуществляют попытку забить гол в ворота соперника. Робот-соперник при этом пытается отбить шайбу.</p>
                    <a href="#" class="btn btn-primary btn_rules">РЕГЛАМЕНТ</a>
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
                    <img src="assets/img/Group10.png" alt="">
                    </div>
                    <div class="flex_img_rules_2">
                    <h5 class="card-title">СУМО РОБОТОВ (9-15 лет)</h5>
                    <p class="card-text">Соревнования проводятся по олимпийско ­круговой схеме. Первый этап ­ круговой турнир. Все команды разбиваются на группы. Соревнования в каждой группе проводятся по круговой схеме. Количество групп и команд в группах определяется в зависимости от общего количества команд. В одной группе должно быть не больше 5 команд. Из группы выходит победитель, а также среди всех команд, занявших 2 места в своих группах, выбирается команда с лучшими показателями (очки, разница раундов, количество выигранных раундов). Проводятся туры: ¼ финала, ½ финала, матч за 3 место и матч за 1 место. Размеры робота не более 25х25х25.</p>
                    <a href="#" class="btn btn-primary btn_rules">РЕГЛАМЕНТ</a>
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
                    <img src="assets/img/Group8.png" alt="">
                    </div>
                    <div class="flex_img_rules_2">
                    <h5 class="card-title">Лабиринт (9-15 лет)</h5>
                    <p class="card-text">В квалификационном раунде команда преодолевает неизвестный заранее лабиринт. Фиксируется время прохождения лабиринта либо число преодоленных ячеек, если робот не сумел преодолеть весь лабиринт за 2 минуты. По этому параметру составляется рейтинг и далее по парам роботы соревнуются в одновременном прохождении лабиринта, состоящего из двух одинаковых частей с общим финишем. Пересечений маршрутов двух роботов, кроме клетки финиша, нет. Выигрывает робот, первый оказавшийся на финишной ячейке. Размеры робота не более 25х25х25</p>
                    <a href="#" class="btn btn-primary btn_rules">РЕГЛАМЕНТ</a>
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
                    <img src="assets/img/Group7.png" alt="">
                    </div>
                    <div class="flex_img_rules_2">
                    <h5 class="card-title">Движение по линии (9-15 лет)</h5>
                    <p class="card-text">Поле в виде карты. На карте отмечены несколько городов. Города соединены между собой линиями. Перед отладкой командам сообщается маршрут. Из любого города в другой можно попасть как минимум двумя способами: простым, где есть только линия и перекрестки, но долгим и коротким, но с усложнениями в виде изгибов, инверсий, прерывистой линии, лежачих полицейских и так далее. Побеждает команда, проехавшая весь маршрут за наименьшее время. Размеры робота не более 25х25х25</p>
                    <a href="#" class="btn btn-primary btn_rules">РЕГЛАМЕНТ</a>
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
                    <img src="assets/img/Group9.png" alt="">
                    </div>
                    <div class="flex_img_rules_2">
                    <h5 class="card-title">Умный кегельринг (9-15 лет)</h5>
                    <p class="card-text">Необходимо аккуратно вывезти все кегли из круга. Засчитываются только те кегли, которые устояли после выталкивания. Размеры робота не более 25х25х25. Захватывающие устройства разрешены.</p>
                    <a href="#" class="btn btn-primary btn_rules">РЕГЛАМЕНТ</a>
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
                    <img src="assets/img/Group11.png" alt="">
                    </div>
                    <div class="flex_img_rules_2">
                    <h5 class="card-title">Korolev robotic challenge</h5>
                    <p class="card-text">В этом состязании, участникам необходимо подготовить автономного робота, способного пройти трассу, состоящую из 4 полигонов:
<br>
• Движение по линии с препятствием;<br>
• Лабиринт;<br>
• Движение по линии с инверсией;<br>
• Кегельринг.</p>
                    <a href="#" class="btn btn-primary btn_rules">РЕГЛАМЕНТ</a>
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
                    <img src="assets/img/Group13.png" alt="">
                    </div>
                    <div class="flex_img_rules_2">
                    <h5 class="card-title">Проектная категория (6-9 лет)</h5>
                    <p class="card-text">В данной категории командам необходимо собрать механизм или робота на заданную тему.</p>
                    <a href="#" class="btn btn-primary btn_rules">РЕГЛАМЕНТ</a>
                    </div>
                </div>
            </div>
            </div>
            </div>
        </div>
    </div>
</section>
@endsection