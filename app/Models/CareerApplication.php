<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CareerApplication extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'position',
        'experience',
        'message',
        'resume_path',
        'status',
        'is_read',
    ];

    /**
     * Get the attributes that should be cast.
     */
    protected function casts(): array
    {
        return [
            'is_read' => 'boolean',
        ];
    }
}
