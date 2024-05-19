<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CigratteCatogories extends Model
{
    use HasFactory;

    protected $table = 'cigratte_categories';

    protected $fillable = [
      'cigratte_id',
      'type_id'
    ];

    public function cigratte() {
      return $this->belongsTo(Cigrattes::class, 'cigratte_id');
    }

    public function cigratteType() {
      return $this->hasOne(CigratteType::class, 'type_id');
    }
}
