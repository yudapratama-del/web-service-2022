<?php

namespace App\Http\Controllers;
use App\Models\Soal;
use Illuminate\Http\Request;

class SoalController extends Controller
{
    public function index()
    {
        $informasi = Soal::all();
       return view('soal/index', compact('informasi'));
    }
    public function create()
    {
       return view('soal/create');
    }
    public function store(Request $request)
    {
        Soal::create($request->all());
        return redirect('info-soal');
    }
}
