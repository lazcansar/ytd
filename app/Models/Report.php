<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $table = 'reports';
    protected $fillable = ['images', 'name', 'surname', 'phone', 'email', 'contactType', 'message', 'confirmTerm', 'ip', 'reviewConfirm', 'created_at', 'updated_at'];

    protected $casts = [
        'images' => 'array',
    ];
}
