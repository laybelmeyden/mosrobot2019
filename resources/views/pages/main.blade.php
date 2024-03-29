@extends('layouts.master')

@section('content')
<section id="header">
<div class="container">
  <div class="row">
  <div class="header_title">
  <h1>Молодежный форум инноваций и <br>предпринимательства Московской области</h1>
  <div class="header_h3">
  <img src="assets/img/calendar1.svg" alt=""><h3>07/12/2019</h3>
  <img src="assets/img/placeholder-filled-point1.svg" alt="" class="right_contect"><h3>Дом Правительства Московской области</h3>
  </div>
  <div class="btn_header">
  <a class="btn btn-primary btn_one" href="https://rusinnovations.timepad.ru/event/1135189/" role="button">регистрация на форум</a>
  <a class="btn btn-primary btn_two" href="https://rusinnovations.timepad.ru/event/1112112/" role="button">УЧАСтвовать в ХАКАТОНЕ</a>
  </div>
  </div>
</div>
</section>
<section id="info">
  <img src="assets/img/right.png" alt="" class="info_img_1">
  <img src="assets/img/left.png" alt="" class="info_img_2">
<div class="container">
  <div class="row">
    <div class="about_text">
    <h1 class="info_h1">Кубок Губернатора</h1>
    <h3 class="info_h3"><span><b>7</b></span> номинаций, около <span><b>2000</b></span> человек</h3>
    <div class="flex_one">
     <div>
       <img src="assets/img/Group7.svg" alt="">
       <p>Движение <br>по линии</p>
     </div> 
     <div>
       <img src="assets/img/Group8.svg" alt="">
       <p>Лабиринт</p>
     </div> 
     <div>
       <img src="assets/img/Group9.svg" alt="">
       <p>Кегельринг</p>
     </div> 
     <div>
       <img src="assets/img/Group10.svg" alt="">
       <p>Сумо роботов</p>
     </div> 
    </div>
    <div class="flex_one">
     <div>
       <img src="assets/img/Group11.svg" alt="">
       <p>Korolev robotic<br> challenge</p>
     </div> 
     <div>
       <img src="assets/img/Group12.svg" alt="">
       <p>Хоккей роботов</p>
     </div> 
     <div>
       <img src="assets/img/Group13.svg" alt="">
       <p>Проектные <br>соревнования</p>
     </div> 
    </div>
    </div>
    <h2>Собирай команду! регистрируйся! участвуй! побеждай!</h2>
    <div class="flex_two">
    <a class="btn btn-primary btn_info_one" href="/more" role="button">Подробнее</a>
    <a class="btn btn-primary btn_info_two" href="/about" role="button">Вопросы</a>
    <a class="btn btn-primary btn_info_tgree" href="https://rusinnovations.timepad.ru/event/1135189/" role="button">регистрация на форум</a>
    </div>
  </div>
</div>
</section>
<section id="hackaton">
<div class="container">
  <div class="row">
    <div class="col-xl-12">
    <h1 class="hackaton_main">ХАКАТОН</h1>
    <p class="hackaton_p1"><b>Хакатон</b> – это марафон разработчиков, мероприятие, во время которого специалисты из разных областей разработки программного обеспечения (программисты, дизайнеры, менеджеры) сообща работают над решением какой-либо проблемы/задачи.</p>
    <p class="hackaton_p2"><span>7 декабря </span>участникам Хакатона предстоит решить реальную задачу из практики МТС.</p>
    </div>
    
    <div class="flex_three">
    <a class="btn btn-primary btn_hackaton_one" href="/hackaton" role="button">Подробнее</a>
    <a class="btn btn-primary btn_hackaton_two" href="https://rusinnovations.timepad.ru/event/1112112/" role="button">РЕГИСТРАЦИЯ НА ХАКАТОН</a>
    </div>
  </div>
</div>
</section>
<section id="vistavka">
  <div class="container">
    <div class="row">
      <h1>ВыставкА</h1>
      <div class="flex_one ttw">
     <div>
       <img src="assets/img/Group38.svg" alt="">
       <p>Робототехника</p>
     </div> 
     <div>
       <img src="assets/img/Group39.svg" alt="">
       <p>Нейросети</p>
     </div> 
     <div>
       <img src="assets/img/Group40.svg" alt="">
       <p>Искусственный<br> интеллект</p>
     </div> 
     <div>
       <img src="assets/img/Group41.svg" alt="">
       <p>Космические<br> технологии</p>
     </div> 
    </div>
    <div class="flex_one ttw" style="margin-top:42px;">
     <div>
       <img src="assets/img/Group42.svg" alt="">
       <p>Медтех</p>
     </div> 
     <div>
       <img src="assets/img/Group43.svg" alt="">
       <p>БПЛА</p>
     </div> 
     <div>
       <img src="assets/img/Group44.svg" alt="">
       <p>IT</p>
     </div> 
     <div>
       <img src="assets/img/Group46.svg" alt="">
       <p>Агротех</p>
     </div> 
    </div>
    <p class="about_vistavka_1">На Выставке Московского областного молодежного форума инноваций и предпринимательства будут представлены последние новейшие инновационные прототипы андроидных роботов, беспилотных летательных аппаратов, космических и медицинских технологий, разработки в области нейросетей, искусственного интеллекта и it.</p>
    <!-- <p class="about_vistavka_2">По вопросам участия в выставке:</p> -->
    <!-- <div class="header_h3_vistavka">
    <img src="assets/img/arroba1.svg" alt=""><h3><a href="mailto:innovaciiforum2019@gmail.com">innovaciiforum2019@gmail.com</a></h3>
    <img src="assets/img/telephone1.svg" alt="" class="right_contect"><h3><a href="tel:+7(916)4085278">8 (916) 408 52 78 Досковская Юлия</a></h3>
    </div> -->
    </div>
  </div>
</section>
<section id="news">
  <div class="container">
    <div class="row">
      <div class="col-xl-12">
      <h1>Новости</h1>
      </div>
     <div class="col-sm-12 col-lg-4">
     <div class="card crd_2">
        <div class="card-body crd">
          <h5 class="card-title">Победители Кубка Губернатора 2019</h5>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
          style="    background: linear-gradient(98.91deg, #431CB0 2.49%, #230E7A 96.35%);
    border: 1px solid #FFFFFF;
    box-sizing: border-box;
    border-radius: 40px;
    font-family: 'PNovaL';
    font-style: normal;
    font-weight: normal;
    font-size: 18px;
    line-height: 22px;
    text-align: center;
    text-transform: uppercase;
    color: #FFFFFF;
    width: 200px;
    height: 50px;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-right: 77px;"
          >Подробнее</button>
        </div>
      </div>
     </div> 
     </div>
  </div> 
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Победители Кубка Губернатора 2019</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <b>Опубликован 7.12.19</b>
      <br><br><br><br>7 декабря в Доме Правительства Московской области состоялся молодежный форум инноваций и предпринимательства Московской области, в котором приняли участие более 3000 человек.
      <br><br>
В рамках Форума прошли Соревнования на Кубок Губернатора Московской области по робототехнике и Хакатону, участниками которого стали 472 ребенка
<br><br>
ПОБЕДИТЕЛИ по категориям:
<br><br>
Сумо Роботов<br>
1. Команда «Роботекс», город Луховицы<br>
2. Команда «Wizard», город Орехово-Зуево<br>
3. Команда «ЦМИТ «Эврика», город Солнечногорск<br>
<br><br>
KOROLEV ROBOTIC CHALLENGE<br>
1. Команда «Комета-Бином», город Химки<br>
2. Команда «Победа», город Московский<br>
3. Команда «ФедКон», город Раменское<br>
<br><br>
Лабиринт<br>
1. Команда «Юпитер», пос Удельная<br>
2. Команда «Суслики-Бином», город Химки<br>
3. Команда «Земляне », пос Удельная<br>
<br><br>
Кегельринг<br>
1. Команда «Саша +/- 1», город Одинцово<br>
2. Команда «16 Гимназия-Бином», город Химки<br>
3. Команда «Техно-Бином», город Химки<br>
<br><br>
Хоккей Роботов<br>
1. Команда «Линия», город Красногорск<br>
2. Команда «Батерсы», город Дорохово<br>
3. Команда «РОБОтяги », город Химки<br>
<br><br>
Движение по линии<br>
1. Команда «Robot M», город Раменское<br>
2. Команда «Strong», город Раменское<br>
3. Команда «ЛР-Енотики», город Наро-Фоминск<br>
<br><br>
Проектная категория 6-10 лет<br>
1. Команда «Верталь», город Раменское<br>
2. Команда «Чкаловцы», город Красногорск<br>
3. Команда «Робо-тяга», город Раменское<br>
<br><br>
Проектная категория 11-15 лет<br>
Гран-при Команда «Торфянники», город Орехово-Зуево<br>
1. Команда «Valliant», город Раменское<br>
2. Команда «Ретроградный Меркурий», город Реутов<br>
3. Команда «Кодомиры», город Красногорск<br>
<br><br>
Хакатон<br>
1. Номинация «Низкоуровневая разработка», победитель - Команда «КиберРоссия», город Солнечногорск<br>
2. Номинация «Разработка сервисов для работы с датчиками», победитель - Команда «UNFOX Team», город Люберцы<br><br>
    </div>
    </div>
  </div>
</div> 
</section>
<section id="partners">
  <div class="container">
    <div class="row">
      <div class="col-xl-12">
      <h1>Организаторы и партнёры</h1>
      </div>
    </div>
  </div>
    <div class="flex_one_partners two_part">
     <div>
     <a href="https://mosreg.ru/"><img src="assets/img/GroupL1.svg" alt=""></a>
     </div> 
     <div>
       <a href="https://politika.mosreg.ru/"><img src="assets/img/GroupL2.svg" alt=""></a>
     </div> 
     <div>
     <a href="http://www.grandevent.org/"><img src="assets/img/GroupL3.svg" alt=""></a>
     </div> 
     
    </div>
    <div class="flex_one_partners two_part_2">
     <div>
     <a href="https://mosreg.ru/sobytiya/temy/forum-ya-grazhdanin-podmoskovya"><img src="assets/img/GroupL4.svg" alt=""></a>
     </div> 
     <div>
     <a href="https://mosreg.ru/"><img src="assets/img/GroupL5.svg" alt=""></a>
     </div> 
     <div>
     <a href="https://rusinnovations.com/"><img src="assets/img/GroupL6.svg" alt=""></a>
     </div> 
    </div>
    <div class="flex_one_partners two_part_2">
     <div>
     <a href="https://moskva.mts.ru/personal"><img src="assets/img/MTS_Logo_rus_r.jpg" alt="" style="width: 200px;"></a>
     </div> 
     <div>
     <a href="https://www.technoschool.club/"><img src="assets/img/a3f3b7_45744d50e964496c80c14aac40991c82.jpg" style="width: 150px;" alt=""></a>
     </div> 
     <div>
     <a href="http://sm-mech.ru/"><img src="assets/img/sm-mech.svg" alt="" style="width: 150px;"></a>
     </div> 
    </div>
    <div class="flex_one_partners two_part_2">
     <div>
     <a href="https://coddyschool.com/"><img src="assets/img/logo-coddy-blue.png" alt=""  style="width: 150px;"></a>
     </div> 
     <div>
     <a href="https://promo-bot.ru/"><img src="assets/img/Logopromobot.png" alt=""  ></a>
     </div> 
     <div>
     <a href="https://www.msu.ru/index.php"><img src="assets/img/lomonosov4.png" alt=""  ></a>
     </div> 
    </div>
</section>
<section id="maps">
  <div class="maps_back">
    <h1 class="maps_p_1">Дом правительства Московской области</h1>
    <p class="maps_p_2">бул. Строителей, 1, Красногорск</p>
    <a href="https://yandex.ru/maps/10735/krasnogorsk/?ll=37.380804%2C55.816086&mode=routes&rtext=~55.816085%2C37.380803&rtt=auto&ruri=~ymapsbm1%3A%2F%2Fgeo%3Fll%3D37.381%252C55.816%26spn%3D0.001%252C0.001%26text%3D%25D0%25A0%25D0%25BE%25D1%2581%25D1%2581%25D0%25B8%25D1%258F%252C%2520%25D0%259C%25D0%25BE%25D1%2581%25D0%25BA%25D0%25BE%25D0%25B2%25D1%2581%25D0%25BA%25D0%25B0%25D1%258F%2520%25D0%25BE%25D0%25B1%25D0%25BB%25D0%25B0%25D1%2581%25D1%2582%25D1%258C%252C%2520%25D0%259A%25D1%2580%25D0%25B0%25D1%2581%25D0%25BD%25D0%25BE%25D0%25B3%25D0%25BE%25D1%2580%25D1%2581%25D0%25BA%252C%2520%25D0%25B1%25D1%2583%25D0%25BB%25D1%258C%25D0%25B2%25D0%25B0%25D1%2580%2520%25D0%25A1%25D1%2582%25D1%2580%25D0%25BE%25D0%25B8%25D1%2582%25D0%25B5%25D0%25BB%25D0%25B5%25D0%25B9%252C%25201&source=wizgeo&utm_medium=maps-desktop&utm_source=serp&z=17" target="_blank"><p class="maps_p_3"><b>Как добраться?</b> На автомобиле, метро, автобусе</p></a>

  </div>
<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Abe29c398e21f8cd0fbb423130a4d0be211d8ad7e2dba7d181b55a771c35a404a&amp;source=constructor" width="100%" height="495" frameborder="0"></iframe>
</section>
@endsection
