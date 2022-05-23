<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    public function lecturer()
    {
      return $this->belongsTo(Lecturer::class);
    }

    public function Course()
    {
        return $this->belongsTo(Course::class);

    }
}
