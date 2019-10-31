<table class="table table-bordered">
    <thead>
    <tr>
        <th width="100px">ID</th>
        <th>Name</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($deputies as $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->name }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
{!! $deputies->render() !!}
