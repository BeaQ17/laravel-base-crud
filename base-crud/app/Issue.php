<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    protected $fillable = ["cover", "title", "issue_number", "year", "publisher", "writer", "colorist"];
}
