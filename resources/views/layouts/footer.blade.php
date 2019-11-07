<footer id="footer">
<div class="row">
<div class="col-sm-12 col-xl-6">
<h1 class="h1_footer">Если у вас остались вопросы, <br>свяжитесь с нами:</h1>
<div class="flex_footer_1">
<div>
<img src="assets/img/Group21.png" alt="">
<a href="tel:+7 (499) 753-01-25"><p>+7 (499) 753-01-25</p></a>
</div>
</div>
<div class="flex_footer_2">
<div>
<img src="assets/img/Group22.png" alt="">
<a href="mailto:mosoblfest@mail.ru"><p>mosoblfest@mail.ru</p></a>
</div>
</div>
<p class="footer_p1">Или напишите нам через форму обратной связи</p>
<div class="flex_footer_3">
<a href="https://www.instagram.com/roboevents/"><img src="assets/img/instagram.png" alt=""></a>
<a href="https://t.me/roboevents"><img src="assets/img/telegram.png" alt=""></a>
<a href="https://chat.whatsapp.com/JGO7zExmcdR8UQRg6SXNT8"><img src="assets/img/whatsapp.png" alt=""></a>
</div>
</div>
<div class="col-sm-12 col-xl-6">
<form class="form_footer" method="POST" action="/contact">
{{ csrf_field() }}
  <div class="form-group">
    <input type="text" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="Имя" placeholder="Имя">
  </div>
  <div class="form-group">
    <input type="email" name="contact_email" class="form-control" id="exampleInputPassword1" placeholder="E-mail">
  </div>
  <div class="form-group">
    <textarea class="form-control" name="text_contact" id="exampleFormControlTextarea1" placeholder="Ваше сообщение"></textarea>
  </div>
  <div class="footer_btn_flex">
  <button type="submit" class="btn btn-primary btn_footer">ОТПРАВИТЬ</button>
  </div>
</form>
</div>
</div>
</footer>
<div class="footer_end"></div>