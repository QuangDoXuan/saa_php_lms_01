<?php

namespace App\Exports;

use App\Models\Admin;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromQuery;
class AdminsExport implements FromCollection
{
    private $query;
    private $type;
    // public function __construct($query, $type)
    // {
    //     $this->query = $query;
    //     $this->type = $type;
    // }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Admin::all();
    }

    public function view(): View
    {
        $keyword = "%{$this->query}%";
        return view('admin/user/index', [
            'users' => Admin::with('role')->where('name', 'LIKE', $keyword)->paginate(5)
            // 'users' => Admin::where([
            //     ['name', 'like', $this->query],['role_id', '=', $this->type]
            //     ])->get()
        ]);
    }

    public function query()
    {
        $keyword = "%{$this->query}%";
        return Admin::query()->where('name', 'LIKE', $keyword)->with('role')->paginate(5);
    }
}
