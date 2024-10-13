<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'surname', 'email', 'phone', 'subject', 'message', 'ip', 'created_at', 'updated_at'];
}
