<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Datatables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
    public function index()
    {
        // dd(session()->all());
        return view('admin.dashboard.index');
    }

    public function datatable()
    {
        return view('admin.dashboard.datatable');
    }

    // public function dataView(Request $request)
    // {

    //     if ($request->ajax()) {
    //         return (new Table(new Article))
    //             ->setColumns()
    //             ->setParams()
    //             ->setQuery()
    //             ->setResult()
    //             ->setTotal()
    //             ->setResponse();
    //     }
    //     return view('admin.post.index', ['posts' => (new Article())->postCountInformation()]);
    // }

    // public function getDatabaseData(Request $request)
    // {

    //     if ($request->ajax()) {
    //         dd($request);
    //     }
    //     $Datatables = new Datatables;
    //     $users = $Datatables->renderHtml();
    //     return $users;
    // }
}
