<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>KSNACKSTORE</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            .main_box{
                margin-left:440px;
                margin-top:200px;
            }
            
            body{
                background-image: url(/img/sora.webp);
                background-position: center center;
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;
            }
            
            .welcome_text{
                font-size:5em;
                line-height:0.95em;
                font-weight:bold;
                color: #FFF;
                text-shadow: 
                    0 0 0.05em #F06292,
                    0 0 0.10em #F06292,
                    0 0 0.15em #F06292,
                    0 0 0.30em #F06292;
                filter: saturate(80%);
                -webkit-background-clip: text;
                -webkit-box-reflect: below -0.25em -webkit-gradient(linear, left bottom, left top, from(rgba(255, 255, 255, .6)), to(transparent));
                margin-left:-130px;
            }
            .my_page{
                text-decoration:none;
                color:black;
            }

            a {
                text-decoration:none;
                margin-left:49px;
            }

            body {
                font-family: 'Nunito', sans-serif;
            }

            /* From uiverse.io by @adamgiebl */
            .deco {
            --green: #F06292;
            font-size: 15px;
            padding: 0.7em 2.7em;
            letter-spacing: 0.06em;
            position: relative;
            font-family: inherit;
            border-radius: 0.6em;
            overflow: hidden;
            transition: all 0.3s;
            line-height: 1.4em;
            border: 2px solid ;
            color:#F06292;
            
            }

            .mm{
                margin-left:280px;
                margin-top:170px;
            }

            .p1,.p2{
                margin-bottom:30px ;
                margin-top:60px;
            }

            

        </style>
    </head>
    <body class="main_box">
        <div class="main_text">
            <h2 class="welcome_text">WELCOME to K SNACK STORE</h2>
        </div>
        <div class="mm">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        
                        <a href="{{ url('/dashboard') }}" class="my_page">マイページ</a>
                    @else
                        <p class="p1">アカウントをお持ちの方はこちら</p>
                        <a href="{{ route('login') }}" class="deco">ログイン</a>

                        @if (Route::has('register'))
                            <p class="p2">アカウントをお持ちでない方はこちら</p>
                            <a href="{{ route('register') }}" class="deco">新規登録</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </body>
</html>
