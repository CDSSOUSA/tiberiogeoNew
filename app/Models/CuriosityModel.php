<?php

namespace App\Models;

use CodeIgniter\Model;

class CuriosityModel extends Model
{
    /**
     * [Description for getAllCuriosities]
     *
     * @return array
     * 
     */
    public function getAllCuriosities(): array
    {
        $jsonString = file_get_contents(APPPATH. 'Base/category-curiosity.json');
        $dataCategoryCuriosities = json_decode($jsonString, true); 
        return $dataCategoryCuriosities;
    }
}
