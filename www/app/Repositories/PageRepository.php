<?php


namespace App\Repositories;


use App\Models\Page;
use Illuminate\Support\Facades\DB;

class PageRepository
{
    public $model;

    /**
     * UserRepository constructor.
     */
    public function __construct(Page $model)
    {
        return $this->model = $model;
    }

    // Get data by id
    public function findByID($id)
    {
        return $this->model->findorFail($id);
    }

    // Create new recoard
    public function create($params)
    {
      //  
    }

    // Update recoard
    public function update($params, $id)
    {
        return $this->findById($id)->update($params);
        // $page = DB::table('pages')->whereId($id)->limit(1) 
        // ->update($params);
        // return $page;
    }

    public function renderHtmlTable($params) 
    {
        $tableData = $this->filter($params);
    
        return view('admin.page.table', compact('tableData'))->render();
    }


    public function filter($params)
    {

        return $this->model
            ->latest()
            ->paginate(config('constants.PER_PAGE'), ['*'],'page',!empty($params['page'])? $params['page']:'')
            ->setPath($params['path']);           
    }

}
