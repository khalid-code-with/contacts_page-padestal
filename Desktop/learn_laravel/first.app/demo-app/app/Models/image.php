<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    // Table name
    protected $table = "images";

    // Columns that are mass assignable
    protected $fillable = ['path', 'created_at', 'updated_at'];
}
