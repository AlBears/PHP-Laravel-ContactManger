<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Contact;

class ContactsController extends Controller
{
    private $limit = 5;
    public function index(Request $request)
    {
      if ($group_id = ($request->get('group_id'))){
        $contacts = Contact::where('group_id', $group_id)->paginate($this->limit);
      } else {
        $contacts = Contact::paginate(10);
      }
      return view('contacts.index', ['contacts' => $contacts]);
    }

    public function create()
    {
      return view('contacts.create');
    }
}
