<?php


// var_dump($_POST);




include('./fonctions.php');
$message = "";

if (isset($_POST['submit'])) :
    $name = htmlentities(trim($_POST["name"]));
    $photo = htmlentities(trim($_POST["photo"]));
    $nationality = htmlentities(trim($_POST["nationality"]));
    $flag = htmlentities(trim($_POST["flag"]));
    $club = htmlentities(trim($_POST["club"]));
    $logo = htmlentities(trim($_POST["logo"]));
    $position = htmlentities(trim($_POST["position"]));
    $rating = htmlentities(trim($_POST["rating"]));

    $diving = $_POST["diving"];
    $handling = $_POST["handling"];
    $kicking = $_POST["kicking"];
    $reflexes = $_POST["reflexes"];
    $speed = $_POST["speed"];
    $positioning = $_POST["positioning"];

    $pace = $_POST["pace"];
    $shooting = $_POST["shooting"];
    $passing = $_POST["passing"];
    $dribbling = $_POST["dribbling"];
    $defending = $_POST["defending"];
    $physical = $_POST["physical"];


    if (empty($name)):
        $errorMessage = "Tous les champs obligatoires doivent être remplis";

    elseif (empty($photo)):
        $errorMessage = "Tous les champs obligatoires doivent être remplis";
    elseif (empty($nationality)):
        $errorMessage = "Tous les champs obligatoires doivent être remplis";
    elseif (empty($flag)):
        $errorMessage = "Tous les champs obligatoires doivent être remplis";
    elseif (empty($club)):
        $errorMessage = "Tous les champs obligatoires doivent être remplis";
    elseif (empty($logo)):
        $errorMessage = "Tous les champs obligatoires doivent être remplis";
    elseif (empty($position)):
        $errorMessage = "Tous les champs obligatoires doivent être remplis";
    elseif (empty($rating)):
        $errorMessage = "Tous les champs obligatoires doivent être remplis";


    else :
        
        $values = array(
            'name' => $name,
            'photo' => $photo,
            'nationality' => $nationality,
            'flag' => $flag,
            'club' => $club,
            'logo' => $logo,
            'position' => $position,
            'rating' => $rating,
            'diving' => $diving,
            'handling' => $handling,
            'kicking' => $kicking,
            'reflexes' => $reflexes,
            'speed' => $speed,
            'positioning' => $positioning,
            'pace' => $pace,
            'shooting' => $shooting,
            'passing' => $passing,
            'dribbling' => $dribbling,
            'defending' => $defending,
            'physical' => $physical 
        );

       if (emp_insert($conn, $values) === true):
        $message = ' <div class="alert alert-warning bg-green-500 text-white p-4 rounded mb-4"> Joueur ajouté avec succès </div>';
        else :
        $message = ' <div class="alert alert-warning bg-red-500 text-white p-4 rounded mb-4"> Une Erreur est survenue Veuillez reessayer!! </div>';
    endif;
endif;
endif;

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Joueur</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <h1 class="text-center my-11 text-2xl font-bold">Formulaire d'ajout de joueur</h1>

    <div class="container mx-auto p-4">

    <?php
        if (!empty($errorMessage)) :

            echo ' <div class="alert alert-warning bg-red-500 text-white p-4 rounded mb-4">' . $errorMessage . '</div>';
        else:
         echo $message;
        endif;
          ?>

        <form method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nom</label>
                <input type="text" id="name" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700" placeholder="Nom du joueur" >
            </div>
            <div class="mb-4">
                <label for="photo" class="block text-gray-700 text-sm font-bold mb-2">Photo</label>
                <input type="text" id="photo" name="photo" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700" placeholder="URL de la photo" >
            </div>
            <div class="mb-4">
                <label for="nationality" class="block text-gray-700 text-sm font-bold mb-2">Nationalité</label>
                <input type="text" id="nationality" name="nationality" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700" placeholder="Nationalité">
            </div>
            <div class="mb-4">
                <label for="flag" class="block text-gray-700 text-sm font-bold mb-2">Drapeau</label>
                <input type="text" id="flag" name="flag" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700" placeholder="URL du drapeau" >
            </div>
            <div class="mb-4">
                <label for="club" class="block text-gray-700 text-sm font-bold mb-2">Club</label>
                <input type="text" id="club" name="club" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700" placeholder="Nom du club" >
            </div>
            <div class="mb-4">
                <label for="logo" class="block text-gray-700 text-sm font-bold mb-2">Logo</label>
                <input type="text" id="logo" name="logo" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700" placeholder="URL du logo" >
            </div>
            <div class="mb-4">
                <label for="rating" class="block text-gray-700 text-sm font-bold mb-2">Rating</label>
                <input type="number" id="rating" name="rating" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700" placeholder="Rating" >
            </div>
            <div class="mb-4">
                <label for="position" class="block text-gray-700 text-sm font-bold mb-2">Position</label>
                <select name="position" id="position" onchange="afficher()" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow" >
                    <option value="">Sélectionner la position</option>
                    <option value="GK">GK</option>
                    <option value="LB">LB</option>
                    <option value="LCB">LCB</option>
                    <option value="RCB">RCB</option>
                    <option value="RB">RB</option>
                    <option value="LCM">LCM</option>
                    <option value="CM">CM</option>
                    <option value="RCM">RCM</option>
                    <option value="LW">LW</option>
                    <option value="ST">ST</option>
                    <option value="RW">RW</option>
                </select>
            </div>

            <div id="gkStats" class="hidden">
                <h3 class="text-lg font-bold mb-2">GK :</h3>
                <input type="number" id="diving" name="diving" placeholder="Diving" class="w-full mb-2">
                <input type="number" id="handling" name="handling" placeholder="Handling" class="w-full mb-2">
                <input type="number" id="kicking" name="kicking" placeholder="Kicking" class="w-full mb-2">
                <input type="number" id="reflexes" name="reflexes" placeholder="Reflexes" class="w-full mb-2">
                <input type="number" id="speed" name="speed" placeholder="Speed" class="w-full mb-2">
                <input type="number" id="positioning" name="positioning" placeholder="Positioning" class="w-full mb-2">
            </div>

            <div id="playerStats" class="hidden">
                <h3 class="text-lg font-bold mb-2">Joueur :</h3>
                <input type="number" id="pace" name="pace" placeholder="Pace" class="w-full mb-2">
                <input type="number" id="shooting" name="shooting" placeholder="Shooting" class="w-full mb-2">
                <input type="number" id="passing" name="passing" placeholder="Passing" class="w-full mb-2">
                <input type="number" id="dribbling" name="dribbling" placeholder="Dribbling" class="w-full mb-2">
                <input type="number" id="defending" name="defending" placeholder="Defending" class="w-full mb-2">
                <input type="number" id="physical" name="physical" placeholder="Physical" class="w-full mb-2">
            </div>

            <div class="flex items-center justify-between">
                <button type="submit" name="submit" class="bg-green-500 hover:bg-green-950 text-white font-bold py-2 px-4 rounded">
                    Ajouter le joueur
                </button>
                <a href="./index.php" name="annuler" class="bg-orange-800 hover:bg-orange-950 text-white font-bold py-2 px-4 rounded" role="button">
                    Annuler
                </a>
            </div>
        </form>
    </div>

    <script>
        function afficher() {
            const position = document.getElementById('position').value;
            const gkStats = document.getElementById('gkStats');
            const playerStats = document.getElementById('playerStats');

            gkStats.classList.add('hidden');
            playerStats.classList.add('hidden');

            if (position === 'GK') {
                gkStats.classList.remove('hidden');
            } else if (position !== '') {
                playerStats.classList.remove('hidden');
            }
        }

        afficher();
    </script>
</body>

</html>