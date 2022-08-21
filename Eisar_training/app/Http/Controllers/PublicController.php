<?php

namespace App\Http\Controllers;

use App\Models\UserCompany;
use Illuminate\Http\Request;
use App\Models\City;

class PublicController extends Controller
{
    public function index()
    {
        return view('company.index', [
            'companies' =>
            UserCompany::filter(request(['city']))->latest()->paginate(6)->withQueryString(),
            'cities' => City::all()
        ]);
    }
    public function show(UserCompany $company)
    {
        return view('company.show', [
            'company' => $company
        ]);
    }
}
