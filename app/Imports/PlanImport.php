<?php

namespace App\Imports;

use App\Models\Plan;
use Maatwebsite\Excel\Concerns\ToModel;

class PlanImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Plan([
            'numero' => $row[0],
            'libelle' => $row[1]
        ]);
    }
}
