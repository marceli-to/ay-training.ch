@props(['image', 'alt' => ''])
<picture class="w-full">
  <source media="(min-width: 768px)" srcset="/media/{{ $image }}.png">
  <source srcset="/media/{{ $image }}-sm.png">
  <img src="/media/{{ $image }}-sm.png" alt="{{ $alt }}" title="{{ $alt }}" height="1024" width="1024" class="w-full aspect-square">
</picture>