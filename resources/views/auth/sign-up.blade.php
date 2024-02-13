<x-layout>
  <x-card class="mx-auto mt-8 w-[450px] px-6 py-4">
    <h1 class="mb-2 text-lg font-semibold">Sign Up</h1>

    <form action="{{ route('sign-up') }}" method="POST" class="mb-4">
      @csrf

      <x-form-input label="Name" placeholder="Enter Name" name="name"
        class="mb-4" />
      <x-form-input label="Phone" placeholder="Enter Phone Number"
        name="phone" type="number" class="mb-4" />
      <x-form-input label="Address" placeholder="Enter Address" name="address"
        class="mb-4" />
      <x-form-input label="Password" placeholder="Enter Password"
        name="password" type="password" class="mb-4" />
      <x-form-input label="Confirm Password" placeholder="Re-enter Password"
        name="confirmPassword" type="password" class="mb-4" />

      <x-button type="submit">Sign Up</x-button>
    </form>

    <p
      class="border-t-1 border border-x-0 border-b-0 border-solid border-slate-400 pt-2">
      Already have an Account. Click
      <a href="{{ route('login-view') }}"
        class="text-blue-600 underline">here.</a>
    </p>
  </x-card>
</x-layout>
