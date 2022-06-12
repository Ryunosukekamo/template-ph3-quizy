<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>難読地名クイズ</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <!-- 中央寄せ -->
    @foreach($arraysForChoices[$id] as $choice)
    <div class="parent">
        <h2 class="name"> 1.この地名はなんて読む?</h2>
        <img src="{{$choice[0]}}" alt="たかなわ">

        <ul>
            <li>{{ $choice[1] }}</li>
            <li>{{ $choice[2] }}</li>
            <li>{{ $choice[3] }}</li>
        </ul>
    </div>
    @endforeach

</body>