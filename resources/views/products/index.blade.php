<x-layout>

  @foreach ($products as $product)
    <x-card class="mb-4 flex items-center justify-between px-4 py-2">
      <div class="w-3/4">
        <h3 class="font-semibold">{{ $product->name }}</h3>
        <p class="text-sm text-slate-600">
          {{ $product->summary }}
        </p>
      </div>
      <div>
        <p class="mb-2 text-end text-2xl font-semibold">${{ $product->price }}
        </p>
        <a href="{{ route('products.show', $product) }}"
          class="text-blue-700 underline">See Prodduct →</a>
      </div>
    </x-card>
  @endforeach

</x-layout>
