<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public $timestamps = false;
    protected $table = 'events'; // Nama tabel di Workbench
protected $fillable = [
    'name', 
    'Location', 
    'description', 
    'event_date', 
    'categories_id'
];

}