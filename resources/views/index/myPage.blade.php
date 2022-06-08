<x-app-layout>
    <x-slot name="header">
            {{ __('マイページ') }}
    </x-slot>
    <!DOCTYPE html>
    <html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
        <title>KSNACKSTORE</title>
    </head>
    <style>
    .bg-gray-100 {
  --tw-bg-opacity: 1;
  background-color: rgb(243 244 246 / var(--tw-bg-opacity));
} 
</style>
    <body>
        <div class="myPage_box">
            <h1>お客様情報</h1>
            
            <div class='e_box'>
                @foreach($info as $a)
                @csrf
                <p class="left">名前　　　　　</p>
                <p class="right">{{ $a->name }}</p>
            </div>
            <div class='e_box'>
                <p class="left">フリガナ　　</p>
                <p class="right">{{ $a->kana }}</p>
            </div>
            <div class='e_box'>
                <p class="left">メールアドレス</p>
                <p class="right">{{ $a->email }}</p>
            </div>
            <div class='e_box'>
                <p class="left">郵便番号　　　</p>
                <p class="right">{{ $a->address_num }}</p>
            </div>
            <div class='e_box'>
                <p class="left">都道府県　　　</p>
                <p class="right">{{ $a->prefectures }}</p>
            </div>
            <div class='e_box'>
                <p class="left">市町村,番地　　</p>
                <p class="right">{{ $a->address1 }}</p>
            </div>
            <div class='e_box'>
                <p class="left">建物名,部屋番号</p>
                <p class="right">{{ $a->address2 }}</p>
                
            </div> 
            <div class='dd'>
                <button class="myPage_button" onclick="location.href='{{ route('edit', ['id'=>$a->id]) }}'">編集</button>
            </div>
            @endforeach
        </div>
    </body>
</x-app-layout>