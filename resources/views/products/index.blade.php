<<!DOCTYPE html>

<body>
    <p>Products:</p>
        <table>
            <thead>
                <tr>
                    @foreach (['id', 'name', 'category'] as $column)
                        <td> {{$column}}</td>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach ($product as $products)
                    <tr>
                        <td>{{ $products['id']}}</td>
                        <td>{{ $products['name']}}</td>
                        <td>{{ $products['category']}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <p>Task</p>
        <ul>
            @foreach ($tasks as $task)
                <li> {{$task}}</li>
            @endforeach
        </ul>

        <p>Global Variable</p>
        <p>{{$sharedVariable}}</p>

        <p>Product Key: {{$productKey}}</p>

</body>
</html>
