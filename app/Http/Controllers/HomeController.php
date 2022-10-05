<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        if (trim($request->utm_source) !== '') {
            session(['utm_source', $request->utm_source]);
        }

        if (trim($request->utm_campaign) !== '') {
            session(['utm_campaign', $request->utm_campaign]);
        }

        if (trim($request->utm_content) !== '') {
            session(['utm_content', $request->utm_content]);
        }

        if (trim($request->utm_medium) !== '') {
            session(['utm_medium', $request->utm_medium]);
        }

        if (trim($request->gclid) !== '') {
            session(['gclid', $request->gclid]);
        }


        return view('welcome');
    }
}
