<head>
<title>Consulta</title>
    @vite([
        'resources/css/app.css',
        'resources/js/app.js',
        'node_modules/bootstrap/dist/css/bootstrap.min.css',
        'node_modules/bootstrap/dist/js/bootstrap.bundle.js'
    ])
</head>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Registrar') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <table class="table">
                    <thead class="bg-primary">
                        <tr>
                            <th scope="col">Cep</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Endereço</th>
                            <th scope="col">Bairro</th>
                            <th scope="col">Cidade</th>
                            <th scope="col">Estado</th>
                            <th>Editar</th>
                            <th>Excluir</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($consulta as $consulta)

                    <tr>
                        <th scope="row">{{$consulta['Cep']}}</th>
                        <td>{{$consulta['Nome']}}</td>
                        <td>{{$consulta['Endereco']}}</td>
                        <td>{{$consulta['Bairro']}}</td>
                        <td>{{$consulta['Cidade']}}</td>
                        <td>{{$consulta['Estado']}}</td>
                        <td><a type="button" class="btn btn-info" name="editar" value="editar" href="{{ url('/editar', $consulta->Cep)}}">editar</a></td>
                        <td><a type="button" class="btn btn-warning" name="excluir" value="excluir" href="{{ url('/excluir', $consulta->Cep)}}">Excluir</a></td>
                    </tr>

                    @endforeach
                    </tbody>
                </table>
                </div>
                <br>
            </div>
        </div>
    </div>
</x-app-layout>
