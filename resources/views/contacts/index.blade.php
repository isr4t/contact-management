<!DOCTYPE html>
<html>
<head>
    <title>Contacts</title>
</head>
<body>
    <h1>Contacts</h1>
    <form method="GET" action="{{ route('contacts.index') }}">
        <input type="text" name="search" placeholder="Search">
        <select name="sort_by">
            <option value="name">Sort by Name</option>
            <option value="created_at">Sort by Date</option>
        </select>
        <button type="submit">Search</button>
    </form>
    <ul>
        @foreach ($contacts as $contact)
            <li>{{ $contact->name }} - <a href="{{ route('contacts.show', $contact->id) }}">View</a> - <a href="{{ route('contacts.edit', $contact->id) }}">Edit</a> - <form method="POST" action="{{ route('contacts.destroy', $contact->id) }}" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form></li>
        @endforeach
    </ul>
    {{ $contacts->links() }}
    <a href="{{ route('contacts.create') }}">Create New Contact</a>
</body>
</html>
