<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return Contact::query()
            ->orderBy('name')
            ->get(['id', 'name', 'email', 'phone', 'company']);
    }
}