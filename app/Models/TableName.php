<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TableName extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function User()
    {
        return $this->hasOne(User::class);
    }

    public function ToDoList()
    {
        return $this->hasMany(ToDoList::class);
    }
}
