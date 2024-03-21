<div class="px-3 py-2 text-sm font-medium text-gray-500 rounded-md cursor-pointer hover:text-gray-700"
    x-on:click.prevent="active = {{ $index }}"
    x-bind:class="{'bg-indigo-100 text-indigo-700': active === {{ $index }} }"
    {{ $attributes }}
>
    {{ $title }}
</div>