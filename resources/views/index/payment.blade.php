<x-app-layout>
    <x-slot name="header">
            {{ __('注文完了ページ') }}
    </x-slot>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
        <title>Document</title>
    </head>
    <style>
            body{
                background-image: url(/img/sora.webp);
                background-position: center center;
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;
            }
        </style>    
        <body>
            <div class="main_box">
                <h1>THANK YOU </h1>
                <div class="text_box">
                    <p>
                        この度は K SNACK STORE でのお買い物ありがとうございます。
                    </p>
                    <p>
                        ご注文情報をお送りしますのでご確認ください。
                    </p>
                    <p>
                        発送手続き完了後、お知らせメールを再度配信いたしますので、しばらくお待ちください。
                    </p>
                </div>
                <button class="pay_button" onclick="location.href='{{ route('dashboard') }}'">トップページへ</button>
            </div>
            
        </body>
    </html>
</x-app-layout>

