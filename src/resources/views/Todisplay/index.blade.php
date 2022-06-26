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
        {{$title[0]->bigQuestionTitle}}
        @foreach($imgs as $img)
        <div class="question">
            <h2 class="question_name"> この地名はなんて読む?</h2>
            <img src="{{$img->img}}" alt="">
            <ul>
                @foreach($arrayForChoices as $choices)
                @foreach($choices as $choice)
                <li class="">{{$choice->choiceName}}</li>
                @endforeach
                @endforeach
            </ul>
        </div>
        @endforeach
    </main>

</body>