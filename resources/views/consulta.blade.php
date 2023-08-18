<head>
<title>Registrar</title>
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
                            <th scope="col">Nome</th>
                            <th scope="col">Endereço</th>
                            <th scope="col">Bairro</th>
                            <th scope="col">CEP</th>
                            <th scope="col">Cidade</th>
                            <th scope="col">Estado</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($consulta as $consulta)

                    <tr>
                        <th scope="row">{{$consulta['Nome']}}</th>
                        <td>{{$consulta['Endereco']}}</td>
                        <td>{{$consulta['Bairro']}}</td>
                        <td>{{$consulta['Cep']}}</td>
                        <td>{{$consulta['Cidade']}}</td>
                        <td>{{$consulta['Estado']}}</td>
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
