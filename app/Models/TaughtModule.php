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
     * Disables timestamps
     */
    public $timestamps = false;

     /**
     * Fillable properties of taughtModule.
     */
    protected $fillable = ['teacher_id', 'module_id' ];

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
