<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Workspace extends Model
{
    use HasFactory;

    public function user(){
        return $this->hasOne(User::class);
    }

    public function tableName(){
        return $this->hasMany(TableName::class);
    }
}
