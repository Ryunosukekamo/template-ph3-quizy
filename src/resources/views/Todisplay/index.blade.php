<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>難読地名クイズ</title>
    <link rel="stylesheet" href="{{ asset('/css/index.css') }}">
</head>

<body>
    <!-- 中央寄せ -->
    <main>
        @foreach($arraysForChoices[$id] as $choice)
        <div class="question">
            <h2 class="question_name"> この地名はなんて読む?</h2>
            <img src="{{$choice[0]}}" alt="たかなわ">
    
            <ul>
                <li class="choice">{{ $choice[1] }}</li>
                <li class="choice">{{ $choice[2] }}</li>
                <li class="choice">{{ $choice[3] }}</li>
            </ul>
        </div>
        @endforeach
    </main>

</body>