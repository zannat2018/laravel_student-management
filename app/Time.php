<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
  protected $table = 'times';
  protected $fillable=['time'];
  protected $primarykey='time_id';
  public $timestamps=false;
}
