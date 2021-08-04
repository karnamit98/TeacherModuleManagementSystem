<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    /**
     * Table's Name in database for this model.
     */
    public $table = "module";

    /**
     * Returns the faculty that the module belongs to.
     */
    public function faculty()
    {
        return $this->belongsTo(Faculty::class);
    }

    /**
     * Returns the teacher who teaches this module.
     */
    public function taughtModules()
    {
        return $this->hasMany(TaughtModule::class);
    }

}
