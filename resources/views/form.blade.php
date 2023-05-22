<!-- resources/views/form.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Form Example</title>
</head>
<body>
    @if(session('success'))
        <div>
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="/submit" enctype="multipart/form-data">
        @csrf

        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
        </br></br>
        <label for="avater">Avetar:</label>
        <input type="file" name="avater" id="chooseFile">
 
</br></br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>