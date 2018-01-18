<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cl extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cls';

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
    protected $fillable = ['title'];

    public function subjects(){
        return $this->hasMany(Subject::class, 'cls_id');
    }

    
}
