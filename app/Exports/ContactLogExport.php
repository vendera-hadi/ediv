<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use App\Models\ContactLog;
use DB;

class ContactLogExport implements FromCollection, WithHeadings, ShouldAutoSize
{

    public function headings(): array
    {
        return [
            'Time',
            'Name',
            'Phone',
            'Message'
        ];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return ContactLog::select(DB::raw('DATE_FORMAT(created_at, "%d %M %Y")'), 'name', 'phone', 'message')->get();
    }
}
