<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MangasChapter extends Model
{
    use HasFactory;
    protected $table = 'mangas_chapters';
    protected $primaryKey = 'id';
}
