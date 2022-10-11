<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\View;
use Session;
use Illuminate\Pagination\LengthAwarePaginator;

class PostController extends Controller
{
    public function index(Request $request)
    {
        try{            
            $data = Http::withToken(Session::get('token'))->get($this->api_host.'/api/posts')->json();

            $table = $this->getPaginator($data['data'], $request);
            return view('post.index', compact('table'));
        }
        catch (\Exception $e) {
            // return response()->json(['success' => false, 'http_code' => $e->getCode(), 'message' => $e->getMessage()]);
            return redirect()->route('home'); 
        }
    }

    public function getPaginator($items, $request)
    {
        $total = count($items); // total count of the set, this is necessary so the paginator will know the total pages to display
        $page = $request->page ? $request->page : 1; // get current page from the request, first page is null
        $perPage = 10; // how many items you want to display per page?
        $offset = ($page - 1) * $perPage; // get the offset, how many items need to be "skipped" on this page

        $items = array_slice($items, $offset, $perPage); // the array that we actually pass to the paginator is sliced

        return new LengthAwarePaginator($items, $total, $perPage, $page, [
            'path' => $request->url(),
            'query' => $request->query()
        ]);
    }
}
