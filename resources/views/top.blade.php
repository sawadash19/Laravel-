<!DOCTYPE html>
<head>
    <!-- 文字コードの設定 -->
    <meta charset="utf-8">
    <!-- 表示領域 -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="viemport" content="width-device-width, instial-scale=1">
    <!-- タイトル (タブに表示される) -->
    <title>{{ config('app.name', 'Laravel') }}</title>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- 独自のCSSを反映する -->
    <link rel="stylesheet" href="{{ asset('css/member.css') }}">    
</head>

<body>







<div class="top">
    <div class="registerLink" style="text-align: right;">
        <a href="/register"> >>登録 </a>
    </div>
</div>

                <table class="table" border="1">
                    <tr>
                        <th>名前</th>
                        <th>電話番号</th>
                        <th>メールアドレス</th>
                        <th> </th>
                    </tr>
                    @foreach($member as $value)
                    <tr>
                        <td>{{$value->name}}</td>
                        <td>{{$value->tel}}</td>
                        <td>{{$value->email}}</td>
                        <td><a href="/edit/{{$value->id}}"> >>編集</a></td>
                    </tr>
                    @endforeach
                </table> 
            </div>
    </div>
    </div>
    </div>
</div>
</body>
</html>