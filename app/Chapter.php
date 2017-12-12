<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'chapters';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'subject_id'];


    public function subject(){
        return $this->belongsTo(Subject::class);
    }

//    public function cls(){
//        return $this->subject()->cls();
//    }

    
}
