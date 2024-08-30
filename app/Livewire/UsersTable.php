<?php

namespace App\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\User;
use Rappasoft\LaravelLivewireTables\Views\Filters\MultiSelectFilter;
use Illuminate\Contracts\Database\Eloquent\Builder;

class UsersTable extends DataTableComponent
{
    protected $model = User::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function filters(): array
    {
        return [
            MultiSelectFilter::make('Nama Kelompok')
                ->options(
                    User::query()
                        ->orderBy('kelompok')
                        ->get()
                        ->unique('kelompok')
                        ->keyBy('kelompok') // Use 'kelompok' as the key
                        ->map(fn($tag) => $tag->kelompok)
                        ->toArray()
                )
                ->filter(function (Builder $builder, $value) {
                    if (is_array($value)) {
                        // If multiple values are selected, use whereIn
                        $builder->whereIn('kelompok', $value);
                    } else {
                        // If a single value is selected, use where
                        $builder->where('kelompok', $value);
                    }
                }),
        ];
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable()
                ->collapseOnMobile(),
            Column::make("Name", "name")
                ->sortable()
                ->searchable(),
            Column::make("Nim", "nim")
                ->sortable()
                ->searchable(),
            Column::make("Kelompok", "kelompok")
                ->sortable()
                ->searchable(),
            Column::make("Email", "email")
                ->sortable()
                ->collapseOnMobile(),
            Column::make("Created at", "created_at")
                ->sortable()
                ->collapseOnMobile(),
        ];
    }
}
