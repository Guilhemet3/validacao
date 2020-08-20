<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>Cadastro de Clientes</title>
        <style>
            body{
                padding: 20px;
            }
        </style>
    </head>
    <body>
        <main role="main">
            <div class="row">
                <div class="container col-md-8 offset-md-2">
                    <div class="card border">
                        <div class="card-header">
                            <div class="card-title">
                                Cadastro de Clientes
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{route('cliente.submit')}}" method="POST">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="nome">Nome do Cliente</label><!--se tiver nove eu retorn is-invalide-->
                                    <input type="text" id="nome" class="form-control {{ $errors->has('nome') ?  'is-invalid' : ''}}" name="nome" >
                                    <!--se ocorreu algum erro com o nome-->
                                    @if ($errors->has('nome'))
                                        <div class="invalid-feedback">
                                            <!--vai pegar o primeiro erro do nome-->
                                            {{$errors->first('nome')}}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="idade">Idade do Cliente</label>
                                    <input type="number" id="idade" class="form-control {{$errors->has('idade') ? 'is-invalid' : ''}}" name="idade" >
                                    @if ($errors->has('idade'))
                                        <div class="invalid-feedback">
                                            {{$errors->first('idade')}}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="endereco">Endereço do Cliente</label>
                                    <input type="text" id="endereco" class="form-control {{$errors->has('endereco') ? 'is-invalid' : ''}} " name="endereco" >
                                    @if ($errors->has('endereco'))
                                        <div class="invalid-feedback">
                                            {{$errors->first('endereco')}}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="email">E-mail do Cliente</label>
                                    <input type="email" id="email" class="form-control {{$errors->has('email') ? 'is-invalid' : ''}} " name="email" >
                                    @if ($errors->has('email'))
                                        <div class="invalid-feedback">
                                            {{$errors->first('email')}}
                                        </div>
                                    @endif
                                </div>
                                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                                <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
    </body>
</html>