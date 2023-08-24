<?php

namespace App\Filament\Filters;

use Filament\Forms\Components\Select;
use Filament\Tables\Filters\SelectFilter as BaseSelectFilter;

class DeferredSelectFilter extends BaseSelectFilter
{
    protected function getFormField(): Select
    {
        return parent::getFormSelectComponent()
            ->stateBindingModifiers(['defer']);
    }
}
