<?php

namespace App\Exports;

use App\Models\ContactUs;
use PhpOffice\PhpSpreadsheet\Style\Font;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ContactUsExport implements FromCollection, WithHeadings, WithStyles
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return ContactUs::get(['name','company','email','contact_number','subject_line','message']);
    }
    public function headings(): array
    {
        // Replace these headings with your desired field titles
        return [
            'Name',
            'Company',
            'Email',
            'Contact Number',
            'Subject Line',
            'Message'
        ];
    }
    public function styles(Worksheet $sheet)
    {
        return [
            1 => ['font' => ['bold' => true]],
        ];
    }
}
