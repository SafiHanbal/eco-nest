<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eco Nest</title>

    @vite('resources/css/app.css')
  </head>

  <body class="bg-slate-200">
    {{-- Navbar --}}
    <nav
      class="flex items-center justify-between bg-slate-900 px-4 py-4 text-white">
      <a href="{{ route('products.index') }}">
        Eco Nest
      </a>

      <ul>
        @if (auth()->user())
          <form action="{{ route('logout') }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Logout</button>
          </form>
        @else
          <a href="{{ route('login-view') }}">Login</a>
        @endif
        <li></li>
      </ul>
    </nav>

    @if (session('success'))
      <div
        class="mx-auto mt-4 w-[700px] rounded-md border-l-4 border-green-700 bg-white px-4 py-2 shadow-md">
        <h2 class="text-lg font-semibold text-green-700">Success!</h2>
        <p class="text-sm">{{ session('success') }}</p>
      </div>
    @endif

    @if (session('error'))
      <div
        class="mx-auto mt-4 w-[700px] rounded-md border-l-4 border-red-700 bg-white px-4 py-2 shadow-md">
        <h2 class="text-lg font-semibold text-red-700">Error!</h2>
        <p class="text-sm">{{ session('error') }}</p>
      </div>
    @endif
    {{-- Container --}}
    <main class="mx-auto my-6 w-[800px]">
      {{ $slot }}
    </main>
  </body>

</html>
