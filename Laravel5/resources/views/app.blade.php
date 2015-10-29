<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta id="viewport" name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
  <title>L5 Sample APP</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/paper/bootstrap.min.css" rel="stylesheet" integrity="sha256-hMIwZV8FylgKjXnmRI2YY0HLnozYr7Cuo1JvRtzmPWs= sha512-k+wW4K+gHODPy/0gaAMUNmCItIunOZ+PeLW7iZwkDZH/wMaTrSJTt7zK6TGy6p+rnDBghAxdvu1LX2Ohg0ypDw==" crossorigin="anonymous">
  <link href="/css/app.css" rel="stylesheet">
</head>
<body>

<header>
  <p>共通ヘッダー</p>
  <h4 class="page-header">Laravel Sample App</h4>
</header>

@yield('content')

<footer style="">
  <hr>
  <p class="">共通フッター</p>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
