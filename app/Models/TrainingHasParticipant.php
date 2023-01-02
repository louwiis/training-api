<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrainingHasParticipant extends Model
{
    protected $fillable = [
        'training_id',
        'firstName',
        'lastName',
        'company',
    ];

    public function training()
    {
        return $this->belongsTo('App\Models\Training', 'training_id');
    }
}
