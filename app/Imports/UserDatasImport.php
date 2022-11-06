<?php

namespace App\Imports;

use App\Models\Admin\UserData;
use Maatwebsite\Excel\Concerns\ToModel;

class UserDatasImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new UserData([
            //
        ]);
    }
}