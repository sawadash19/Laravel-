<!DOCTYPE html>
<head>
    <!-- 文字コードの設定 -->
    <meta charset="utf-8">
    <!-- 表示領域 -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- タイトル (タブに表示される) -->
    <title>{{ config('app.name', 'Laravel') }}</title>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- 独自のCSSを反映する -->
    <link rel="stylesheet" href="{{ asset('css/member.css')}}">

</head>

<body>

<div style="width: 500px; text-align: center; margin: 100px auto;">
    <h4>会員登録 会員ID:{{$member->id}}</h4>
    <form action="/memberEdit" method="post">
        @csrf
        <input class="form-control" type="text" name="id" value="{{$member->id}}" hidden>
    <div class="form-group">
        <input class="form-control" type="text" name="name" value="{{$member->name}}">
        <input class="form-control" type="text" name="tel" value="{{$member->tel}}">
        <input class="form-control" type="text" name="email" value="{{$member->email}}">
        <button type="submit" class="btn btn-secondary">編集</button>
    </div>
    <div class="form-group">
        <a href="/memberDelete/{{$member->id}}"><button type="button" class="btn btn-secondary">削除</button></a>
    </div>
  </form>

</div>
</body>
</html>