<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-black dark:text-black leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-black dark:text-black">
                    <h1 class="text-white">Lista de Cursos</h1>

                    <ul>
                        @foreach($cursos as $curso)
                            <li>{{ $curso->nom }}</li>
                        @endforeach
                    </ul>

                    <h2 class="text-white">Crear Nuevo Curso</h2>

                    <form action="{{ route('cursos.store') }}" method="post">
                        @csrf

                        <label class="text-white" for="nombre">Nombre del Curso:</label>
                        <input  type="text" name="nom" id="nombre" required>

                        <label class="text-white" for="descripcion">Descripción:</label>
                        <input name="descripcion" id="descripcion" rows="3" required></input>

                        <label class="text-white" for="nombre">inici:</label>
                        <input type="date" name="data_inici" id="data_inici" required>

                        <label class="text-white" for="nombre">final:</label>
                        <input type="date" name="data_final" id="data_final" required>

                        <button class="text-white" type="submit">Crear Curso</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
