@props(['image', 'name', 'email'])
<div {{ $attributes->merge(['class' => 'xl:col-span-6 grid grid-cols-12 gap-x-16 sm:gap-x-24 lg:gap-x-32 xl:gap-36 items-center mb-32 lg:mb-48 xl:mb-56']) }}>
  <figure class="col-span-3 lg:col-span-3">
    <x-media.picture image="{{ $image }}" alt="{{ $name }}" class="rounded-full bg-teal p-2" />
  </figure>
  <div class="col-span-9 lg:col-span-9">
    <x-heading.h3 class="!mb-0">
      {{ $name}}
    </x-heading.h3>
    <a href="mailto:{{ $email }}" class="underline underline-offset-4 decoration-1 hover:no-underline hover:text-teal">
      {{ $email }}
    </a>
    {{ $slot }}
  </div>
</div>