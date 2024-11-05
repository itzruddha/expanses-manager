<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NoteBook extends Model
{
    //

    protected $fillable = [
        'title',
        'type',
        'amount',
        'date',
        'note',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
