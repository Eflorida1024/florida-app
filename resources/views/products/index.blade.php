<x-layout>
    <x-slot:heading>
        Product List
    </x-slot>
    <x-table>
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Product</th>
                <th scope="col">Category</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($product as $products)
                <tr>
                   <th scope = "row"> {{ $products['id']}}</th>
                   <td>{{ $products['name'] }}</td>
                   <td>{{ $products['category'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </x-table>
</x-layout>
