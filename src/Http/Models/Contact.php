<?php

namespace Prvekariya\Contact\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
  protected $fillable = [
      'name', 'email', 'message',
  ];
}
