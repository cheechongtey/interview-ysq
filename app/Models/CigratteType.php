<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CigratteType extends Model
{
    use HasFactory;

    protected $table = 'cigratte_type';

    protected $fillable = [
      'name',
    ];
}
