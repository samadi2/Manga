<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Ajouter un nouvel article') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="w-full flex justify-center flex-col items-center">
            <form action="{{ route('admin.articles.store') }}" method="POST" enctype="multipart/form-data" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                @csrf
                <div>
                    <label class="block text-gray-700 text-lg font-bold mb-2" for="title">Titre :</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="title" id="title">
                    
                    @error("title")
				    <div>{{ $message }}</div>
				    @enderror
                </div>
                <div>
                    <label class="block text-gray-700 text-lg font-bold mb-2" for="picture">Image :</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="file" name="picture" id="picture">

                    @error("picture")
				    <div>{{ $message }}</div>
				    @enderror
                </div>
                <div>
                    <label class="block text-gray-700 text-lg font-bold mb-2" for="content">Contenu :</label>
                    <textarea name="content" id="content"></textarea>

                    @error("content")
				    <div>{{ $message }}</div>
				    @enderror
                </div>
                <div>
                    <label class="block text-gray-700 text-lg font-bold mb-2" for="genre">Genre :</label>
                    <select name="genre" id="genre">
                        <option value="shonen">Shonen</option>
                        <option value="seinen">Seinen</option>
                        <option value="shojo">Shojo</option>
                        <option value="josei">Josei</option>
                    </select>

                    @error("genre")
				    <div>{{ $message }}</div>
				    @enderror
                </div>
                <div>
                    <label class="block text-gray-700 text-lg font-bold mb-2" for="price">Prix :</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="number" name="price" id="price">

                    @error("price")
				    <div>{{ $message }}</div>
				    @enderror
                </div>
                <div>
                    <label class="block text-gray-700 text-lg font-bold mb-2" for="qte">Quantité en stock :</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="number" name="qte" id="qte"><br>

                    @error("qte")
				    <div>{{ $message }}</div>
				    @enderror
                </div>
                <button class="btn" type="submit">Enregistrer</button>
            </form>
        </div>
    </div>
</x-app-layout>
