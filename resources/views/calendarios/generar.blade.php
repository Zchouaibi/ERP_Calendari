@extends('layouts.app')

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    test

                    <form action="/generar-calendario" method="post">
                        @csrf

                        <label for="fecha">Fecha:</label>
                        <input type="date" name="fecha" id="fecha" required>

                        <label for="evento">Evento:</label>
                        <input type="text" name="evento" id="evento" required>

                        <label for="descripcion">Descripción:</label>
                        <textarea name="descripcion" id="descripcion" rows="3" required></textarea>

                        <button type="submit">Generar Calendario</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
