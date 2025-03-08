<div>
  Products:
  <table>
        <thead>
            <tr>
                <td>id</td>
                <td>name</td>
                <td>category</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product['id']}}</td>
                    <td>{{ $product['name']}}</td>
                    <td>{{ $product['category']}}</td>
                </tr>
            @endforeach
        </tbody>
  </table>
</div>
