<?php

namespace App\Http\Controllers\Site;

use App\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{

    /**
     * Display the specified resource.
     *
     * @param $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $page = Page::findBySlug($slug);

        if ($page == null){
            return abort(404);
        }

        return view('site.page.show')
            ->with('page', $page);
    }
}
