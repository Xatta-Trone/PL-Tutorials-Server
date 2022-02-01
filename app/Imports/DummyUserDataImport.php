<?php

namespace App\Imports;

use App\Models\Admin\DummyUserData;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DummyUserDataImport implements ToModel, WithHeadingRow
{
    /**
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        $merit = $row['merit'] ?? $row['merit_position'] ?? null;
        return new DummyUserData([
            // 'merit' => is_numeric($merit) == false ? sprintf("%04d", (int) substr($merit, 1)) : sprintf("%04d", $merit),
            'merit' => is_numeric($merit) == false ? $merit : sprintf("%04d", $merit),
            'student_id' => $row['student_id'] ?? $row['student_no'] ?? $row['Student_Id'] ?? null,
            'student_name' => $row['student_name'] ?? $row['name_english'] ?? $row['name'] ?? null,
            'hall_name' => $row['hall_name'] ?? $row['hall'] ?? null,
        ]);
    }

    public function onError(\Throwable $e)
    {
        echo 'Data Not inserted because duplicate student id found';

        throw $e;
    }

    public function chunkSize(): int
    {
        return 500;
    }
}
