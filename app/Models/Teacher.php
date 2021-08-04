<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    /**
     * Table's Name in database for this model.
     */
    public $table = "teacher";

    /**
     * Returns the faculty that the teacher belongs to.
     */
    public function faculty()
    {
        return $this->belongsTo(Faculty::class);
    }

    /**
     * Returns the modules taught by the teacher.
     */
    public function taughtModules()
    {
        return $this->hasMany(TaughtModule::class);
    }

}
