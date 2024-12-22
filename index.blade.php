<!DOCTYPE html>
<html>
<head>
    <title>Users List</title>
</head>
<body>
    <h1>All Users</h1>
    <ul>
        @foreach($users as $user)
            <li>
                {{ $user->name }} - Roles: 
                @foreach($user->roles as $role)
                    {{ $role->name }}
                @endforeach
                <a href="/user/{{ $user->id }}/roles">Manage Roles</a>
            </li>
        @endforeach
    </ul>
</body>
</html>
