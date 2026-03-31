<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    // Karena nama tabel di Workbench adalah 'roles'
    protected $table = 'roles';

    protected $fillable = ['role_name'];
    
    // Matikan timestamps jika di Workbench kamu tidak buat kolom created_at/updated_at untuk tabel roles
    public $timestamps = false; 
}