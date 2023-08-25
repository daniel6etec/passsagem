<head>
<title>Editar</title>

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
            {{ __('Editar') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <form method="POST" action="/atualizar/{{ $consulta->Cep }}">
                @csrf
                @method('PUT')

        <!-- Nome -->
        <div>
            <x-input-label for="Nome" :value="__('Nome')" />
            <x-text-input id="nome" class="block mt-1 w-full" type="text" name="nome" :value="old('nome')" required autofocus autocomplete="nome"  value="{{ $consulta->Nome }}" />
            <x-input-error :messages="$errors->get('nome')" class="mt-2" />
        </div>

        <!-- Endereço -->
        <div class="mt-4">
            <x-input-label for="Endereço" :value="__('Endereço')" />
            <x-text-input id="endereco" class="block mt-1 w-full" type="text" name="endereco" :value="old('endereco')" required autocomplete="endereco" value="{{ $consulta->Endereco }}" />
            <x-input-error :messages="$errors->get('endereco')" class="mt-2" />
        </div>

        <!-- Bairro -->
        <div class="mt-4">
            <x-input-label for="Bairro" :value="__('Bairro')" />
            <x-text-input id="bairro" class="block mt-1 w-full" type="text" name="bairro" :value="old('bairro')" required autocomplete="bairro" value="{{ $consulta->Bairro }}" />
            <x-input-error :messages="$errors->get('bairro')" class="mt-2" />
        </div>

        <!-- CEP -->
        <div class="mt-4">
            <x-input-label for="CEP" :value="__('CEP')" />
            <x-text-input id="cep" class="block mt-1 w-full" type="text" name="cep" :value="old('cep')" required autocomplete="cep" value="{{ $consulta->Cep }}" />
            <x-input-error :messages="$errors->get('cep')" class="mt-2" />
        </div>

        <!-- Cidade -->
        <div class="mt-4">
            <x-input-label for="Cidade" :value="__('Cidade')" />
            <x-text-input id="cidade" class="block mt-1 w-full" type="text" name="cidade" :value="old('cidade')" required autocomplete="cidade" value="{{ $consulta->Cidade }}" />
            <x-input-error :messages="$errors->get('cidade')" class="mt-2" />
        </div>

        <!-- Estado -->
        <div class="mt-4">
            <x-input-label for="Estado" :value="__('Estado')" />
            <select class="block mt-1 w-full" name="estado" aria-label="Default select example">
                <option disabled selected>Selecione um estado</option>
                <option value="SP" @selected($consulta->Estado == 'SP')>SP</option>
                <option value="MG" @selected($consulta->Estado == 'MG')>MG</option>
                <option value="BA"  @selected($consulta->Estado == 'BA')>BA</option>
                <option value="PI" @selected($consulta->Estado == 'PI')>PI</option>
                <option value="TO" @selected($consulta->Estado == 'TO')>TO</option>
                <option value="MT" @selected($consulta->Estado == 'MT')>MT</option>
                <option value="PR" @selected($consulta->Estado == 'PR')>PR</option>
                <option value="GO" @selected($consulta->Estado == 'GO')>GO</option>
                <option value="SC" @selected($consulta->Estado == 'SC')>SC</option>
                <option value="CE" @selected($consulta->Estado == 'CE')>CE</option>
                <option value="RS" @selected($consulta->Estado == 'RS')>RS</option>
                <option value="RJ" @selected($consulta->Estado == 'RJ')>RJ</option>
                <option value="AM" @selected($consulta->Estado == 'AM')>AM</option>
                <option value="RN" @selected($consulta->Estado == 'RN')>RN</option>
                <option value="AL" @selected($consulta->Estado == 'AL')>AL</option>
                <option value="AC" @selected($consulta->Estado == 'AC')>AC</option>
                <option value="RO" @selected($consulta->Estado == 'RO')>RO</option>
                <option value="SE" @selected($consulta->Estado == 'SE')>SE</option>
            </select>
            <x-input-error :messages="$errors->get('estado')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ml-4">
                {{ __('Editar') }}
            </x-primary-button>
        </div>
    </form>
    <br>
                </div>
                <br>
            </div>
        </div>
    </div>
</x-app-layout>
