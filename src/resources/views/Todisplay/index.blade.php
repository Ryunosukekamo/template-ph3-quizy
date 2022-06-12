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
    @foreach($arrays[$id] as $array)
    <div class="parent">
        <h2 class="name"> 1.この地名はなんて読む?</h2>
        <img src="https://d1khcm40x1j0f.cloudfront.net/quiz/34d20397a2a506fe2c1ee636dc011a07.png" alt="たかなわ">

        <ul>
            <li>{{ $array[0] }}</li>
            <li>{{ $array[1] }}</li>
            <li>{{ $array[2] }}</li>
        </ul>
    </div>
    @endforeach

</body>