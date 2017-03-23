<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    protected $table = 'questions';        // gak wajib kalau nama tabel sama dengan nama model
    protected $primaryKey = 'id';        // gak wajib kalau nama kolom primary key sama dengan 'id'
    public $timestamps = true;
    public $softDeletes = true;

    protected $fillable = ['question'];

    public function options() {
        // return $this->hasMany('App\Options', 'questionsid', 'id');
        return $this->hasMany('App\Options');
    }
}
