<?php

namespace App\Filament\PewartaFoto\Resources\Authors;

use App\Filament\PewartaFoto\Resources\Authors\Pages\CreateAuthor;
use App\Filament\PewartaFoto\Resources\Authors\Pages\EditAuthor;
use App\Filament\PewartaFoto\Resources\Authors\Pages\ListAuthors;
use App\Filament\PewartaFoto\Resources\Authors\Pages\ViewAuthor;
use App\Filament\PewartaFoto\Resources\Authors\Schemas\AuthorForm;
use App\Filament\PewartaFoto\Resources\Authors\Schemas\AuthorInfolist;
use App\Filament\PewartaFoto\Resources\Authors\Tables\AuthorsTable;
use App\Models\Author;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class AuthorResource extends Resource
{
    protected static ?string $model = Author::class;

    protected static string | UnitEnum | null $navigationGroup = 'User Fotografer';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return AuthorForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return AuthorInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AuthorsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListAuthors::route('/'),
            'create' => CreateAuthor::route('/create'),
            'view' => ViewAuthor::route('/{record}'),
            'edit' => EditAuthor::route('/{record}/edit'),
        ];
    }
}
