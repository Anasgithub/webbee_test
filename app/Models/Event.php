<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

	public function eventWorkshop()
    {
        return $this->hasMany(Workshop::class, 'event_id');
    }
}
