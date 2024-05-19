<?php

namespace App\Http\Controllers\api\v1;

use App\Models\CigratteType;
use App\Http\Controllers\Controller;
use App\Models\Cigrattes;

class CigrattesController extends Controller
{
  public function index($id)
  {
    try {
      $type_id = $id;
      $cigrattes = Cigrattes::whereHas('cigratte_categories', function ($query) use (&$type_id) {
        if ($type_id !== 'all') {
          $query->where('type_id', $type_id);
        }
      })->get();

      return $cigrattes;
    } catch (e) {
      return [];
    }
  }

  public function cigratteType()
  {
    return CigratteType::all();
  }
}
