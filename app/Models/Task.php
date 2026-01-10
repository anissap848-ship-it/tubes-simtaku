<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    // Tambahkan baris ini untuk memberikan izin simpan data
    protected $fillable = [
        'user_id',
        'title',
        'description',
        'priority',
        'deadline'
    ];
}
