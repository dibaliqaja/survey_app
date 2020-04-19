<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Survey extends Model
{
    protected $guarded = [];

    public function path()
    {
        return url('surveys/' . $this->id);
    }

    public function publicPath()
    {
        return url('takesurveys/'.$this->id.'-'. Str::slug($this->title));
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function takeSurveys()
    {
        return $this->hasMany(TakeSurvey::class);
    }
}
