@extends('admin.dashboard')
@section('ajout')
    <div class="container px-6 mx-auto grid my-4">
        <section class="bg-white dark:bg-gray-900  container">
            <div class="py-8 px-4 mx-auto w-lg lg:py-2">
                <h2 class="mb-4 text-center text-4xl font-bold text-gray-900 dark:text-white">Ajouter une nouvelle Montre</h2>

                <form action="{{ route('montres.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                        <div class="sm:col-span-2">
                            <label for="name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom</label>
                            <input type="text" id="nom" name="nom"
                                placeholder="Le nom de la montre."class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                required="">
                        </div>
                        <div class="w-full">
                            <label for="marque"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Marque</label>
                            <input type="text" name="marque" id="marque"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="La marque de la montre."required="">
                        </div>
                        <div class="w-full">
                            <label for="description"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                            <input type="text" name="description" id="description"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Une description de la montre." required="">
                        </div>
                        <div class="w-full">
                            <label for="prix"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Prix(XOF)</label>
                            <input type="number" name="prix" id="prix"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Le prix de la montre." required="">
                        </div>
                        <div class="w-full">
                            <label for="matiere"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Matière du
                                boîtier</label>
                            <input type="text" name="matiere" id="matiere"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Ex:acier inoxydable, or, titane, etc..." required="">
                        </div>

                        <div>
                            <label for="bracelet"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bracelet</label>
                            <input type="text" name="bracelet" id="bracelet"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Ex:cuir, acier inoxydable, caoutchouc, etc.." required="">
                        </div>
                        <div>
                            <label for="mecanisme"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mécanisme</label>
                            <input type="text" name="mecanisme" id="mecanisme"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Ex:mécanique, quartz, automatique, etc..." required="">
                        </div>
                        <div>
                            <label for="fonction"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fonction</label>
                            <input type="text" name="fonction" id="fonction"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Ex:chronographe, date, phase de lune, etc..." required="">
                        </div>
                        <div>
                            <label for="image"
                                class="block mb-2  text-sm font-medium text-gray-900 dark:text-white">Image
                                de la montre</label>
                            <input type="file" name="image" id="image"
                                class="bg-gray-50 border border-gray-300 mb-4 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                required="">
                        </div>
                        <div>
                            <label for="quantite"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quantité</label>
                            <input type="number" name="quantite" id="quantite"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Entrer la quantité disponible." required="">
                        </div>


                    </div>
                    <div class=" w-full flex justify-end">
                        <button type="submit"
                            class="px-10 py-4 font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                            Enregistrer
                        </button>
                    </div>


                </form>
            </div>
        </section>
    </div>
@endsection
