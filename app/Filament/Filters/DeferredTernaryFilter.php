<?php

namespace App\Filament\Filters;

use Filament\Forms\Components\Select;
use Filament\Tables\Filters\TernaryFilter as BaseTernaryFilter;

class DeferredTernaryFilter extends BaseTernaryFilter
{
    protected function getFormField(): Select
    {
        return parent::getFormField()
            ->stateBindingModifiers(['defer']);
    }
}
