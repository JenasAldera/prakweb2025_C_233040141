<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $with = ['category', 'author'];

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function scopeFilter(Builder $query, array $filters): void
    {
        $query->when($filters['search'] ?? false, function (Builder $query, $search) {
            $query->where(fn (Builder $query) =>
                $query->where('title', 'like', '%' . $search . '%')
                      ->orWhere('body', 'like', '%' . $search . '%')
            );
        });

        $query->when($filters['category'] ?? false, function (Builder $query, $category) {
            $query->whereHas('category', fn (Builder $query) =>
                $query->where('slug', $category)
            );
        });

        $query->when($filters['author'] ?? false, function (Builder $query, $author) {
            $query->whereHas('author', fn (Builder $query) =>
                $query->where('username', $author)
            );
        });
    }
}
