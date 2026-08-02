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
        'resume_url',
        'resume_public_id',
        'resume_original_name',
        'resume_size',
        'status',
        'is_read',
    ];

    protected function casts(): array
    {
        return [
            'is_read' => 'boolean',
            'resume_size' => 'integer',
        ];
    }
}
