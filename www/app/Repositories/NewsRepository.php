<?php


namespace App\Repositories;

use App\Models\News;
use Illuminate\Support\Facades\DB;

class NewsRepository
{
    public $model;

    /**
     * UserRepository constructor.
     */
    public function __construct(News $model)
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

        // return $this->create($params);
     }

    // Update recoard
    public function update($params, $id)
    {
        return $this->findByID($id)->update($params);
    }

   // Store new recoard
    public function store($params)
    {
        return $this->model->create($params);
    }

    public function renderHtmlTable($params) 
    {
        $tableData = $this->filter($params);
        return view('admin.news.table', compact('tableData'))->render();
    }
    public function filter($params)
    {

        return $this->model
            ->latest()
            ->paginate(config('constants.PER_PAGE'), ['*'],'page',!empty($params['page'])? $params['page']:'')
            ->setPath($params['path']);           
    }

}
