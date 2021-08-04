<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;
    
    /**
     * Table's Name in database for this model.
     */
    public $table = "faculty";

    /**
     * Fillable properties of faculty
     */
    protected $fillable = ['faculty_name'];

    /**
     * Returns teachers in the faculty.
     */
    public function teachers(){
        return $this->hasMany(Teacher::class); 
    }

     /**
     * Returns modules in the faculty.
     */
    public function modules(){
        return $this->hasMany(Module::class); 
    }

    
}
