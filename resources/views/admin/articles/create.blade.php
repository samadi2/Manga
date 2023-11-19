<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Ajouter un nouvel article') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 shadow sm:rounded-lg p-6">
                <form action="{{ route('admin.articles.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="title">Titre :</label>
                    <input type="text" name="title" id="title">
                    <label for="picture">Image :</label>
                    <input type="file" name="picture" id="picture">
                    <label for="content">Contenu :</label>
                    <textarea name="content" id="content"></textarea>
                    <label for="genre">Genre :</label>
                    <select name="genre" id="genre">
                        <option value="shonen">Shonen</option>
                        <option value="seinen">Seinen</option>
                        <option value="shojo">Shojo</option>
                        <option value="josei">Josei</option>
                    </select>
                    <label for="price">Prix :</label>
                    <input type="number" name="price" id="price">
                    <label for="qte">Quantité en stock :</label>
                    <input type="number" name="qte" id="qte">
                    <button type="submit">Enregistrer</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
