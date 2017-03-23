<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Options extends Model
{
    protected $table = 'options';        // gak wajib kalau nama tabel sama dengan nama model
    protected $primaryKey = 'id';        // gak wajib kalau nama kolom primary key sama dengan 'id'
    public $timestamps = true;
    public $softDeletes = true;
    
    protected $fillable = [
        'questions_id',
        'option',
        'count'
    ];

    public function questions(){
        return $this->belongsTo('App\Questions');
    }
}
