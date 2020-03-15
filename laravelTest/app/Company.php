<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\Employee;

class Company extends Model
{
    protected $fillable = ["name", "email", "logo", "website"];

    public function employee()
    {
        return $this->hasMany(Employee::class);
    }
}
