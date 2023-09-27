@extends('agent.dashboardAgent')
@section('vente')
    <div class="container px-6 mx-auto grid my-4">
        <section class="bg-white dark:bg-gray-900  container">
            <div class="py-8 px-4 mx-auto w-lg lg:py-2">
                <h2 class="mb-4 text-center text-4xl font-bold text-gray-900 dark:text-white">Enregistrer une vente de Montre
                </h2>

                <form action="{{ route('enregistrer-vente', $montre->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                        <div class="sm:col-span-2">
                            <label for="name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom</label>
                            <input type="text" id="nom" name="nom" value="{{ $montre->nom }}"
                                placeholder="Le nom de la montre."class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                required="" readonly>
                        </div>
                        <div class="w-full">
                            <label for="marque"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Marque</label>
                            <input type="text" name="marque" id="marque" value="{{ $montre->marque }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="La marque de la montre."required="" readonly>
                        </div>

                        <div class="w-full">
                            <label for="prix"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Prix(XOF)</label>
                            <input type="number" name="prix" id="prix" value="{{ $montre->prix }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Le prix de la montre." required="" readonly>
                        </div>


                        <div>
                            <label for="quantite"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quantité</label>
                            <input type="number" name="quantite" id="quantite" value="{{ $montre->quantite }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Entrer la quantité disponible." required="" readonly>
                        </div>

                        <div>
                            <label for="quantite"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quantité Vendue</label>
                            <input type="number" name="quantiteVend" id="quantiteVend"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Entrer la quantité vendue." required="" min="1" value="1"
                                oninput="calculateTotal()">
                        </div>
                        <div>
                            <label for="quantite"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Montant total de la
                                Vente(XOF)</label>
                            <input type="number" name="total" id="total"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                required="" readonly>
                        </div>

                    </div>
            </div>

            <div class=" w-full flex justify-end">
                <button type="submit"
                    class="px-10 py-4 font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                    Vendre
                </button>
            </div>

            </form>

    </div>
    </section>
    </div>
@endsection
