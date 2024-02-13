<div {{ $attributes }}>
  <label for="{{ $name }}">{{ $label }}</label>
  <input type="{{ $type }}" placeholder="{{ $placeholder }}"
    name="{{ $name }}" value="{{ old($name) }}"
    class="block w-full rounded-md border border-slate-800 px-2 py-1">

  @error($name)
    <p class="mt-0.5 text-sm text-red-700">
      {{ $message }}
    </p>
  @enderror
</div>
