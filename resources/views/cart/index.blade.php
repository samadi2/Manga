<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contenu du panier') }}
        </h2>
    </x-slot>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-300">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">Produit</th>
                    <th class="py-2 px-4 border-b">Prix</th>
                    <th class="py-2 px-4 border-b">Quantité</th>
                    <th class="py-2 px-4 border-b">Total</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $grandTotal = 0;
                @endphp
                @foreach ($cartItems as $item)
                    @php
                        $totalProduit = $item->price * $item->qte; 
                        $grandTotal += $totalProduit; 
                    @endphp
                    <tr class="product-row" data-id="{{ $item->id }}" data-price="{{ $item->price }}" >
                        <td class="py-2 px-4 border-b text-left">
                            <img  src="{{ asset('storage/' . $item->picture) }}" alt="{{ $item->title }}" class="w-20 h-20 object-cover">
                            <h4 class="mb-4"> {{ $item->title }}</h4>
                            <div>
                                <h5>Description : </h5>
                                <p>{{ $item->content }}</p>
                            </div>
                        </td>
                        <td class="py-2 px-4 border-b text-left">{{ number_format($item->price, 2) }}</td>
                        <td class="py-2 px-4 border-b space-x-2 text-left">
                            <button class="quantity-action" data-id="{{ $item->id }}" data-action="increment">+</button>
                            <span class="quantity-value" data-id="{{ $item->id }}" data-action="increment">{{ $item->qte }}</span>
                            <button class="quantity-action" data-id="{{ $item->id }}" data-action="decrement">-</button>
                            <form method="POST" action="{{ route('cart.destroy', $item->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="px-2 py-1 bg-red-500 text-white">Supprimer</button>
                            </form>
                        </td>
                        <td class="py-2 px-4 border-b text-left">{{number_format($totalProduit, 2) }}</td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr id="total-row">
                    <td colspan="5"></td>
                    <td class="py-2 px-4 border-t">Sous-total :</td>
                    <td id="grand-total" class=" py-2 px-4 border-t">{{ number_format($grandTotal, 2) }}</td>
                </tr>
            </tfoot>
        </table>
    </div>
</x-app-layout>
