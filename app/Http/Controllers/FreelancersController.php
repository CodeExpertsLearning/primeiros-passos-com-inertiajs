<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class FreelancersController extends Controller
{
    public function index()
    {
        $freelancers = ['John', 'Janne', 'Dev'];

        return Inertia::render('Freelancers/Index', compact('freelancers'));
    }
}
