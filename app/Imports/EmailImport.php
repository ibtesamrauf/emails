<?php

namespace App\Imports;

use App\Email;
use Maatwebsite\Excel\Concerns\ToModel;

class EmailImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        v($row);
        // return new Email([
        //     'email' => $row[0];
        // ]);
    }
}
