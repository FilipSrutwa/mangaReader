<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChaptersPage extends Model
{
    use HasFactory;
    protected $table = 'chapters_pages';
    protected $primaryKey = 'id';
}
