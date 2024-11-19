<?php

namespace App\Http\Controllers\Web\Contact;

use App\Http\Controllers\Controller;
use App\Http\Requests\Contact\StoreContactRequest;
use App\Http\Requests\Contact\UpdateContactRequest;
use Illuminate\Http\Request;

use App\Models\Contact\Contact;
use Redirect;
use Response;
use Symfony\Component\HttpFoundation\RedirectResponse;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::all();
        return view('contact.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contact.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreContactRequest $request)
    {
        $data = $request->validated();

        Contact::create($data);

        return redirect()->route('contacts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id )  
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
        public function edit(Contact $contact)
        {
            return view('contact.edit', compact('contact'));
        }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContactRequest $request, Contact $contact)
    {
        $data = $request->validated();

        $contact->update($data);

        return redirect()->route('contacts.index');        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect()->route('contacts.index');
    }
}
