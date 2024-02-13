<x-layout>
  <x-card class="mx-auto mt-16 w-[450px] px-6 py-4">

    <h1 class="mb-2 text-lg font-semibold">Login</h1>

    @if (session('error'))
      {{ session('error') }}
    @endif

    <form action="{{ route('login') }}" method="POST" class="mb-4">
      @csrf

      <x-form-input class="mb-4" label="Phone" placeholder="Enter Phone Number"
        name="phone" type="number" />
      <x-form-input class="mb-4" label="Password" placeholder="Enter Password"
        name="password" type="password" />

      <x-button type="submit">Login</x-button>
    </form>

    <p
      class="border-t-1 border border-x-0 border-b-0 border-solid border-slate-400 pt-2">
      Don't have an Account. Click
      <a href="{{ route('sign-up-view') }}"
        class="text-blue-600 underline">here.</a>
    </p>
  </x-card>
</x-layout>
