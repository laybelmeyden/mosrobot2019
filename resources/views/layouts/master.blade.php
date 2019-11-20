<!DOCTYPE html>
<html>

<head>
  <title>Московский областной молодежный форум инноваций и предпринимательства</title>
  <!--meta-->
  <meta charset="UTF-8">
  <meta name="description" content="Московский областной молодежный форум инноваций и предпринимательства"/>
  <META NAME="keywords" CONTENT="Московский областной молодежный форум инноваций и предпринимательства">
  <META NAME="AUTHOR" CONTENT="https://vk.com/glrlcocks">
  <meta name="revisit-after" content="5 days">
  <link rel="SHORTCUT ICON" href="assets/img/Group50.png" type="image/x-icon">
    <meta name="yandex-verification" content="2c049c2c17b41118" />
  <!--соц сети-->
  <meta property="og:type" content="article" />
  <meta property="og:title" content="Московский областной молодежный форум инноваций и предпринимательства" />
  <meta property="og:description" content="Московский областной молодежный форум инноваций и предпринимательства" />
  <meta property="og:image" content="assets/img/Group50.png"  />
  <meta property="og:url" content="Московский областной молодежный форум инноваций и предпринимательства" />
  <meta property="og:site_name" content="Московский областной молодежный форум инноваций и предпринимательства" />

  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <link rel="stylesheet" href="assets/css/main.css">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
@if(session('message'))
  <div id="modalflat" class="modal modal-fixed-footer modal_alert visible">
    <div class="modal-content">
      <h4 class="alert_title">{{ session('message') }}</h4>
      <p class="alert_down">{{ session('message_1') }}</p>
    </div>
    <div class="flert">
    <a class="modal-close waves-effect waves-light btn-flat btn_ok" id="btn_ok">OK</a>
    </div>
  </div>
  @endif
@include('layouts.nav')
@yield('content')
@include('layouts.footer')
@include('layouts.scripts')

</body>
</html>
