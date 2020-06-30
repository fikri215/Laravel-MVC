<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    
    <h1>Buat Account Baru!</h1>

    <h3>Sign Up Form</h3>
    <form action="/welcome" method="POST">
        @csrf
        <label for="first-name">First name:</label><br><br>
        <input type="text" name="first-name" id="first-name"><br><br>

        <label for="last-name">Last name:</label><br><br>
        <input type="text" name="last-name" id="last-name"><br><br>

        <label for="gender">Gender:</label><br><br>
        <input type="radio" name="gender" id="gender">Male<br>
        <input type="radio" name="gender" id="gender">Female<br>
        <input type="radio" name="gender" id="gender">Other<br><br>

        <label for="nationality">Nationality:</label><br><br>
        <select name="nationality" id="nationality">
            <option value="indonesian">Indonesian</option>
            <option value="japanese">Japanese</option>
            <option value="malaysian">Malaysian</option>
        </select><br><br>
    
        <label for="language">Language Spoken:</label><br><br>
        <input type="checkbox" name="language" id="language">Bahasa Indonesia<br>
        <input type="checkbox" name="language" id="language">English<br>
        <input type="checkbox" name="language" id="language">Other<br><br>
        
        <label for="bio">Bio:</label><br><br>
        <textarea name="bio" id="bio" cols="30" rows="10"></textarea><br><br>
        <button type="submit">Sign Up</button>   
    </form>

</body>
</html>