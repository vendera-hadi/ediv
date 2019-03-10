<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
  public function scopeCompany($query)
  {
      return $query->where('type', 'company');
  }

  public function scopeHome($query)
  {
      return $query->where('type', 'home');
  }
}
