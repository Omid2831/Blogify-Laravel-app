<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    /** @use HasFactory<\Database\Factories\EmployerFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'website'
    ];

    /**
     * Get all jobs for this employer
     */
    public function jobs()
    {
        return $this->hasMany(Job::class);
    }
}
