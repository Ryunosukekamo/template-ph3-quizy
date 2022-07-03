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
        <?php $idForBigQuestionTitle->title; ?>
        @foreach($allElemForSmallQuestions as $allElemForSmallQuestion)
        <div class="question">
            <h2 class="question_name">{{$allElemForSmallQuestion->title}}</h2>
            <img src="{{$allElemForSmallQuestion->picture}}" alt="">
            <ul>
                @for($i=0; $i<4; $i++)
                    <li class="">{{$choices[$i]->choice}}</li>
                @endfor
            </ul>
        </div>
        @endforeach
    </main>

</body>