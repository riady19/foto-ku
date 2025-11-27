<?php

namespace App\Filament\Resources\Authors\Widgets;

use App\Models\Author;
use App\Models\Artikel;
use App\Models\Catagory;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverdashboard extends StatsOverviewWidget
{

    protected function getStats(): array
    {
        $countArtikels = Artikel::count();
        $countKatagory = Catagory::count();
        $countAuthor = Author::count();
        return [
            Stat::make('Jumlah Artikel', $countArtikels . ' post')
           ->description('Jumlah Foto yang telah diposting')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->color('success'),

            Stat::make('Jumlah Catagory', $countKatagory . ' list')
            ->description('Jumlah Catagory yang tersedia')
            ->descriptionIcon('heroicon-m-folder-open')
            ->color('danger'),

            Stat::make('Jumlah Author', $countAuthor . ' Orang')
            ->description('Jumlah author terdaftar')
            ->descriptionIcon('heroicon-m-users')
            ->color('warning'),

        ];
    }

            protected function getHeading(): ?string
        {
            return 'Analytic Dashboard Admin FotoKu';
        }

        protected function getDescription(): ?string
        {
            return 'Analystic Jumlah Foto Published dan Catagory.';

        }


}
