<!DOCTYPE html>
<html>
<head>
    <title>Manage Roles</title>
</head>
<body>
    <h1>Roles for {{ $user->name }}</h1>
    <p>Current Roles:</p>
    <ul>
        @foreach($user->roles as $role)
            <li>{{ $role->name }}</li>
        @endforeach
    </ul>

    <h2>Assign Roles</h2>
    <form method="POST" action="/user/{{ $user->id }}/assign-roles">
        @csrf
        <label for="roles">Role IDs (comma separated):</label>
        <input type="text" name="roles" placeholder="e.g., 1,2,3">
        <button type="submit">Assign</button>
    </form>

    <h2>Remove Roles</h2>
    <form method="POST" action="/user/{{ $user->id }}/remove-roles">
        @csrf
        <label for="roles">Role IDs (comma separated):</label>
        <input type="text" name="roles" placeholder="e.g., 1,2,3">
        <button type="submit">Remove</button>
    </form>
</body>
</html>
