<x-app-layout>
    <x-slot name="header">
            {{ __('商品一覧ページ') }}
    </x-slot>
    <!DOCTYPE html>
    <head>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/1e9c7111c7.js" crossorigin="anonymous"></script>
    <script type='text/javascript' src="{{ asset('js/index.js') }}"></script>
    
    </head>
<style>
    .bg-gray-100 {
  --tw-bg-opacity: 1;
  background-color: rgb(243 244 246 / var(--tw-bg-opacity));
} 
</style>

        <body class="antialiased">
            <form method="GET" action="{{ route('search') }}" class="d-flex">
                <div class="input-group">
                    <input type="search" class="input" name="search" placeholder="Search" autocomplete="off" value="@if (isset($search)) {{ $search }} @endif">
                    <button class="button--submit"  type="submit" >検索</button>
                </div>
            </form>

            <form method="GET" action="{{ route('cart') }}">
                @csrf
                <button type="submit" class="cart_button" style="margin-left:1400px; margin-top:30px;">カートへ</button>
                <input type="hidden" name="val1" id="1">
                <input type="hidden" name="val2" id="2">
                <input type="hidden" name="val3" id="3">
                <input type="hidden" name="val4" id="4">
                <input type="hidden" name="val5" id="5">
                <input type="hidden" name="val6" id="6">
                <input type="hidden" name="val7" id="7">
                <input type="hidden" name="val8" id="8">
                
            </form>
            
            <section class="text-gray-600 body-font">
                <div class="container px-5 py-24 mx-auto">
                    <div class="flex flex-wrap -m-4">
                        @foreach($products as $product)
                        <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                            
                            <a class="block relative h-49 rounded overflow-hidden">
                                <img class="object-cover object-center w-full h-full block" src="{{ asset($product->path.$product->file) }}">
                            </a>
                            <div class="mt-4">
                                <div class="button_flex">
                                    
                                    <button class="add_button" name="data[]" value="{{$product->p_id}}">カートに追加</button>
                                    @if($product->fav_flg == 0)
                                    <button class="fa-regular fa-heart fav_button" style="font-size:25px; margin-left:10px;color:black;" id="{{$product->p_id}}" value="0"></button>
                                    
                                    @endif
                                    @if($product->fav_flg == 1)
                                    <button class="fa-regular fa-heart fav_button" style="font-size:25px; margin-left:10px;color:red; " id="{{$product->p_id}}" value="1"></button>
                                    
                                    @endif
                                </div>
                                <h2 class="text-gray-900 title-font text-lg font-medium" style="margin-top:15px">{{ $product->name }}</h2>
                                <p class="mt-1">{{ $product->price }}円</p>
                            </div>
                        </div>
                        @endforeach
            </section>
            <footer>
            @include('index.footer')
            </footer>
        </body>
    </html>
</x-app-layout>
