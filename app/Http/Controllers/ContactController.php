<?php

namespace App\Http\Controllers;

use App\Repositories\CompanyRepository;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function __construct(protected CompanyRepository $company)
    {

    }


    public function index(CompanyRepository $company, Request $request) 
    {

        dd($request->sort_by);
        // $companies = [
        //   1 => ['name' => 'Company1', 'phone' => '123456789'],
        //    2 => ['name' => 'Company2', 'phone' => '234567890'],
        // ];
        $companies = $company->pluck();
        $contacts = $this->getContacts();
        return view('contacts.index', compact('contacts', 'companies'));

    }

    public function create()
    {

        return view('contacts.create');
    }

    public function show($id)

    {

        $contacts = $this->getContacts();
        abort_if(!isset($contacts[$id]), 404);
        $contact = $contacts[$id];
        return view('contacts.show')->with('contact', $contact);
    }

    protected function getContacts() {
        return [
            1 => ['id' => 1, 'name' => 'Name1', 'phone' => '123456789'],
            2 => ['id' => 2, 'name' => 'Name2', 'phone' => '234567890'],
            3 => ['id' => 3, 'name' => 'Name3', 'phone' => '345678901'],
        ];
    
    }

}
