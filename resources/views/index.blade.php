<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Livres </title>
</head>
<body>
    <div class="w-3/4 m-auto mt-10">
        <h1 class="text-3xl font-bold mb-5 text-center">Les Livres</h1>
        <div class="mt-6 flex items-center justify-end gap-x-6 mb-5">
            <a href="{{ route('livre.create') }}" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Ajouter un livre</a>
        </div>
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            id
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Titre
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Auteur
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Prix
                        </th>
                        <th scope="col" class="px-6 py-3">
                            pages
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($livres as $livre)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$livre->id}}
                        </th>
                        <td class="px-6 py-4">
                            {{$livre->titre}}
                        </td>
                        <td class="px-6 py-4">
                            {{$livre->auteur}}
                        </td>
                        <td class="px-6 py-4">
                            {{$livre->categorie}}
                        </td>
                        <td class="px-6 py-4">
                            {{$livre->nb_pages}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div>
            {{ $livres->links() }}
        </div>
    </div>
</body>
</html>