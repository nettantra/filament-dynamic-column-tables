<?php

namespace NetTantra\FilamentDynamicColumnTables\Tables\Columns;

use Closure;
use stdClass;
use Filament\Tables\Columns\TextColumn;

class DynamicTextColumn extends TextColumn
{
    use Concerns\CanBeDynamic;
}
