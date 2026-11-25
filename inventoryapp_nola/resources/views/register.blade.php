<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h2>Sign Up Form</h2>
    <form action="/welcome" method="post">
        @csrf
        <label for="">First name:</label><br>
        <input type="text" name="firstname">
        <br><br>

        <label for="">Last name:</label><br>
        <input type="text" name="lastname">
        <br><br>

        <label for="">Gender:</label><br>
        <input type="radio" value="1" name="gender">Male <br>
        <input type="radio" value="2" name="gender">Female <br>
        <input type="radio" value="3" name="gender">Other
        <br><br>

        <label for="">Nationality</label><br>
        <select name="nationality" id="">
            <option value="indonesian">Indonesian</option>
            <option value="malaysian">Malaysian</option>
        </select>
        <br><br>

        <label for="">Language Spoken:</label><br>
        <input type="checkbox" value="indonesian" name="nationality">Bahasa Indonesia <br>
        <input type="checkbox" value="malaysian" name="nationality">Malay <br>
        <input type="checkbox" value="malaysian" name="nationality">English
        <br><br>

        <label for="">Bio</label><br>
        <textarea name="bio" rows="5" cols="20" id=""></textarea>
        <br><br>

        <input type="submit" value="Sign Up">
    </form>
</body>
</html>