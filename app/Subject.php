<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'subjects';

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
    protected $fillable = ['title', 'cls_id'];

    public function cls(){
        return $this->belongsTo(Cl::class, 'cls_id');
    }



    public function chapters(){
        return $this->hasMany(Chapter::class);
    }
}
