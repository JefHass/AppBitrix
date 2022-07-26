<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Http;

class ContactController extends Controller
{
    public function meuscontatos(){
        $contacts = Contact::all();


        return view('meuscontatos', ['contacts'=> $contacts]);
    }
    public function create(){

        return view('contacts.formContato');
    }

    public function index(){

        return view('pagina1');
    }
    public function store(Request $request){

        $contact= new Contact;

        $contact->cName=$request->cName;
        $contact->cLastName=$request->cLastName;
        $contact->cEmail=$request->cEmail;
        $contact->cPhone=$request->cPhone;

        $contact->save();

        $url = 'https://desafiobr.bitrix24.com.br/rest/1/f0esdj8w65yv1e1r/crm.contact.add?fields[NAME]='.$request->cName.'&fields[LAST_NAME]='.$request->cLastName.'&fields[PHONE][0][VALUE]='.$request->cPhone.'&fields[EMAIL][0][VALUE]='.$request->cEmail;

        Http::post($url);


        return redirect('https://c924-45-237-111-47.sa.ngrok.io/meuscontatos')->with('msg', 'Contato criado com sucesso!');

    }

    public function show($id){
        $contact=Contact::findOrFail($id);
        return view('contacts.show', ['contact' => $contact]);

    }

    public function destroy($id){

        Contact::findOrFail($id)->delete();


        return redirect('/meuscontatos')->with('msg', 'Contato deletado com sucesso!');

    }

    public function edit($id) {

        $contact = Contact::findOrFail($id);

        return view('contacts.edit', ['contact'=>$contact]);
    }

    public function update(Request $request){

        Contact::findOrFail($request->id)->update($request->all());

        return redirect('/meuscontatos')->with('msg', 'Contato editado com sucesso!');
    }




}

