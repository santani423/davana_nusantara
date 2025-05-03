<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TypePaket extends Model
{
    use HasFactory;

    // Gunakan fillable jika hanya ingin mengizinkan field tertentu untuk mass assignment
    // protected $fillable = ['nama_field1', 'nama_field2'];

    // Mengizinkan semua field untuk mass assignment (hati-hati untuk keamanan)
    protected $guarded = [];
 
    
       
}
