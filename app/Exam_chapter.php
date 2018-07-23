<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam_chapter extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'exam_chapters';

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
    protected $fillable = ['title', 'exam_subject_id'];


    public function subject(){
        return $this->belongsTo(Exam_subject::class, 'exam_subject_id');
    }

//    public function cls(){
//        return $this->subject()->cls();
//    }

    
}
