<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function create()
    {
        return view('contact');
    }
 
    public function store(ContactRequest $request)
    {
        Mail::to('0de135977e-92b957@inbox.mailtrap.io')
            ->queue(new Contact($request->except('_token')));
 
        return view('confirm');
    }
}
