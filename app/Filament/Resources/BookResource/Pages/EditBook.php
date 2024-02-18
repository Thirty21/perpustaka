<?php

namespace App\Filament\Resources\BookResource\Pages;

use Filament\Actions;
use Illuminate\Support\Facades\Storage;
use App\Filament\Resources\BookResource;
use App\Models\Book;
use Filament\Resources\Pages\EditRecord;

class EditBook extends EditRecord
{
    protected static string $resource = BookResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()->after(
                function (Book $record) {
                    if ($record->image) {
                        Storage::disk('public')->delete($record->image);
                    }
                }
            ),
        ];
    }
}
