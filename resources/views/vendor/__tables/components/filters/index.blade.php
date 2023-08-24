@props([
    'form',
])

<div
    {{ $attributes->class(['filament-tables-filters-form space-y-6']) }}
    x-data
>
    {{ $form }}

    <div class="text-end space-x-4">
        <x-tables::link
            wire:click="$refresh"
            tag="button"
            size="sm"
        >
            {{ __('Apply') }}
        </x-tables::link>

        <x-tables::link
            wire:click="resetTableFiltersForm"
            color="danger"
            tag="button"
            size="sm"
        >
            {{ __('tables::table.filters.buttons.reset.label') }}
        </x-tables::link>
    </div>
</div>
