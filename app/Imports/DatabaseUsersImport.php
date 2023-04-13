<?php

namespace App\Imports;

use App\Models\DatabaseUser;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DatabaseUsersImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        // dd($row);
        return new DatabaseUser([
            'entry_date' => $row['entry_date'],
            'respondent_code' => $row['respondent_code'],
            'respondent_name' => $row['respondent_name'],
            'province' => $row['province'],
            'district' => $row['district'],
            'districts' => $row['districts'],
            'ward' => $row['ward'],
            'address' => $row['address'],
            'phone' => $row['phone'],
            'email' => $row['email'],
            'gender' => $row['gender'],
            'age' => $row['age'],
            'marital_status' => $row['marital_status'],
            'family_members' => $row['family_members'],
            'education' => $row['education'],
            'occupation' => $row['occupation'],
            'expense' => $row['expense'],
            'source_water' => $row['source_water'],
            'source_energy' => $row['source_energy'],
            'filename' => $row['filename'],
            'status' => $row['status'],
        ]);
    }
}
