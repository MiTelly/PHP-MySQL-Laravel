<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Customer;


class CustomersController extends Controller
{
    public function index() {
    }

    public function create() {
        return view('admin.customers.create');
    }

    public function store(Request $request) {
        DB::table('main')->truncate();
        Customer::create($request->all());
        return response()->json(['message' => 'Post created successfully!'], 200);
        return $request->all();
    }
}
