<?php

namespace App\Http\Controllers\Site;

use App\Page;
use App\Product;
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
    public function show($slug = '/')
    {
        if ($slug == 'home'){
            $slug = '/';
        }

        $data = collect();

        $page = Page::findBySlug($slug);

        switch ($slug){
            case '/':
            case 'home':
                $view = 'welcome';
                break;
            case 'tarieven':
                $data->products = Product::get();
                $view = 'site.services';
                break;
            case 'over-ons':
                $view = 'site.about';
                break;
            case 'contact':
                $view = 'site.contact';
                break;
            default:
                $view = 'site.default';
        }

        if ($page == null){
            return abort(404);
        }

        return view($view)
            ->with('data', $data)
            ->with('page', $page);
    }
}
