<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Buat Akun Baru!</h1>
    <h3>Sign Up Form</h3>
    <form action="/welcomee" method="POST">
        @csrf
        <!-- FIRST NAME -->
        <label for="firstname">First name:</label> <br/>
        <br/>
        <input type="text" id="firstname" name="firstname" /> <br/>
        <br/>
        <!-- LAST NAME -->
        <label for="">Last name:</label> <br/>
        <br/>
        <input type="text" name="lastname" /> <br/>
        <br/>
        <!-- GENDER -->
        <label for="">Gender:</label>  <br/>
        <br/>
        <input type="radio" name="gender" value="male"> Male <br/>
        <input type="radio" name="gender" value="female"> Female <br/>
        <br/>
        <!-- NATIONALITY -->
        <label for="">Nationality:</label>  <br/>
        <br/>
        <select name="nationality" id="">
            <option value="indonesian">Indonesian</option>
            <option value="Singaporean">Singaporean</option>
            <option value="Malaysian">Malaysian</option>
            <option value="Australian">Australian</option>
        </select> <br/>
        <br/>
        <!-- LANGUAGE SPOKEN -->
        <label for="">Language Spoken:</label>  <br/>
        <br/>
        <input type="checkbox" name="language" value="bahasa"> Bahasa Indonesia <br/>
        <input type="checkbox" name="language" value="english"> English <br/>
        <input type="checkbox" name="language" value="other"> Other <br/>

        <br/>
        <br/>
        <label>Bio:</label> <br/>
        <textarea name="bio" id="" cols="30" rows="8"></textarea> <br/>
        <input type="submit" name="Sign Up" id="" value="Sign Up">
    </form>
</body>
</html>
