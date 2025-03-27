<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <title>Dashboard</title>
</head>
<body>
    <h1 class="text-3xl font-bold text-center mb-10">Dashboard</h1>
    <div class="mt-6 flex items-center justify-end gap-x-6 pointer mb-4">
        <a href="{{ route('livre.index') }}" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Home Page</a href="{{ route('livre.index') }}">
    </div>
    @if($countLivre['countLivre'] !== 0)
        <div>
            <p class="text-xl mb-5"><strong>{{ $countLivre['titre'] }}</strong> {{ $countLivre['countLivre'] }}</p>
            <p class="text-xl mb-2"><strong>{{ $livres['titre'] }}</strong></p>
            <ul>
                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <th scope="col" class="px-6 py-3">
                                    Titre
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Auteur
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Badge
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($livres['livres'] as $livre)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                                <td class="px-6 py-4">
                                    {{$livre->titre}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$livre->auteur}}
                                </td>
                                <td class="px-6 py-4">
                                    <span class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-sm dark:bg-blue-900 dark:text-blue-300">{{$livre->categorie}}</span>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </ul>
        </div>
    @else   
        <div class="flex justify-center items-center border border-black w-5/6 m-auto rounded-xl" style="height:75vh;padding">
            <h2 class="text-2xl font-bold">pas de livres</h2>
        </div>
    @endif
</body>
</html>