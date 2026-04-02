<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Course extends Model
{
    /** @use HasFactory<\Database\Factories\CourseFactory> */
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'title',
        'content',
        'duration',
        'price',
        'sail_price',
        'image',
    ];

    /**
     * Called after the model's booting process is complete.
     */
    protected static function booted(): void
    {
        //
    }

    /**
     * Scope a query to only include high-priced courses.
     */
    public function scopeHighPrice(Builder $query): Builder
    {
        return $query->where('price', '>=', 100);
    }
}
