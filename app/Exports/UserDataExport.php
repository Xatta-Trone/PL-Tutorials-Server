<?php

namespace App\Exports;

use App\Models\Admin\UserData;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class UserDataExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return UserData::all();
    }

    public function headings(): array
    {
        return [
            '#',
            'merit',
            'student_id',
            'student_name',
            'hall_name',
            'status',
            'created_at',
            'updated_at',
        ];
    }
}
