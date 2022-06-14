<body>
    <h1>Blade/index</h1>
    <p>&#064;forディレクティブの例</p>
    <p>＊データ一覧</p>
    @foreach ($data as $item)
    <ul>
    <li>No,{{$loop->iteration}}.{{$item}}</li>
    </ul>
    @endforeach    
    <p>ーーここまで</p>
</body>