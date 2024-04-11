<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PermissionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    // public $page_title;
    protected $module_details;
    protected $table_fields;
    protected $page_limit;
    protected $search_keyword;
    public function __construct(Request $request)
    {
        $this->page_limit = 10; //Default Limit Set
        $this->search_keyword = $request->keyword;
        $this->module_details = array(
            'page_title' => 'Permissions',
            'button_title' => 'Permission',
        );

        $this->table_fields = array(
            'id' => 'Id',
            'name' => 'Name',
            'guard_name' => 'Guard Nname',
            'created_at' => 'Added Date',
        );
    }


    public function index()
    {
        $data = [];
        $data['page'] = 1;
        $data['page_limit'] = $this->page_limit;
        $data['fields'] = $this->table_fields;
        $data['module_details'] = $this->module_details;
        $data['keyword'] = $this->search_keyword;
        return view('admin.permissions.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
