<?php

namespace App\Http\Controllers;

use App\Models\AccountType;
use Illuminate\Http\Request;

class AccountTypeController extends Controller
{

    public function index()
    {
        $account = AccountType::where('is_active', '1')->get();
        return view('crud')->with("account",$account);
        // return AccountType::all();
    }

    public function getList(){

        return AccountType::all();
    }


    public function create()
    {

    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'created_by' => 'required',
        ]);
        AccountType::create($validated);
        $account = AccountType::all();
        return view('crud')->with("account",$account);
    }


    public function show(AccountType $accountType)
    {
        //
    }


    public function edit(AccountType $accountType)
    {
        //
    }


    public function update(Request $request, AccountType $accountType)
    {
        //
    }


    public function destroy(AccountType $accountType)
    {
        //
    }
}
