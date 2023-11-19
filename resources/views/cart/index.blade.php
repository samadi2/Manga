<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contenu du panier') }}
        </h2>
    </x-slot>


    <table>
        <thead>
            <tr>
                <th>Titre</th>
                <th>Image</th>
                <th>Contenu</th>
                <th>Prix</th>
                <th>Quantité</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cartItems as $item)
                <tr>
                    <td>{{ $item->title }}</td>
                    <td><img src="{{ $item->picture }}" alt="{{ $item->title }}" width="100"></td>
                    <td>{{ $item->content }}</td>
                    <td>{{ $item->price }}</td>
                    <td>
                        <input type="number" name="quantity" value="{{ $item->qte }}" min="1">
                        <button data-id="{{ $item->id }}" class="update-quantity">Mettre à jour</button>
                    </td>
                    <td>
                        <form method="POST" action="{{ route('cart.destroy', $item->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
         <tfoot>
        <tr>
            <td colspan="3"></td>
            <td>Total :</td>
            <td>{{ $total }}</td> <!-- Incluez la variable $totalPrice ici -->
            <td></td>
        </tr>
    </tfoot>
    </table>

    <script>
      
    </script>
</x-app-layout>
