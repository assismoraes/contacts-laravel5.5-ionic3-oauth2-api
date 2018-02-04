<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateContactRequest;
use App\Http\Requests\EditContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    
    public function create_contact(CreateContactRequest $request) {
        Contact::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'phone' => $request['phone']
        ]);
        return 'success';
    }

    public function edit_contact(EditContactRequest $request) {
        $contact = Contact::find($request['id']);
        $contact->name = $request['name'];
        $contact->email = $request['email'];
        $contact->phone = $request['phone'];
        $contact->save();
        return 'success';
    }

    public function delete_contact($id) {
        Contact::destroy($id);
        return 'success';
    }

    public function search_by_email($search = '') {
        return Contact::where('email', 'LIKE', '%' . $search . '%')->get();
    }

}
