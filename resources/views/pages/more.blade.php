@extends('layouts.master')

@section('content')

<section id="header_other">
<div class="container">
    <div class="row">
        <h1>Кубок Губернатора<br> Московской области<br> по робототехнике</h1>
        <div class="header_h3">
  <img src="assets/img/calendar1.png" alt=""><h3>07/12/2019</h3>
  <img src="assets/img/placeholder-filled-point1.png" alt="" class="right_contect"><h3>Дом Правительства Московской области</h3>
  </div>
        <div class="header_h3_main">
  <h3>Регистрация участников в 9:00</h3>
  <h3>Старт Соревнований в 10:00</h3>
  </div>
  <p style="color:red; font-size: 24px;
    padding-top: 10px;
    font-weight: bold;">Регламенты будут доступны для ознакомления 20.11 (в 15:00 по МСК)</p>
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
                    <h5 class="card-title">ХОККЕЙ РОБОТОВ (6-10 ЛЕТ)</h5>
                    <p class="card-text">Участники: команда из 3-человек (возраст участников от 6 до 10 лет). В этом состязании, командам необходимо забить шайбу в ворота соперника и отражать такие удары противника. Соревнование проходит в режиме серии буллитов: шайба ставится в центральный круг. Роботы поочередно осуществляют попытку забить гол в ворота соперника. Робот-соперник при этом пытается отбить шайбу.</p>
                    <a href="https://vk.com/doc95748576_524224735?hash=e1b1528c8d0a48677d&dl=6aead31d8e9e8fd223" class="btn btn-primary btn_rules">РЕГЛАМЕНТ</a>
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
                    <p class="card-text">Участники: команда из 1-2 человек (возраст участников от 9 до 15 лет). Соревнования проводятся по олимпийско ­круговой схеме. Первый этап ­ круговой турнир. Все команды разбиваются на группы. Соревнования в каждой группе проводятся по круговой схеме. Количество групп и команд в группах определяется в зависимости от общего количества команд. В одной группе должно быть не больше 5 команд. Из группы выходит победитель, а также среди всех команд, занявших 2 места в своих группах, выбирается команда с лучшими показателями (очки, разница раундов, количество выигранных раундов). Проводятся туры: ¼ финала, ½ финала, матч за 3 место и матч за 1 место. Размеры робота не более 25х25х25.</p>
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
                    <p class="card-text">Участники: команда из 1-2 человек (возраст участников от 9 до 15 лет). В квалификационном раунде команда преодолевает неизвестный заранее лабиринт. Фиксируется время прохождения лабиринта либо число преодоленных ячеек, если робот не сумел преодолеть весь лабиринт за 2 минуты. По этому параметру составляется рейтинг и далее по парам роботы соревнуются в одновременном прохождении лабиринта, состоящего из двух одинаковых частей с общим финишем. Пересечений маршрутов двух роботов, кроме клетки финиша, нет. Выигрывает робот, первый оказавшийся на финишной ячейке. Размеры робота не более 25х25х25</p>
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
                    <p class="card-text">Участники: команда из 2 человек (возраст участников от 9 до 15 лет). Поле в виде карты. На карте отмечены несколько городов. Города соединены между собой линиями. Перед отладкой командам сообщается маршрут. Из любого города в другой можно попасть как минимум двумя способами: простым, где есть только линия и перекрестки, но долгим и коротким, но с усложнениями в виде изгибов, инверсий, прерывистой линии, лежачих полицейских и так далее. Побеждает команда, проехавшая весь маршрут за наименьшее время. Размеры робота не более 25х25х25</p>
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
                    <h5 class="card-title">Кегельринг (9-15 лет)</h5>
                    <p class="card-text">Участники: команда из 1-2 человек (возраст участников от 9 до 15 лет). Необходимо аккуратно вывезти все кегли из круга. Засчитываются только те кегли, которые устояли после выталкивания. Размеры робота не более 25х25х25. Захватывающие устройства разрешены.</p>
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
                    <h5 class="card-title">Korolev robotic challenge (9-15 ЛЕТ)</h5>
                    <p class="card-text">Участники: команда из 2 человек (возраст участников от 9 до 15 лет). В этом состязании, участникам необходимо подготовить автономного робота, способного пройти трассу, состоящую из 4 полигонов:
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
                    <h5 class="card-title">Проектная категория (6-10 ЛЕТ И 11-15 ЛЕТ)</h5>
                    <p class="card-text">Участники: команда из 1-3 человек (младшая возрастная группа 6-10 лет и старшая возрастная группа 11-15 лет). Это творческий стендовый конкурс. В данной категории командам необходимо презентовать свой механизм или робота на тему: Водная инфраструктура. Время на презентацию 3 минуты.</p>
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