<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
	/**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'emails';
    //
    protected $fillable = [ 'email', 'status' ];
}
