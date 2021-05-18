<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>

    <form action="/welcome" method="post">
        {{ csrf_field() }}

        <label for="first_name">First name:</label>
        <br><br>
        <input type="text" name="first_name">

        <br><br>

        <label for="last_name">Last name:</label>
        <br><br>
        <input type="text" name="last_name">

        <br><br>

        <label for="gender">Gender:</label>
        <br><br>
        <input type="radio" name="gender" value="Male"> Male
        <br>
        <input type="radio" name="gender" value="Female"> Female
        <br>
        <input type="radio" name="gender" value="Other"> Other

        <br><br>

        <label for="nationality">Nationality:</label>
        <br><br>
        <select name="nationality">
            <option>Indonesian</option>
            <option>Singaporean</option>
            <option>Malaysian</option>
            <option>Australian</option>
        </select>

        <br><br>

        <label for="language">Language Spoken:</label>
        <br><br>
        <input type="checkbox" name="language" value="Bahasa Indonesia"> Bahasa Indonesia
        <br>
        <input type="checkbox" name="language" value="English"> English
        <br>
        <input type="checkbox" name="language" value="Other"> Other

        <br><br>
        <label for="bio">Bio</label>
        <br><br>
        <textarea name="bio" cols="30" rows="10"></textarea>

        <br>
        <button type="submit">Sign Up</button>
    </form>
</body>
</html>