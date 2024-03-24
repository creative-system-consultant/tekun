<div
    class="flex px-1 py-4 text-sm font-medium text-gray-500 border-b-2 cursor-pointer hover:border-indigo-200 hover:text-indigo-700 whitespace-nowrap"
    :class="{'border-b-2 border-indigo-500 text-indigo-600': active === {{ $index }}}"
    @click.prevent="active = {{ $index }}" {{ $attributes }}
>
    {{ $title }}
</div>
