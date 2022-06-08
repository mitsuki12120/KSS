<x-app-layout>
    <x-slot name="header">
            {{ __('お気に入り一覧') }}
    </x-slot>
    <style>
    .bg-gray-100 {
  --tw-bg-opacity: 1;
  background-color: rgb(243 244 246 / var(--tw-bg-opacity));
} 
</style>
    <section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-20">
      <h1 class="text-2xl font-medium title-font mb-4 text-gray-900">My Favorite</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base"></p>
    </div>
    <div class="flex flex-wrap -m-4">
        @foreach($products as $product)
      <div class="p-4 lg:w-1/4 md:w-1/2">
        <div class="h-full flex flex-col items-center text-center">
          <img alt="team" class="flex-shrink-0 rounded-lg w-full h-57 object-cover object-center mb-4" src="{{ $product->path.$product->file }}">
          <div class="w-full">
            <h2 class="title-font font-medium text-lg text-gray-900">{{ $product->name }}</h2>
            <h3 class="text-gray-500 mb-3">{{ $product->price }}円</h3>

          </div>
        </div>
      </div>
      @endforeach
    </div>
    
  </div>
</section>
</x-app-layout>

