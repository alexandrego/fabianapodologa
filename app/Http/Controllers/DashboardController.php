<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class DashboardController extends Controller
{
    public function index()
    {
        $acessos = DB::table('acessos')->orderBy('created_at', 'desc')->get();
        return view('dashboard.index', compact('acessos'));
    }
}
