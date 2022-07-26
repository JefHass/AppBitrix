<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8"/>
    <style class="form">
        * {
        margin: 0;
        padding: 0;
        }

    fieldset {
        border: 0;
        }

        body, input, select, textarea, button {
        font-family: sans-serif;
        font-size: 1em;
        }

        .grupo:before, .grupo:after {
        content: " ";
        display: table;
        }

        .grupo:after {
        clear: both;
        }

        .campo {
        margin-bottom: 1em;
        }

        .campo label {
        margin-bottom: 0.2em;
        color: #666;
        display: block;
        }

        fieldset.grupo .campo {
        float:  left;
        margin-right: 1em;
        }

    .campo input[type="text"],
    .campo input[type="email"],
    .campo input[type="url"],
    .campo input[type="tel"],
    .campo select,
    .campo textarea {
        padding: 0.2em;
        border: 1px solid #CCC;
        box-shadow: 2px 2px 2px rgba(0,0,0,0.2);
        display: block;
    }

    .campo select option {
        padding-right: 1em;
    }

    .campo input:focus, .campo select:focus, .campo textarea:focus {
        background: #FFC;
    }

    .campo label.checkbox {
        color: #000;
        display: inline-block;
        margin-right: 1em;
    }

    .botao {
        font-size: 1.5em;
        background: #F90;
        border: 0;
        margin-bottom: 1em;
        color: #FFF;
        padding: 0.2em 0.6em;
        box-shadow: 2px 2px 2px rgba(0,0,0,0.2);
        text-shadow: 1px 1px 1px rgba(0,0,0,0.5);
    }

    .botao:hover {
        background: #FB0;
        box-shadow: inset 2px 2px 2px rgba(0,0,0,0.2);
        text-shadow: none;
    }

    .botao, select, label.checkbox {
        cursor: pointer;
    }

    .container{
        margin-left: 50px;
        margin-top: 50px;
    }
    .a{
        margin-left: 50px;
    }

    </style>
    <style class="botao">
        html, body {
        margin: 0;
        padding: 0;
        width: auto;
        height: auto;
        background: #9bbddf;
        font-family: 'Montserrat', sans-serif;
        font-size: 16px;
    }

    body {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
                flex-wrap: wrap;
        -webkit-justify-content: space-around;
            -ms-flex-pack: distribute;
                justify-content: space-around;
        -webkit-box-align: center;
        -webkit-align-items: center;
            -ms-flex-align: center;
                align-items: center;
        -webkit-align-content: center;
            -ms-flex-line-pack: center;
                align-content: center;
    }

    h1 {
        color: #000000;
        font-size: 4rem;
        text-transform: uppercase;
        display: block;
        width: 100%;
        text-align: center;
    }
    @media screen and (max-width: 600px) {
        h1 {
        font-size: 3rem;
        }
    }

    p {
        color: #f1c40f;
        font-size: 1.2rem;
        width: 100%;
        padding: 20px;
        text-align: center;
    }

    .btn {
        box-sizing: border-box;
        -webkit-appearance: none;
        -moz-appearance: none;
                appearance: none;
        background-color: transparent;
        border: 2px solid #e74c3c;
        border-radius: 0.6em;
        color: #e74c3c;
        cursor: pointer;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-align-self: center;
            -ms-flex-item-align: center;
                align-self: center;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1;
        margin: 20px;
        padding: 1.2em 2.8em;
        text-decoration: none;
        text-align: center;
        text-transform: uppercase;
        font-family: 'Montserrat', sans-serif;
        font-weight: 700;
    }
    .btn:hover, .btn:focus {
        color: #fff;
        outline: 0;
    }

    .first {
        -webkit-transition: box-shadow 300ms ease-in-out, color 300ms ease-in-out;
        transition: box-shadow 300ms ease-in-out, color 300ms ease-in-out;
    }
    .first:hover {
        box-shadow: 0 0 40px 40px #e74c3c inset;
    }

    .second {
        border-radius: 3em;
        border-color: #1abc9c;
        color: #fff;
        background-image: -webkit-linear-gradient(left, rgba(26, 188, 156, 0.6), rgba(26, 188, 156, 0.6) 5%, #1abc9c 5%, #1abc9c 10%, rgba(26, 188, 156, 0.6) 10%, rgba(26, 188, 156, 0.6) 15%, #1abc9c 15%, #1abc9c 20%, rgba(26, 188, 156, 0.6) 20%, rgba(26, 188, 156, 0.6) 25%, #1abc9c 25%, #1abc9c 30%, rgba(26, 188, 156, 0.6) 30%, rgba(26, 188, 156, 0.6) 35%, #1abc9c 35%, #1abc9c 40%, rgba(26, 188, 156, 0.6) 40%, rgba(26, 188, 156, 0.6) 45%, #1abc9c 45%, #1abc9c 50%, rgba(26, 188, 156, 0.6) 50%, rgba(26, 188, 156, 0.6) 55%, #1abc9c 55%, #1abc9c 60%, rgba(26, 188, 156, 0.6) 60%, rgba(26, 188, 156, 0.6) 65%, #1abc9c 65%, #1abc9c 70%, rgba(26, 188, 156, 0.6) 70%, rgba(26, 188, 156, 0.6) 75%, #1abc9c 75%, #1abc9c 80%, rgba(26, 188, 156, 0.6) 80%, rgba(26, 188, 156, 0.6) 85%, #1abc9c 85%, #1abc9c 90%, rgba(26, 188, 156, 0.6) 90%, rgba(26, 188, 156, 0.6) 95%, #1abc9c 95%, #1abc9c 100%);
        background-image: linear-gradient(to right, rgba(26, 188, 156, 0.6), rgba(26, 188, 156, 0.6) 5%, #1abc9c 5%, #1abc9c 10%, rgba(26, 188, 156, 0.6) 10%, rgba(26, 188, 156, 0.6) 15%, #1abc9c 15%, #1abc9c 20%, rgba(26, 188, 156, 0.6) 20%, rgba(26, 188, 156, 0.6) 25%, #1abc9c 25%, #1abc9c 30%, rgba(26, 188, 156, 0.6) 30%, rgba(26, 188, 156, 0.6) 35%, #1abc9c 35%, #1abc9c 40%, rgba(26, 188, 156, 0.6) 40%, rgba(26, 188, 156, 0.6) 45%, #1abc9c 45%, #1abc9c 50%, rgba(26, 188, 156, 0.6) 50%, rgba(26, 188, 156, 0.6) 55%, #1abc9c 55%, #1abc9c 60%, rgba(26, 188, 156, 0.6) 60%, rgba(26, 188, 156, 0.6) 65%, #1abc9c 65%, #1abc9c 70%, rgba(26, 188, 156, 0.6) 70%, rgba(26, 188, 156, 0.6) 75%, #1abc9c 75%, #1abc9c 80%, rgba(26, 188, 156, 0.6) 80%, rgba(26, 188, 156, 0.6) 85%, #1abc9c 85%, #1abc9c 90%, rgba(26, 188, 156, 0.6) 90%, rgba(26, 188, 156, 0.6) 95%, #1abc9c 95%, #1abc9c 100%);
        background-position: 0 0;
        background-size: 100%;
        -webkit-transition: background 300ms ease-in-out;
        transition: background 300ms ease-in-out;
    }
    .second:hover {
        background-position: 100px;
    }

    .third {
        border-color: #3498db;
        color: #fff;
        box-shadow: 0 0 40px 40px #3498db inset, 0 0 0 0 #3498db;
        -webkit-transition: all 150ms ease-in-out;
        transition: all 150ms ease-in-out;
    }
    .third:hover {
        box-shadow: 0 0 10px 0 #3498db inset, 0 0 10px 4px #3498db;
    }

    .fourth {
        border-color: #f1c40f;
        color: #fff;
        background-image: -webkit-linear-gradient(45deg, #f1c40f 50%, transparent 50%);
        background-image: linear-gradient(45deg, #f1c40f 50%, transparent 50%);
        background-position: 100%;
        background-size: 400%;
        -webkit-transition: background 300ms ease-in-out;
        transition: background 300ms ease-in-out;
    }
    .fourth:hover {
        background-position: 0;
    }

    .fifth {
        border-color: #8e44ad;
        border-radius: 0;
        color: #8e44ad;
        position: relative;
        overflow: hidden;
        z-index: 1;
        -webkit-transition: color 150ms ease-in-out;
        transition: color 150ms ease-in-out;
    }
    .fifth:after {
        content: '';
        position: absolute;
        display: block;
        top: 0;
        left: 50%;
        -webkit-transform: translateX(-50%);
                transform: translateX(-50%);
        width: 0;
        height: 100%;
        background: #8e44ad;
        z-index: -1;
        -webkit-transition: width 150ms ease-in-out;
        transition: width 150ms ease-in-out;
    }
    .fifth:hover {
        color: #fff;
    }
    .fifth:hover:after {
        width: 110%;
    }

    .sixth {
        border-radius: 3em;
        border-color: #2ecc71;
        color: #2ecc71;
        background-image: -webkit-linear-gradient(top, transparent 50%, #2ecc71 50%);
        background-image: linear-gradient(to bottom, transparent 50%, #2ecc71 50%);
        background-position: 0% 0%;
        background-size: 210%;
        -webkit-transition: background 150ms ease-in-out, color 150ms ease-in-out;
        transition: background 150ms ease-in-out, color 150ms ease-in-out;
    }
    .sixth:hover {
        color: #fff;
        background-position: 0 100%;
    }

</style>

    <title> Contato </title>
    <script>
        function goBack() {
            window.history.back()
        }
        </script>

    <h1>Editando: {{$contact->cName}} {{$contact->cLastName}} </h1>

 <div class="container">

   <div id="formContato">
    <form action="/contacts/update/{{$contact->id}}" method="post" id="formcontato">
        @csrf
        @method('PUT')
    <fieldset>
        <fieldset class="grupo">
            <div class="campo">
                <label for="cName">Nome</label>
                <input type="text" id="cName" name="cName" style="width: 10em" value="{{$contact->cName}}" >
            </div>
            <div class="campo">
                <label for="cLastName">Sobrenome</label>
                <input type="text" id="cLastName" name="cLastName" style="width: 10em" value="{{$contact->cLastName}}">
            </div>
        </fieldset>

        <div class="campo">
            <label for="cEmail">E-mail</label>
            <input type="text" id="cEmail" name="cEmail" style="width: 20em" value="{{$contact->cEmail}}" >
        </div>
        <div class="campo">
            <label for="cPhone">Telefone</label>
            <input type="text" id="cPhone" name="cPhone" style="width: 10em" value="{{$contact->cPhone}}" >
        </div>

        <input type="submit" class="btn third"  value="Cadastrar">

</fieldset>
</form>
    <body>
    <button onclick="goBack()" class="btn third">Cancelar</button>
    </body>
</div>
</div>



