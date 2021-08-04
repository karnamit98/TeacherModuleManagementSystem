<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaughtModule extends Model
{
    use HasFactory;

    /**
     * Table's Name in database for this model.
     */
    public $table = "taught_module";

    

    /**
     * Returns the teacher.
     */
    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    /**
     * Returns the module.
     */
    public function module()
    {
        return $this->belongsTo(Module::class);
    }


}
