<x-app-layout>
    <x-slot name="header">
            {{ __('カート一覧') }}
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
    <script>
        function deleteMessage() {
            confirm("本サイトは全て後払い決済となっております。OKボタンを押していただくと、登録時に入力した住所に商品をお送りいたします。");
        }
    </script>
        

    
    <section class="text-gray-600 body-font">
            <div class="container px-5 py-10 mx-auto" style="padding-top:60px;">
            <div class="flex items-center lg:w-3/5 mx-auto border-b pb-10 mb-10 border-gray-200 sm:flex-row flex-col">
                
                <div class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-10 inline-flex items-center justify-center rounded-full bg-pink-100 text-pink-500 flex-shrink-0">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="sm:w-16 sm:h-16 w-10 h-10" viewBox="0 0 24 24">
                        <img class="object-cover object-center w-full h-full block" src="{{ '/'.$product->path.$product->file }}">
                    </svg>
                    
                </div>
                <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
                
                    <h2 class="text-gray-900 text-lg title-font font-medium mb-2"></h2>
                    <p class="leading-relaxed text-base">円</p>
                    <a class="mt-3 text-pink-500 inline-flex items-center" onclick="location.href='{{ route('') }}'" style="color: red;">削除</a>
                    <!-- <form action="/delete" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ $product->p_id }}">
                        <input type="hidden" name="val1" value="{{ $val1 }}">
                        <input type="hidden" name="delete_flg1" value="1">
                        <input type="submit" name="bot1" value="削除" style="color: red;cursor:pointer"  class="mt-3 text-pink-500 inline-flex items-center">
                    </form>                     -->
                    
                </div>
            </div>
            </div>
            <div class="container px-5 py-10 mx-auto">
            <div class="flex items-center lg:w-3/5 mx-auto border-b pb-10 mb-10 border-gray-200 sm:flex-row flex-col">
                
                <div class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-10 inline-flex items-center justify-center rounded-full bg-pink-100 text-pink-500 flex-shrink-0">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="sm:w-16 sm:h-16 w-10 h-10" viewBox="0 0 24 24">
                        <img class="object-cover object-center w-full h-full block" src="/img/honeyjery.jpeg">
                    </svg>
                    
                </div>
                <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
                
                    <h2 class="text-gray-900 text-lg title-font font-medium mb-2">ハニーゼリー</h2>
                    <p class="leading-relaxed text-base">130円</p>
                    <form action="/delete" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ $product->p_id }}">
                        <input type="hidden" name="val2" value="{{ $val2 }}">
                        <input type="hidden" name="delete_flg2" value="1">
                        <input type="submit" value="削除" style="color: red;cursor:pointer" class="mt-3 text-pink-500 inline-flex items-center">
                    </form> 
                    
                </div>
            </div>
            </div>
            <div class="button_box">
                <button class="cart_button" type="button" onclick=history.back()>買い物を続ける</button>
                <button class="cart_button" onclick="location.href='{{ route('payment'), deleteMessage() }}'">注文する</button>
            </div>
        </div>
        
    </section> 
    </body>
    </html>
</x-app-layout>