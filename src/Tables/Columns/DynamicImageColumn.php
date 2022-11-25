<?php

namespace NetTantra\FilamentDynamicColumnTables\Tables\Columns;

use Closure;
use Throwable;
use Illuminate\Support\Facades\Storage;
use Filament\Tables\Columns\ImageColumn;
use Illuminate\View\ComponentAttributeBag;
use Illuminate\Filesystem\FilesystemAdapter;
use Illuminate\Contracts\Filesystem\Filesystem;

class DynamicImageColumn extends ImageColumn
{
}
