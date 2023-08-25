<head>
<title>Registrar</title>

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
                <form method="POST" action="/registrar2">
        @csrf

        <!-- Nome -->
        <div>
            <x-input-label for="Nome" :value="__('Nome')" />
            <x-text-input id="nome" class="block mt-1 w-full" type="text" name="nome" :value="old('nome')" required autofocus autocomplete="nome" />
            <x-input-error :messages="$errors->get('nome')" class="mt-2" />
        </div>

        <!-- Endereço -->
        <div class="mt-4">
            <x-input-label for="Endereço" :value="__('Endereço')" />
            <x-text-input id="endereco" class="block mt-1 w-full" type="text" name="endereco" :value="old('endereco')" required autocomplete="endereco" />
            <x-input-error :messages="$errors->get('endereco')" class="mt-2" />
        </div>

        <!-- Bairro -->
        <div class="mt-4">
            <x-input-label for="Bairro" :value="__('Bairro')" />
            <x-text-input id="bairro" class="block mt-1 w-full" type="text" name="bairro" :value="old('bairro')" required autocomplete="bairro" />
            <x-input-error :messages="$errors->get('bairro')" class="mt-2" />
        </div>

        <!-- CEP -->
        <div class="mt-4">
            <x-input-label for="CEP" :value="__('CEP')" />
            <x-text-input id="cep" class="block mt-1 w-full" type="text" name="cep" :value="old('cep')" required autocomplete="cep" />
            <x-input-error :messages="$errors->get('cep')" class="mt-2" />
        </div>

        <!-- Cidade -->
        <div class="mt-4">
            <x-input-label for="Cidade" :value="__('Cidade')" />
            <x-text-input id="cidade" class="block mt-1 w-full" type="text" name="cidade" :value="old('cidade')" required autocomplete="cidade" />
            <x-input-error :messages="$errors->get('cidade')" class="mt-2" />
        </div>

        <!-- Estado -->
        <div class="mt-4">
            <x-input-label for="Estado" :value="__('Estado')" />
            <select class="block mt-1 w-full" name="estado" aria-label="Default select example">
                <option disabled selected>Selecione um estado</option>
                <option value="SP">SP</option>
                <option value="MG">MG</option>
                <option value="BA">BA</option>
                <option value="PI">PI</option>
                <option value="TO">TO</option>
                <option value="MT">MT</option>
                <option value="PR">PR</option>
                <option value="GO">GO</option>
                <option value="SC">SC</option>
                <option value="CE">CE</option>
                <option value="RS">RS</option>
                <option value="RJ">RJ</option>
                <option value="AM">AM</option>
                <option value="RN">RN</option>
                <option value="AL">AL</option>
                <option value="AC">AC</option>
                <option value="RO">RO</option>
                <option value="SE">SE</option>
            </select>
            <x-input-error :messages="$errors->get('estado')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ml-4">
                {{ __('Registrar') }}
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
