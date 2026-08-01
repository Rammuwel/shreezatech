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
        'status',
        'is_read',
        'resume_url',
        'resume_public_id',
        'resume_original_name',
        'resume_size',
    ];

    protected function casts(): array
    {
        return [
            'is_read' => 'boolean',
            'resume_size' => 'integer',
        ];
    }

    public function hasResume(): bool
    {
        return $this->resume_public_id !== null;
    }
}
