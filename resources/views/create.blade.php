<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
  </head>
  <body>
    <form class="border-b border-gray-900/10 pb-12 w-1/2 m-auto mt-10" action="{{ route('livre.store') }}" method='POST'>
        @csrf
        <h2 class="text-base/7 font-semibold text-black text-xl font-bold">Ajouter un Livre</h2>
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="sm:col-span-4">
            <label for="titre" class="block text-sm/6 font-medium text-gray-900">titre</label>
            <div class="mt-2">
              <input type="text" name="titre" id="titre"  class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
            </div>
            @error('titre')
                <small class="text-red-700">{{ $message }}</small>
            @enderror
          </div>
  
          <div class="sm:col-span-4">
            <label for="auteur" class="block text-sm/6 font-medium text-gray-900">auteur</label>
            <div class="mt-2">
              <input type="text" name="auteur" id="auteur"  class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
            </div>
            @error('auteur')
                <small class="text-red-700">{{ $message }}</small>
            @enderror
          </div>
  
          <div class="sm:col-span-4">
            <label for="nb_pages" class="block text-sm/6 font-medium text-gray-900">nombre des pages</label>
            <div class="mt-2">
              <input id="nb_pages" name="nb_pages" type="number"  class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
            </div>
            @error('nb_pages')
                <small class="text-red-700">{{ $message }}</small>
            @enderror
          </div>
          <div class="sm:col-span-4">
            <label for="categorie" class="block text-sm/6 font-medium text-gray-900">categorie</label>
            <div class="mt-2">
              <input id="categorie" name="categorie" type="text"  class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
            </div>
            @error('categorie')
                <small class="text-red-700">{{ $message }}</small>
            @enderror
          </div>
        </div>
        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Ajouter</button>
        </div>
      </div>
    </form>
  </body>
</html>