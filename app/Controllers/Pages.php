<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function home(): string
    {
        $data['active_page'] = 'home';
        return view('pages/home', $data);
    }

    public function services(): string
    {
        $data['active_page'] = 'services';
        return view('pages/services', $data);
    }
}