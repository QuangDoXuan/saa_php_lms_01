<?php

namespace App\Exports;

use App\Models\Admin;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;
class AdminsExport implements FromVỉew
{
    // private $data;
    private $query;

    public function __construct($query)
    {
        // dd($data);
        $this->data = $query;
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //return Admin::all();
        return $this->data;
    }

    public function view(): View
    {
        return view('admin/user/index', [
            'users' => $this->data
        ]);
    }
}
