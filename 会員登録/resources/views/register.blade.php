<!DOCTYPE html>
<head>
    <!-- 文字コードの設定 -->
    <meta charset="utf-8">
    <!-- 表示領域 -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <!-- CSRF Token -->
   <meta name="csrf-token" content="{{ csrf_token()}}">
    <!-- タイトル (タブに表示される) -->
    <title>{{ config('app.name', 'Laravel') }}</title>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- 独自のCSSを反映する -->
    <link rel="stylesheet" href="{{ asset('css/member.css')}}">


</head>

<body>

<div style="width: 500px; text-align:center; margin: 100px auto;">
    <h4>会員登録</h4>
    <form action="/memberRegister" method="post">
        @csrf
        <div class="form-group">
            <input class="form-control" type="text" name="name" placeholder="名前">
            <input class="form-control" type="text" name="tel" placeholder="電話番号">
            <input class="form-control" type="text" name="email" placeholder="メールアドレス">
            <button type="submit" class="btn btn-secondary">登録</button>
        </div>
    </form>
</div>

</body>
</html>