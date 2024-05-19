<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cigrattes extends Model
{
    use HasFactory;

    protected $table = 'cigrattes';

    protected $fillable = [
      'name',
      'img_path'
    ];

    public function cigratte_categories() {
      return $this->hasMany(CigratteCatogories::class, 'cigratte_id', 'id');
    }
}
