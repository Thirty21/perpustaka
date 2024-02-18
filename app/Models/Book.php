<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Book extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'stock', 'image'];

    public function borrowings()
    {
        return $this->hasMany(Borrowing::class);
    }

    protected static function boot()
    {
        parent::boot();
        static::updating(function ($model) {
            if ($model->isDirty('image') && ($model->getOriginal('image') != null)) {
                Storage::disk('public')->delete($model->getOriginal('image'));
            }
        });
    }

    public function getRouteKeyName(): string
    {
        return 'title';
    }
}
