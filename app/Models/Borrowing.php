<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrowing extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'borrowed_at',
        'returned_at',
        // Other attributes...
    ];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
