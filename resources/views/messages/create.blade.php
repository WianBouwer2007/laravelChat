<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages Create</title>
</head>
<body>
    <h1>Create Content</h1>
    <form action="{{ route('messages.store') }}" method="POST">
        @csrf
        <input type="text" id="name" name="name" required>
        <input type="textarea" id="content" name="content" required>
        <button type="submit" id="submit">Send Message</button>
    </form>
</body>
</html>