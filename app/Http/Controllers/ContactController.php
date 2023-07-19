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
        $sort_by = $request->input('sort_by', null);

        // If sort_by is null, do not sort contacts
        if ($sort_by === null) {
            $contacts = $this->getContacts();
        } else {
            // Sort contacts based on the provided $sort_by value
            // Implement your sorting logic here
            // For example, if you want to sort by name:
            if ($sort_by === 'name') {
                $contacts = $this->sortContactsByName();
            } elseif ($sort_by === 'phone') {
                // If you want to sort by phone number, implement the corresponding logic
                $contacts = $this->sortContactsByPhone();
            } else {
                // Handle invalid sort_by values here, or provide a default sorting logic
                // For now, let's just return all contacts without sorting
                $contacts = $this->getContacts();
            }
        }

        $companies = $company->pluck();

        return view('contacts.index', compact('contacts', 'companies'));
    }

    public function create()
    {
        return view('contacts.create');
    }

    public function show(Request $request, $id)
    {
        $contacts = $this->getContacts();
        abort_if(!isset($contacts[$id]), 404);
        $contact = $contacts[$id];
        return view('contacts.show')->with('contact', $contact);
    }

    protected function getContacts()
    {
        return [
            1 => ['id' => 1, 'name' => 'Name1', 'phone' => '123456789'],
            2 => ['id' => 2, 'name' => 'Name2', 'phone' => '234567890'],
            3 => ['id' => 3, 'name' => 'Name3', 'phone' => '345678901'],
        ];
    }

    // Implement sorting functions based on your requirements
    protected function sortContactsByName()
    {
        // Sorting logic based on name
        // Replace this with your actual sorting implementation
        $contacts = $this->getContacts();
        ksort($contacts);
        return $contacts;
    }

    protected function sortContactsByPhone()
    {
        // Sorting logic based on phone
        // Replace this with your actual sorting implementation
        $contacts = $this->getContacts();
        asort($contacts);
        return $contacts;
    }
}
