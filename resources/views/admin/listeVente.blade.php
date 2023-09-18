@extends('admin.dashboard')
@section('listeVentes')
<div class="container grid px-6 mx-auto">


    <h1 class="my-2 text-center text-4xl font-semibold text-gray-700 dark:text-gray-200">Liste des Ventes de Montres</h1>
    <div class="w-full overflow-hidden rounded-lg shadow-xs">
        <div class="w-full overflow-x-auto ">

            <table id="example" class="display" style="width:100%">
                <thead class="dark:text-gray-200">
                    <tr>
                        <th>Nom</th>
                        <th>Marque</th>
                        <th>Quantité</th>
                        <th>Montant(FCFA)</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody class="dark:text-gray-200">
                    @foreach ($ventes as $vente)
                        <tr>
                            <td>
                                <div class="flex items-center text-sm">
                                    
                                    <div>
                                        <p class="font-semibold">
                                            {{ $vente->nom_montre }}
                                        </p>
                                        
                                    </div>
                                </div>
                            </td>
                            <td>{{ $vente->marque_montre }}</td>
                            <td>{{ $vente->quantite_vendue }}</td>
                            <td>{{ $vente->montant_total }}</td>
                            <td>{{ $vente->date_vente }}</td>
                            
                        </tr>
                    @endforeach
                </tbody>
                <tfoot class="dark:text-gray-200">
                    <tr>
                        <th>Nom</th>
                        <th>Marque</th>
                        <th>Quantité</th>
                        <th>Montant(FCFA)</th>
                        <th>Date</th>
                        
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
    
@endsection