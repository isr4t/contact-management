<!DOCTYPE html>
<html>
<head>
    <title>Create Contact</title>
</head>
<body>
    <h1>Create Contact</h1>
    <form method="POST" action="{{ route('contacts.store') }}">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" required>
        <label>Email:</label>
        <input type="email" name="email" required>
        <label>Phone:</label>
        <input type="text" name="phone">
        <label>Address:</label>
        <input type="text" name="address">
        <button type="submit">Save</button>
    </form>
</body>
</html>
