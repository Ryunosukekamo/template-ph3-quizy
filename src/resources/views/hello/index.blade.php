<body>
    <h1>Blade/index</h1>
    <p>&#064;foreachディレクティブの例</p>
    <ol>
        @foreach($data as $item)
        <li>{{$item}}</li>
        @endforeach
    </ol>
</body>