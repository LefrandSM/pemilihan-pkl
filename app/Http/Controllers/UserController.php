<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Landing Page'
        ];

        return view('landing_page/index', $data);
    }
    public function rpl()
    {
        $data = [
            'title' => 'Perusahaan Rekayasa Perangkat Lunak'
        ];

        return view('landing_page/rpl', $data);
    }
    public function tkj()
    {
        $data = [
            'title' => 'Perusahaan Teknik Komputer dan Jaringan'
        ];

        return view('landing_page/tkj', $data);
    }
    public function mm()
    {
        $data = [
            'title' => 'Perusahaan Multimedia'
        ];

        return view('landing_page/mm', $data);
    }
}
