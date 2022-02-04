<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;
    protected $table = 'materials';
    protected $fillable = [
        'title',
        'E-book',
        'Audio',
        'Video',
        'Author',
        'Cover-Photo',
        'Subject',
        'ISSN',
        'ISBN',
        'DOIs',
        'Language',
    ];
}
