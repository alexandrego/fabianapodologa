<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestDashboardController extends Controller
{
    public function index()
    {
        return response('Bem-vindo à Test Dashboard! Middleware TestMiddleware ativo.', 200);
    }
}
