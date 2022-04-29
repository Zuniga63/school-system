<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TownDistrict extends Model
{
  use HasFactory;

  /**
   * The table associated with model
   * @var string 
   */
  protected $table = 'town_district';

  /**
   * Recupera la conexión con el pueblo al que 
   * pertenece el barrio.
   */
  public function town()
  {
    return $this->hasOne(Town::class);
  }
}
