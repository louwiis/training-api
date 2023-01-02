<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    protected $fillable = [
        'name',
        'startDate',
        'endDate',
        'maxParticipants',
        'price',
    ];

    public function participants()
    {
        return $this->hasMany('App\Models\TrainingHasParticipant', 'training_id');
    }
}
