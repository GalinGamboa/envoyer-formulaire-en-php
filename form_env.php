<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <div class="container">
        <form action="form_rec.php" method="POST">
            
            <label for="name">Prenom:</label>
                <input type="text" name="name" id="name"><br><br>

            <label for="password">Password:</label>
                <input type="password" name="password" id="password"><br><br>

            <label for="education">Education:</label>
                <select name="education" id="education">
                    <option value="sans-études">Sans études</option>
                    <option value="scolarite-obligatoire" selected="selected">Scolarité obligatoire</option>
                    <option value="formation-professionnelle">Formation professionnel</option>
                    <option value="formation-universitaire">formation universitaire</option>
                </select><br><br>

            <label for="nationalite">Nationalite:</label>
                <input type="radio" name="nationalite" id="" value="Francaise">Francaise</input>
                <input type="radio" name="nationalite" id="" value="Autre">Autre</input> <br><br>

            <label for="langues">Langues:</label>
                <input type="checkbox" name="langues[]" id="" value="Francais">Francais</input>
                <input type="checkbox" name="langues[]" id="" value="Espagnol">Espagnol</input>
                <input type="checkbox" name="langues[]" id="" value="Allemand">Allemand</input>
                <input type="checkbox" name="langues[]" id="" value="Anglais">Anglais</input><br><br>


            <label for="email">Email:</label>
                <input type="email" name="email" id="email"><br><br>

            <label for="site_web">Site Web:</label>
                <input type="text" name="site_web" id=""><br><br>

            <input type="submit" value="ENVOYER">

        </form>
    </div>

</body>
</html>