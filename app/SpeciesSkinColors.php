<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SpeciesSkinColors extends Model
{
  protected $fillable = ['species_id', 'skin_color_id'];
}
