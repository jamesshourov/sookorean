<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportUser implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return User::all();
    }
    public function headings(): array
    {
        return [
            'id',
            'name',
            'profile_pic',
            'profile_pic_type',
            'date_of_birth',
            'korean_level',
            'carrot_points',
            'social_type',
            'social_id',
            'device_type',
            'device_token',
            'premium',
            'email',
            'email_verified_at',
            'password',
            'role',
            'status',
            'remember_token',
            'created_at',
            'updated_at',
        ];
    }
}
