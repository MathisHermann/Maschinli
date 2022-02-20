<a
    href="{{ route('show-maintenances') }}"
   class="{{ $attributes['selected'] ? 'bg-cyan-800 text-white' : 'text-cyan-100 hover:text-white hover:bg-cyan-600' }} group flex items-center px-2 py-2 text-base leading-6 font-medium rounded-md"
   aria-current="page">
    <div class="mr-4 flex-shrink-0 h-6 w-6 text-cyan-200">
        @svg('fluentui-wrench-16-o')
    </div>
    {{ __('Arbeiten') }}
</a>
