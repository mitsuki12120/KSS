<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
<body>
        <style>
                        body{
                background-image: url(/img/sora.webp);
                background-position: center center;
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;
            }

            p{
                text-align: center;
            }
        </style>
        <p>新規登録</p>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- kana -->
            <div>
                <x-label for="kana" :value="__('kana')" />

                <x-input id="kana" class="block mt-1 w-full" type="text" name="kana" :value="old('kana')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>            

            <!-- address nam -->
            <div>
                <x-label for="address_num" :value="__('address_num')" />

                <x-input id="address_num" class="block mt-1 w-full" type="text" name="address_num" :value="old('address_num')" required autofocus />
            </div> 

            <!-- prefectures -->
            <div>
                <x-label for="prefectures" :value="__('prefectures')" />

                <x-input id="prefectures" class="block mt-1 w-full" type="text" name="prefectures" :value="old('prefectures')" required autofocus />
            </div>   

            <!-- address1 -->
            <div>
                <x-label for="address1" :value="__('address1')" />

                <x-input id="address1" class="block mt-1 w-full" type="text" name="address1" :value="old('address1')" required autofocus />
            </div>    
            
            <!-- address2 -->
            <div>
                <x-label for="addreaddress2ss1" :value="__('address2')" />

                <x-input id="address2" class="block mt-1 w-full" type="text" name="address2" :value="old('address2')" required autofocus />
            </div>                        

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    登録
                </x-button>
            </div>
        </form>
    </body>
    </x-auth-card>
</x-guest-layout>
