<?php

namespace App\Filament\Widgets;

use App\Models\Book;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class TotalBooks extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('Total Books', Book::count())
                ->description('All books in the system')
                ->descriptionIcon('heroicon-o-book-open')
                ->color('success'),
        ];
    }
}
