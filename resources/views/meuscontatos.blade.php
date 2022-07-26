{{-- <link rel="stylesheet" href="{{ url ('assets/css/app.css') }}"> --}}
<title>Contatos</title>
<link rel="stylesheet" href='assets/css/botao.css'>
<main>
    <div class="container-fluid">
        <div class="row">
            @if(session('msg'))
                <p class="msg">{{session('msg')}}</p>
            @endif

        </div>

    </div><h1>Meus contatos</h1>
    <a href='/' style="text-decoration:none"><button class="btn third">Inicio</button></a>
<a href='/contacts/formContato' style="text-decoration:none"><button class="btn third">Novo</button></a>
<div id="contacts-container" class="col-md-12">
    <div id="cards-container" class="row">
        @foreach($contacts as $contact)
        <a href="/contacts/{{ $contact->id }}" style="text-decoration:none" class="btn third">
            <div >
            <div class="card-body">
            <h4 class="card-title">{{$contact->cName}} {{$contact->cLastName}}</h4>
            <h4 class="phone">{{$contact->cPhone}}</h4>
            <h4 class="email">{{$contact->cEmail}}</h4>
        </div>
        </div>
        </a>


        @endforeach

    </div>
    </div>

    </main>
