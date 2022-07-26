<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8"/>
    
    <title> Empresa </title>
    <script>
        function goBack() {
            window.history.back()
        }
        </script>
    <link rel="stylesheet" href="{{ url ('assets/css/estilo.css') }}">
    <h1>Editando: {{$company->eName}} {{$company->eLastName}} </h1>
 
 <div class="container">
 
   <div id="formEmpresa">
    <form action="/companies/update/{{$company->id}}" method="post" id="formempresa">   
        @csrf
        @method('PUT')
    <fieldset>
        <fieldset class="grupo">
            <div class="campo">
                <label for="eName">Nome</label>
                <input type="text" id="eName" name="eName" style="width: 10em" value="{{$company->eName}}" >
            </div>
            <div class="campo">
                <label for="eLastName">Sobrenome</label>
                <input type="text" id="eLastName" name="eLastName" style="width: 10em" value="{{$company->eLastName}}">
            </div>
        </fieldset>
        
        <div class="campo">
            <label for="eEmail">E-mail</label>
            <input type="text" id="eEmail" name="eEmail" style="width: 20em" value="{{$company->eEmail}}" >
        </div>
        <div class="campo">
            <label for="ePhone">Telefone</label>
            <input type="text" id="ePhone" name="ePhone" style="width: 10em" value="{{$company->ePhone}}" >
        </div>

        <input type="submit" class="btn btm-primary"  value="Cadastrar">
    
</fieldset>
</form>
    <body>
    <button onclick="goBack()">Cancelar</button>
    </body>
</div>
</div>


    
    