<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'subject', 'recipient', 'message' 
    ];

    //
    public function user(){
      return $this->belongsTo(User::class);
    }

    // Extracto
    public function getGetExcerptAttribute(){
      return substr($this->message,0,140);
    }
}
