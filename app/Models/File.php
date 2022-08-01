<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = [
        'name',
        'file_path',
        'faculity_name',
        'document_type',
        'subject_name',
        'description',
        'uploaded_by'
    ];
}
