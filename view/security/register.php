<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>S'inscrire</h1>
    <form action="index.php?ctrl=security&action=register" method="POST">
        <label for="pseudo">username</label>
        <input type="text" name="username" id="username"></br>

        <label for="email">Email</label>
        <input type="email" name="email" id="email"></br>

        <label for="pass1">Mot de passe</label>
        <input type="password" name="pass1" id="pass1"></br>

        <label for="pass2">Confirmation de mot de passe</label>
        <input type="password" name="pass2" id="pass2"></br>

        <input type="submit" name="submit" id="S'enregistrer"></br>
    </form>

</body>
</html>