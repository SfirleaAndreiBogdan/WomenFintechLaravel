<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SuccesStories extends Model
{
    protected $table ='success_stories';

    protected $fillable = ['id','title','story','member_id'];

    public function member(){
        return $this->belongsTo(Members::class,'member_id');
    }

}
