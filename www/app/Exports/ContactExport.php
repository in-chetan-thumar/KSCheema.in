<?php

namespace App\Exports;

use App\Models\Contact;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;

class ContactExport implements FromCollection, WithHeadings, WithMapping, WithEvents
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Contact::all();
    }

    public function map($row): array
    {
        return [
            $row->id,
            $row->fname,
            $row->lname,
            $row->email,
            $row->phone,
            $row->message,
        ];
    }

    public function headings(): array
    {
        return [
            'id',
            'Full Name',
            'Last Name',
            'Email',
            'Phone No.',
            'Message',
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {
                $event->sheet->getStyle('A1:F1')->applyFromArray([
                    'font' => [
                        'bold' => true

                    ]
                ]);
            }
        ];
    }
}
