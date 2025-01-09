<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    protected $table = 'members';

    protected $fillable = ['id','name','email','profession','company','linkedin_url','status'];

    public function successStory(){
        return $this->hasMany(SuccesStories::class,'member_id');
    }
}
