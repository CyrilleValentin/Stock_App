@extends('admin.dashboard')
@section('role')
    <div class="container px-6 mx-auto grid my-4">
        <section class="bg-white dark:bg-gray-900  container">
            <div class="py-8 px-4 mx-auto w-lg lg:py-2">
                <h2 class="mb-4 text-center text-4xl font-bold text-gray-900 dark:text-white">Roles</h2>

                <form action="{{ route('user.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                        <div class="sm:col-span-2">
                            <label for="name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom</label>
                            <input type="text" id="name" name="name" value="{{ $user->name}}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                required="">
                        </div>
                        <div class="w-full">
                            <label for="marque"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                            <input type="email" name="email" id="email" value="{{ $user->email}}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                required="">
                        </div>
                        <div class="w-full">
                            <label for="role" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Role</label>
                            <select name="role" id="role"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                required="">
                                <option selected >Choisissez un role</option>
                                <option value="client" @if ($user->role === 'client') selected @endif>Client</option>
                                <option value="agent" @if ($user->role === 'agent') selected @endif>Agent</option>
                            </select>
                        </div>
                        
                    </div>
                    <div class=" w-full flex justify-end">
                        <button type="submit"
                            class="px-10 py-4 font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                            Modifier
                        </button>
                    </div>


                </form>
            </div>
        </section>
    </div>
@endsection
