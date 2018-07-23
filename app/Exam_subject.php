<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam_subject extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'exam_subjects';

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
    protected $fillable = ['title', 'competetive_exam_id'];

    public function exam(){
        return $this->belongsTo(Competetive_exam::class, 'competetive_exam_id');
    }

    public function chapters(){
        return $this->hasMany(Exam_chapter::class);
    }
}
