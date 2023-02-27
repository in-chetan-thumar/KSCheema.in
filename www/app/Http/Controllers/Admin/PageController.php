<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PageRequest;
use App\Models\Page;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $table = resolve('page-repo')->renderHtmlTable($this->getParamsForFilter($request));
        return view('admin.page.page_list', compact('table'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [];
        try {
            $pagedata = Page::whereId($id)->select('id', 'title', 'meta_keywords', 'meta_description', 'route_name')->first();

            $data['error'] = false;
            $data['view'] = view('admin.page.offcanvas', compact('pagedata'))->render();
            return response()->json($data);
        } catch (\Exception $e) {
            $data['error'] = true;
            $data['message'] = $e->getMessage();
        }
        return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PageRequest $request, $id)
    {

        $data = $params = [];
        DB::beginTransaction();
        try {

            // Update page
            $params = [];
            $params['title'] = $request->title;
            $params['meta_keywords'] = $request->meta_keywords;
            $params['meta_description'] = $request->meta_description;

            $page = resolve('page-repo')->update($params, $id);

            if (!empty($page)) {

                $data['error'] = false;
                $data['message'] = 'Page update successfully.';
                $data['view'] = resolve('page-repo')->renderHtmlTable($this->getParamsForFilter($request));

                DB::commit();
                return response()->json($data);
            }
        } catch (\Exception $e) {
            DB::rollBack();
            $data['error'] = true;
            $data['message'] = $e->getMessage();
            dd($data['message']);
            return response()->json($data);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function getParamsForFilter(Request $request)
    {
        $previousUrl = parse_url(url()->previous());
        $params = [];

        if (request()->routeIs('page.index') || !isset($previousUrl['query'])) {
            $params['query_str'] = $request->query_str ?? '';
            $params['page'] =  $request->page ?? 0;
            $params['path'] =  \Illuminate\Support\Facades\Request::fullUrl();

        } else {
            parse_str($previousUrl['query'], $params);
            $params['path'] =  url()->previous();
            // dd($params , $previousUrl);
        }
        return $params;
    }
}
