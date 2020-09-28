<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stanza extends Model
{
    protected $table = "stanze"; // richiamo il nome della tabella
    protected $fillable = ["room_number", "floor", "beds"]; //campi da riempire nel DB, passati dat form
}
