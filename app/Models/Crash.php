<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crash extends Model
{
    use HasFactory;

    protected $table = 'crashes';
    protected $fillable = ['images', 'name', 'surname', 'phone', 'email', 'date', 'contactType', 'message', 'recontactType', 'confirmTerm', 'ip', 'reviewConfirm', 'created_at', 'updated_at'];

    protected $casts = [
        'images' => 'array',
    ];
}
