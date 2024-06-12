<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';
    // Mendefinisikan Field Yang Boleh Diisi
    protected $fillable = ['name', 'nim', 'major', 'class', 'courses_id'];

    /**
     * |==================================================================
     * | Laravel Relationship Method:
     * |1. One to One  
     * | -hasOne()       = tabel saat ini meminjamkan id
     * | -belongsTo()     = tabel saat ini MEMINJAM id dri table lain
     * |2. One to Many 
     * | -hasMany()      = tabel saat ini meminjamkan id
     * | -belonsToMany() = tabel saat ini MEMINJAM id dari table lain
     */

    // mendefinisikan relasi ke model course
    public function course(){
        return $this->belongsTo(Course::class, 'courses_id');
    
    }
}
