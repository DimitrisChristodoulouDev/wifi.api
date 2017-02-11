<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>

@foreach($nerds as $key => $value)
    <tr>
        <td>{{ $value->id }}</td>
        <td>{{ $value->name }}</td>
        <td>{{ $value->email }}</td>
        <td>{{ $value->nerd_level }}</td>

        <!-- we will also add show, edit, and delete buttons -->
        <td>

            <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
            <!-- we will add this later since its a little more complicated than the other two buttons -->

            <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
            <a class="btn btn-small btn-success" href="{{ URL::to('nerds/' . $value->id) }}">Show this Nerd</a>

            <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
            <a class="btn btn-small btn-info" href="{{ URL::to('nerds/' . $value->id . '/edit') }}">Edit this Nerd</a>

        </td>
    </tr>
@endforeach

</body>
</html>
