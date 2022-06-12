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
    @if ($id == 1)
    <div class="parent">
        <h2 class="name"> 1.この地名はなんて読む?</h2>
        <img src="https://d1khcm40x1j0f.cloudfront.net/quiz/34d20397a2a506fe2c1ee636dc011a07.png" alt="たかなわ">

        <ul>
            <li id="button1" class="button_style1">たかなわ</li>
            <li id="button2" class="button_style2">こうわ</li>
            <li id="button3" class="buttton_style3">たかわ</li>
        </ul>
    </div>

    <h2 class="name"> 2.この地名はなんて読む?</h2>
    <img src="https://d1khcm40x1j0f.cloudfront.net/quiz/512b8146e7661821c45dbb8fefedf731.png" alt="かめいど">
    <ul>
        <li>かめいど</li>
        <li>かめと</li>
        <li>かめど</li>
    </ul>

    <h2 class="name"> 3.この地名はなんて読む?</h2>
    <img src="https://d1khcm40x1j0f.cloudfront.net/quiz/ad4f8badd896f1a9b527c530ebf8ac7f.png" alt="こうじまち">
    <ul>
        <li>かゆまち</li>
        <li>おかとまち</li>
        <li>こうじまち</li>
    </ul>
    @elseif ($id == 2)
    <div class="parent">
        <h2 class="name"> 1.この地名はなんて読む?</h2>
        <img src="https://d1khcm40x1j0f.cloudfront.net/quiz/d876208414d51791af9700a0389b988b.png" alt="むかいなだ">

        <ul>
            <li id="button1" class="button_style1">むこうひら</li>
            <li id="button2" class="button_style2">むかいなだ</li>
            <li id="button3" class="buttton_style3">むきひら</li>
        </ul>
    </div>

    <h2 class="name"> 2.この地名はなんて読む?</h2>
    <img src="https://d1khcm40x1j0f.cloudfront.net/quiz/51e91a5c0b3bc7d6bef3b4c02d6c553d.png" alt="みつぎ">
    <ul>
        <li>みつぎ</li>
        <li>みよし</li>
        <li>おしらべ</li>
    </ul>

    <h2 class="name"> 3.この地名はなんて読む?</h2>
    <img src="https://d1khcm40x1j0f.cloudfront.net/quiz/93c494f3017e03085dae7e63a85baed9.png" alt="かなやま">
    <ul>
        <li>ぎやま</li>
        <li>ぎんざん</li>
        <li>かなやま</li>
    </ul>
    @endif

</body>