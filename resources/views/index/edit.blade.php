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
        <div class="edit_box">
            <h1>お客様情報変更</h1>
            
            <form action="{{ route('update')}}" method="POST" id="new">
            @foreach($info as $a)
            @csrf
            <input type="hidden" name="id" id="inp" value="{{$a->id}}">
            <div class='name'>
            <label class="inp" for="inp">
                <input type="text" name="name" id="inp" value="{{$a->name}}">
                <span class="label">名前</span>
                <span class="focus-bg"></span>
            </label>
            </div>
            <div class='kana'>
            <label class="inp" for="inp">
                <input type="text" name="kana" id="inp" value="{{$a->kana}}">
                <span class="label">フリガナ</span>
                <span class="focus-bg"></span>
            </label>
            </div>
            <div class='email'>
            <label class="inp" for="inp">
                <input  type="text" name="email" id="inp" value="{{$a->email}}">
                <span class="label">メールアドレス</span>
                <span class="focus-bg"></span>
            </label>
            </div>
            <div class='address_num'>
            <label class="inp" for="inp">
            <input  type="text" name="address_num" id="inp" value="{{$a->address_num}}">
                <span class="label">郵便番号</span>
                <span class="focus-bg"></span>
            </label>
            </div>
            <div class='prefectures'>
            <label class="inp" for="inp">
            <input  type="text" name="prefectures" id="inp" value="{{$a->prefectures}}">
                <span class="label">都道府県</span>
                <span class="focus-bg"></span>
            </label>
            </div>
            <div class='address1'>
            <label class="inp" for="inp">
            <input  type="text" name="address1" id="inp" value="{{$a->address1}}">
                <span class="label">市町村,番地</span>
                <span class="focus-bg"></span>
            </label>
            </div>
            <div class='address2'>
            <label class="inp" for="inp">
            <input  type="text" name="address2" id="inp" value="{{$a->address2}}">
                <span class="label">建物名,部屋番号</span>
                <span class="focus-bg"></span>
            </label>
            </div>
@endforeach
            <div class='edit_flex'>
            <button type="submit" class="update">更新</button>
            </div>
            </form>
        </div>
    </body>

</x-app-layout>
