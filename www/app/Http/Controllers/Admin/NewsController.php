<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsRequest;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Buglinjo\LaravelWebp\Facades\Webp;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $table = resolve('news-repo')->renderHtmlTable($this->getParamsForFilter($request));
        return view('admin.news.news_list', compact('table'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [];
        try {
            // $newsdata = News::whereId(1)->select('id','title', 'description')->first();

            $data['error'] = false;
            $data['view'] = view('admin.news.offcanvas')->render();
            return response()->json($data);
        } catch (\Exception $e) {
            $data['error'] = true;
            $data['message'] = $e->getMessage();
        }
        return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsRequest $request)
    {
        $data = $params = [];
        DB::beginTransaction();
        try {
            $validator = Validator::make($request->all(), ['image' => 'mimetypes:image/jpeg,image/webp']);
            if ($validator->fails()) {
                $data['error'] = true;
                $data['message'] =  $validator->errors()->first();
                return response()->json($data);
            }

            $webp = Webp::make($request->file('image'))->quality(70);
            $name = Str::random(16) . '.webp';

            if ($webp->save(storage_path('app/public/images/news/' . $name))) {
                $params = [];
                $params['title'] = $request->title;
                $params['description'] = $request->description;
                $params['cover_photo'] = $name;

                $page = resolve('news-repo')->store($params);
                if (!empty($page)) {

                    $data['error'] = false;
                    $data['message'] = 'News Stored successfully.';
                    $data['view'] = resolve('news-repo')->renderHtmlTable($this->getParamsForFilter($request));
                    DB::commit();
                    return response()->json($data);
                }
            }
        } catch (\Exception $e) {
            DB::rollBack();
            $data['error'] = true;
            $data['message'] = $e->getMessage();
            return response()->json($data);
        }
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
            $newsdata = News::whereId($id)->select('id', 'title', 'description')->first();

            $data['error'] = false;
            $data['view'] = view('admin.news.offcanvas', compact('newsdata'))->render();
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
    public function update(NewsRequest $request, $id)
    {
        $data = $params = [];
        DB::beginTransaction();
        try {
            $validator = Validator::make($request->all(), ['image' => 'mimes:png,jpg,webp']);
            // $validator = Validator::make($request->all(),['image'=>'mimetypes:image/webp |max:200'],['image.mimetypes'=>'Select an image type of jpg,png&webp only']);           
            // $validator = Validator::make($request->all(),['image'=>'mimetypes:image/jpeg,image/png,image/webp'],['image.mimetypes'=>'Select an image type of jpg,png&webp only']);           
            if ($validator->fails()) {
                $data['error'] = true;
                $data['message'] =  $validator->errors()->first();
                return response()->json($data);
            }

            // Update page
            $params = [];
            $params['title'] = $request->title;
            $params['description'] = $request->description;
            if ($request->file('image')) {
                $webp = Webp::make($request->file('image'))->quality(70);
                $name = Str::random(16) . '.webp';
                $webp->save(storage_path('app/public/images/news/' . $name));
                $params['cover_photo'] = $name;
            }

            $news = resolve('news-repo')->update($params, $id);
             
            if ($news) {

                $data['error'] = false;
                $data['message'] = 'News update successfully.';
                $data['view'] = resolve('news-repo')->renderHtmlTable($this->getParamsForFilter($request));

                DB::commit();
                return response()->json($data);
            }
            
        } catch (\Exception $e) {
            DB::rollBack();
            $data['error'] = true;
            $data['message'] = $e->getMessage();
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
        try {
            $news = resolve('news-repo')->findById($id);
            if (!empty($news)) {

                $news->delete();
                toastr()->success('News deleted successfully..!');
                return redirect()->route('news.index');
            } else {
                toastr()->error('News not Found.!');
            }
        } catch (\Exception $e) {
            toastr()->error($e->getMessage());
            return redirect()->back();
        }
    }

    public function getParamsForFilter(Request $request)
    {
        $previousUrl = parse_url(url()->previous());
        $params = [];

        if (request()->routeIs('news.index') || !isset($previousUrl['query'])) {
            $params['query_str'] = $request->query_str ?? '';
            $params['page'] =  $request->page ?? 0;
            $params['path'] =  \Illuminate\Support\Facades\Request::fullUrl();
        } else {
            parse_str($previousUrl['query'], $params);
            $params['path'] =  url()->previous();
        }
        return $params;
    }
}
