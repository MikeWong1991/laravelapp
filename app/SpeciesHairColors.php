<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SpeciesHairColors extends Model
{
  protected $fillable = ['species_id', 'hair_color_id'];
}
