<?php

namespace App;

use App\Event;
use Illuminate\Database\Eloquent\Model;

class EventImage extends Model
{
    protected $fillable = ['event_id', 'image'];
    public function event()
    {
        return $this->belongsTo('Event', 'event_id');
    }
}