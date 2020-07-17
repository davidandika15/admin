<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = 'guru';

    protected $guarded = [];

    protected $fillable = ['file',
                            'namaguru',
                            'matapelajaran',
                            'waktu'];
    
}
