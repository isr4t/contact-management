<!DOCTYPE html>
<html>
<head>
    <title>View Contact</title>
</head>
<body>
    <h1>Contact Details</h1>
    <p>Name: {{ $contact->name }}</p>
    <p>Email: {{ $contact->email }}</p>
    <p>Phone: {{ $contact->phone }}</p>
    <p>Address: {{ $contact->address }}</p>
    <a href="{{ route('contacts.edit', $contact->id) }}">Edit</a>
    <form method="POST" action="{{ route('contacts.destroy', $contact->id) }}" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
    <a href="{{ route('contacts.index') }}">Back to List</a>
</body>
</html>
