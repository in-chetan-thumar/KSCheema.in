<?php

namespace App\Exports;

use App\Models\JobApplications;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Style\Alignment;

class JobApplicationExport implements FromView, WithEvents,WithColumnWidths
{

    public $params = [];

    /**
     * JobApplicationExport constructor.
     */
    public function __construct($params)
    {
        $this->params = $params;
    }


    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {
                $event->sheet->getStyle('A1:E1')->applyFromArray([
                    'font' => [
                        'bold' => true
                    ]
                ])->getAlignment()->setVertical(Alignment::VERTICAL_CENTER);
            }
        ];
    }

    public function view(): View
    {
        return view('admin.jobsapplication.excel_export_table', [
            'tableData' => JobApplications::when(!empty($this->params['company']), function ($query) {
                $query->where('company_id', $this->params['company']);
            })->when(!empty($this->params['department']), function ($query) {
                $query->where('job_department_id', $this->params['department']);
            })->get()
        ]);
    }

    public function columnWidths(): array
    {
        return [
            'A' => 30,
            'B' => 50,
            'C' => 30,
            'D' => 30,
            'E' => 30,
        ];
    }
}
