<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Category extends Model
{
    use SoftDeletes;
    protected $table='categories';
    protected $fillable=['name'];

    public function books(){
        return $this->hasMany(Book::class,'category_id');
    }
}
