@extends('agent.dashboardAgent')
@section('listeAg')
    <div class="container grid px-6 mx-auto">


        <h1 class="my-2 text-center text-4xl font-semibold text-gray-700 dark:text-gray-200">Liste des Montres</h1>
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto ">

                <table id="example" class="display" style="width:100%">
                    <thead class="dark:text-gray-200">
                        <tr>
                            <th>Nom</th>
                            <th>Marque</th>
                            <th>Prix(FCFA)</th>
                            <th>Quantité</th>
                            <th>Matière</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="dark:text-gray-200">
                        @foreach ($montres as $montre)
                            <tr>
                                <td>
                                    <div class="flex items-center text-sm">
                                        <!-- Avatar with inset shadow -->
                                        <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                            <img class="object-cover w-full h-full rounded-full"
                                                src="{{ Storage::url($montre->image) }}" alt="" loading="lazy" />
                                            <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true">
                                            </div>
                                        </div>
                                        <div>
                                            <p class="font-semibold">
                                                {{ $montre->nom }}
                                            </p>
                                            {{-- <p class="text-xs text-gray-600 dark:text-gray-400">
                                                {{ $montre->description }}
                                            </p> --}}
                                        </div>
                                    </div>
                                </td>
                                <td>{{ $montre->marque }}</td>
                                <td>{{ $montre->prix }}</td>
                                <td>{{ $montre->quantite }}</td>
                                <td>{{ $montre->matiere }}</td>
                                <td>
                                    <div class="flex items-center space-x-4 text-sm">  
                                        <a href="{{ route('montres.vente', $montre->id) }}">
                                            <button
                                                class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                                aria-label="Vente">
                                            
                                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                    <path d="M24 0C10.7 0 0 10.7 0 24S10.7 48 24 48H69.5c3.8 0 7.1 2.7 7.9 6.5l51.6 271c6.5 34 36.2 58.5 70.7 58.5H488c13.3 0 24-10.7 24-24s-10.7-24-24-24H199.7c-11.5 0-21.4-8.2-23.6-19.5L170.7 288H459.2c32.6 0 61.1-21.8 69.5-53.3l41-152.3C576.6 57 557.4 32 531.1 32H360V134.1l23-23c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-64 64c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l23 23V32H120.1C111 12.8 91.6 0 69.5 0H24zM176 512a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm336-48a48 48 0 1 0 -96 0 48 48 0 1 0 96 0z"/>
                                                </svg>
                                            </button>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot class="dark:text-gray-200">
                        <tr>
                            <th>Nom</th>
                            <th>Marque</th>
                            <th>Prix(FCFA)</th>
                            <th>Quantité</th>
                            <th>Matière</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
@endsection
