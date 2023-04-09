<?php

namespace App\Filament\Widgets;

use App\Models\Attendance;
use App\Models\Department;
use Filament\Widgets\StatsOverviewWidget\Card;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class StatsOverviewWidget extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('All Attendance', Attendance::all()->count()),
            Card::make('All Department', Department::all()->count()),
        ];
    }
}
