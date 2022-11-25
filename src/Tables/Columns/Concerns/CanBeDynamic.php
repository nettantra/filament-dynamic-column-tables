<?php

namespace NetTantra\FilamentDynamicColumnTables\Tables\Columns\Concerns;

use Closure;

trait CanBeDynamic
{
    public function hidden(bool | Closure $condition = true): static
    {
        $resource_slug = "rs";
        $column_hidden = request()->session()->get("{$resource_slug}::columns_hidden::employee.full_name");
        $column_hidden = is_null($column_hidden) ? true : $column_hidden;
        $this->isHidden = $column_hidden;
        return $this;
    }

    public function dynamic(bool | Closure $condition = true): static
    {
        return $this;
    }
}
