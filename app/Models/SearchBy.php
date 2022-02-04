<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SearchBy extends Model
{
    use HasFactory;
    protected $table = 'search_by';
    protected $fillable = [
        'search_by',
    ];
}
