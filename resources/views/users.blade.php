<h1>Users View</h1>

<table>
    <thead>
    <tr>
        <th> id</th>
        <th> name</th>
        <th> email </th>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <td> {{$user->id}} </td>
            <td> {{$user->name}} </td>
            <td> {{$user->email}} </td>
        </tr>
    @endforeach
    </tbody>
</table>

<style>
    table tr, td {
        border: 1px solid #000;
    }
</style>
