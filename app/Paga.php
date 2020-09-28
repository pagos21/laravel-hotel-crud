<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paga extends Model
{
  protected $fillable = ["status", "price"]; //campi da riempire nel DB, passati dat form
  protected $table = "pagamenti"; // richiamo il nome della tabella

}
