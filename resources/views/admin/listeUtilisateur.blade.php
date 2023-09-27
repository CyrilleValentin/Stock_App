@extends('admin.dashboard')
@section('listeUtilisateur')
<div class="container grid px-6 mx-auto">


    <h1 class="my-2 text-center text-4xl font-semibold text-gray-700 dark:text-gray-200">Liste des Utilisateurs</h1>
    <div class="w-full overflow-hidden rounded-lg shadow-xs">
        <div class="w-full overflow-x-auto ">

            <table id="example" class="display" style="width:100%">
                <thead class="dark:text-gray-200">
                    <tr>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="dark:text-gray-200">
                    @foreach ($users as $user)
                        <tr>
                            <td>
                                <div class="flex items-center text-sm">
                                    
                                    <div>
                                        <p class="font-semibold">
                                            {{ $user->name }}
                                        </p>
                                        
                                    </div>
                                </div>
                            </td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->role }}</td>
                            <td>
                                <div class="flex items-center space-x-4 text-sm">
                                    <a href="{{ route('user.edit', $user->id) }}">
                                        <button
                                            class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                            aria-label="Edit">
                                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                </path>
                                            </svg>
                                        </button>
                                    </a>

                                    <form action="{{ route('user.destroy', $user->id) }}" method="POST"
                                        onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="flex  items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                            aria-label="Delete">
                                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                    </form>
                                    
                                </div>
                            </td>
                            
                        </tr>
                    @endforeach
                </tbody>
                <tfoot class="dark:text-gray-200">
                    <tr>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
    
@endsection