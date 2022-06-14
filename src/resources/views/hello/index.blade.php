<body>
    <h1>Blade/index</h1>
    <p>&#064;whileディレクティブの例</p>
    <p>＊データ一覧</p>
    @php
    $counter = 0;
    @endphp 
    <ol>
    @while($counter < count($data))
    <li>{{$data[$counter]}}</li>
    @php
    $counter ++; 
    @endphp    
    @endwhile
    </ol>
</body>