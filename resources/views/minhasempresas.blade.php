{{-- <link rel="stylesheet" href="{{ url ('assets/css/app.css') }}"> --}}
<title>Empresas</title>
<link rel="stylesheet" href="assets/css/botao.css">
<main>
    <div class="container-fluid">
        <div class="row">
            @if(session('msg'))
                <p class="msg">{{session('msg')}}</p>
            @endif
        </div>
    </div><h1>Minhas Empresas</h1>
    <a href='/' style="text-decoration:none"><button class="btn third">Inicio</button></a>
<a href='/companies/formEmpresa' style="text-decoration:none"><button class="btn third">Novo</button></a>
<div id="companies-container" class="col-md-12">
    <div id="cards-container" class="row">
        @foreach($companies as $company)
        <a href="/companies/{{ $company->id }}" class="btn third">
        <div >
            <div class="card-body">
            <h2 class="card-title">{{$company->eName}} {{$company->eLastName}}</h2>
            <h3 class="phone">{{$company->ePhone}}</h3>
            <h3 class="email">{{$company->eEmail}}</h3>

        </div>
        </div>
        </a>


        @endforeach

    </div>
    </div>

    </main>
