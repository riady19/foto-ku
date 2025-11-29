<?php

namespace App\Filament\Resources\Authors\Schemas;

use App\Models\User;
use App\Models\Author;
use Illuminate\Support\Str;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\Layout\Stack;
use Filament\Schemas\Components\Utilities\Set;

class AuthorForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //  Stack::make([
                // Select::make('user_id')
                //     ->label('User Name')
                //     ->options(User::query()->pluck('email', 'id'))
                //     ->default(null),
                Select::make('name')
                    ->options(User::query()->pluck('name', 'name'))
                // TextInput::make('name')
                 ->live(onBlur: true)
                    ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state)))
                    ->label('Nama Photographer')
                    ->required(),
                TextInput::make('occupation')
                    ->default(null),
               FileUpload::make('avatar')
                    ->image()
                    ->imageEditor()
                     ->avatar()
                     ->disk('public')
                        ->directory('image')
                        ->visibility('public')
                    ->required(),
                TextInput::make('slug')
                    ->required(),
            ])->columns(1);

                //  ]);
        //     ->contentGrid([
        //     'md' => 2,
        //     'xl' => 3,
        // ]);
    }
}
