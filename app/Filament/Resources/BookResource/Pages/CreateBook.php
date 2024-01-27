<?php

namespace App\Filament\Resources\BookResource\Pages;

use App\Filament\Resources\BookResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;

class CreateBook extends CreateRecord
{
    protected static string $resource = BookResource::class;

    // public function form(Form $form): Form
    // {
    //     return $form
    //         ->schema([
    //             TextInput::make('title')
    //                 ->required()
    //                 ->maxLength(255),
    //             RichEditor::make('description')
    //                 ->required()
    //                 ->columnSpan(2),
    //             TextInput::make('stock')->required(),
    //         ]);
    // }
}
