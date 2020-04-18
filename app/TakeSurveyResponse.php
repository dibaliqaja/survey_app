<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TakeSurveyResponse extends Model
{
    protected $guarded = [];

    public function takeSurvey()
    {
        return $this->belongsTo(TakeSurvey::class);
    }
}
