@props(['align' => 'right', 'contentClasses' => 'dropdown-menu'])

@php
switch ($align) {
    case 'left':
        $alignmentClasses = 'dropdown-menu-start';
        break;
    case 'top':
        $alignmentClasses = ''; // Bootstrap handles top alignment automatically
        break;
    case 'right':
    default:
        $alignmentClasses = 'dropdown-menu-end';
        break;
}
@endphp

<div class="dropdown" x-data="{ open: false }" @click.outside="open = false">
    <button class="btn btn-secondary dropdown-toggle" type="button" @click="open = !open" aria-expanded="false">
        {{ $trigger }}
    </button>

    <div x-show="open"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 scale-95"
         x-transition:enter-end="opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-75"
         x-transition:leave-start="opacity-100 scale-100"
         x-transition:leave-end="opacity-0 scale-95"
         class="dropdown-menu {{ $alignmentClasses }} {{ $contentClasses }}"
         style="display: none;"
         @click="open = false">
        {{ $content }}
    </div>
</div>
