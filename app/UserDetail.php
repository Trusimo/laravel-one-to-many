<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    public function UserDetail() {
        return $this->belongsTo("App\User")
    ;}
}
