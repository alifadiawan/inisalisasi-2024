<?php

namespace App\Livewire;

use Rappasoft\LaravelLivewireTables\Views\Filters\MultiSelectFilter;
use Rappasoft\LaravelLivewireTables\DataTableComponent;

use App\Models\FileManager;
use App\Models\User;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Columns\DateColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\ImageColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;
use Rappasoft\LaravelLivewireTables\Views\Filters\SelectFilter;
use Rappasoft\LaravelLivewireTables\Views\Filters\TextFilter;

class TaskTable extends DataTableComponent
{
    protected $model = FileManager::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setSearchPlaceholder('Search...');
        $this->setPerPage(10);
        $this->setPerPageAccepted([10, 25, 50, 100]);
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
            Column::make("Nama Tugas", "subTask.task_name")
                ->searchable()
                ->sortable(),
            Column::make("Nama Mahasiswa", "user.name")
                ->searchable()
                ->sortable(),
            Column::make("Nama Kelompok", "user.kelompok")
                ->searchable()
                ->sortable()
                ->collapseOnMobile(),
            DateColumn::make("Batas Pengumpulan", "subTask.task_due")
                ->inputFormat('Y-m-d H:i:s')
                ->outputFormat('d M H:i:s')
                ->sortable()
                ->collapseOnMobile(),
            DateColumn::make("Dikumpulkan pada", "created_at")
                ->outputFormat('d M H:i:s')
                ->sortable()
                ->collapseOnMobile(),
            LinkColumn::make("Actions", "file_path")
                ->title(fn($row) => 'View')
                ->location(
                    fn($row) => url('#')
                )
                ->attributes(fn($row) => [
                    'loading' => 'lazy',
                    'data-bs-toggle' => "modal",
                    'data-bs-target' => '#exampleModal' . $row->id,
                ])
                ->sortable()
                ->collapseOnMobile(),
        ];
    }
}
