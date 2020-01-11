<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';
    protected $fillable = ['id', 'eventname', 'description', 'eventdate', 'eventvenue', 'eventimage'];
    protected $primaryKey = 'id';
    protected $with = ['images'];
    protected $dates = ['created_at', 'updated_at'];
    public function images()
    {
        return $this->hasMany(EventImage::class, 'event_id');
    }
}