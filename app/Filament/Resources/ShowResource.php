<?php

namespace App\Filament\Resources;

use Filament\Tables;
use Filament\Forms\Form;
use App\Models\Borrowing;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use App\Filament\Resources\ShowResource\Pages;
use Filament\Forms\Components\DatePicker;

class ShowResource extends Resource
{
    protected static ?string $model = Borrowing::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                DatePicker::make('borrowed_at')
                    ->required()
                    ->format('d/m/Y'),
                DatePicker::make('returned_at')
                    ->format('d/m/Y')
                    ->required()

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id'),
                TextColumn::make('name'),
                TextColumn::make('borrowed_at')->dateTime('d-m-Y'),
                TextColumn::make('returned_at')->dateTime('d-m-Y'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListShows::route('/'),
            'create' => Pages\CreateShow::route('/create'),
            'edit' => Pages\EditShow::route('/{record}/edit'),
        ];
    }
}
