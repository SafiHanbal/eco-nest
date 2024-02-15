<x-layout>
  <x-card class="mb-4 px-4 py-2">
    <div class="flex items-center justify-between">

      <h2 class="mb-4 text-xl font-medium">{{ $product->name }}</h2>
      <p class="mb-4 text-xl font-medium">${{ $product->price }}</p>
    </div>
    <p class="mb-4 text-slate-700">{!! nl2br($product->description) !!}</p>

    <x-button class="w-full">
      Buy Now
    </x-button>
  </x-card>
</x-layout>
