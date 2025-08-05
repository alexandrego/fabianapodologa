<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Acesso;
use Illuminate\Http\Request;

class AdminAccessController extends Controller
{
    public function index()
    {
        // Buscar os acessos mais recentes, paginados
        $acessos = Acesso::orderBy('created_at', 'desc')->paginate(20);

        // Buscar pacientes ordenados por nome
        $pacientes = \App\Models\Patient::orderBy('name')->get();

        // Mapear para identificar o tipo de dispositivo
        $acessos->getCollection()->transform(function ($acesso) {
            $acesso->device_type = $this->identifyDevice($acesso->user_agent);
            return $acesso;
        });

        return view('admin.access.index', compact('acessos', 'pacientes'));
    }

    private function identifyDevice($userAgent)
    {
        $userAgent = strtolower($userAgent);

        if (strpos($userAgent, 'mobile') !== false) {
            if (strpos($userAgent, 'tablet') !== false || strpos($userAgent, 'ipad') !== false) {
                return 'Tablet';
            }
            return 'Mobile';
        }

        return 'Desktop';
    }
}
