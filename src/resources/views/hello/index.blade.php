<!-- 継承レイアウト -->
@extends('layouts.helloapp')

@section('title','index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <p>ここが本文のコンテンツです。</p>
    <p>必要なだけ記述出来ます。</p>
    <ul>
        @each('components.item',$data,'item')
    </ul>

    @component('components.message')
        @slot('msg_title')
        kamo
        @endslot

        @slot('msg_content')
        ryu
        @endslot
    @endcomponent
@endsection