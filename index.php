<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Tailwind</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">

  
    <div class="flex">

      
        <aside class="w-64 bg-gray-800 h-screen text-gray-100">
            <div class="p-6">
                <h1 class="text-2xl font-bold">Dashboard FUT</h1>
            </div>
            <nav>
                <ul>
                    <li class="p-2 hover:bg-gray-700">
                        <a href="./index.php" class="block">Les joueurs</a>
                    </li>

                    </li>
                    <li class="p-2 hover:bg-gray-700">
                        <a href="./terain.php" class="block">Terain</a>
                    </li>
                </ul>
            </nav>
        </aside>

      
        <div class="flex-1 flex flex-col h-screen">

           
            <header class="bg-white shadow-md p-4 flex justify-between items-center">
                <h2 class="text-xl font-semibold text-gray-800">La liste Des Joueurs</h2>
                <a href="./ajoute.php" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600" role="button">
                    Ajouter un Joueur
                </a>
            </header>

         
            <main class="p-6 overflow-y-auto">
                <div class="bg-white shadow-md rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                            <tr>
                                <th class="px-4 py-3">ID</th>
                                <th class="px-4 py-3">Nom</th>
                                <th class="px-4 py-3">Photo</th>
                                <th class="px-4 py-3">position</th>
                                <th class="px-4 py-3">rating</th>
                                <th class="px-4 py-3">Actions</th>
                                
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            include 'connection.php';
                            $sql = "SELECT * FROM Players";
                            $result = $conn->query($sql);

                            if (!$result) {
                                die("invalid query: " . $conn->error);
                            }
                            while ($row = $result->fetch_assoc()) {
                                echo "
                                <tr class='hover:bg-gray-100'>
                                    <td class='px-4 py-2 font-medium text-gray-800'>" . ($row['id']) . "</td>
                                    <td class='px-4 py-2 font-medium text-gray-800'>" . ($row['name']) . "</td>
                                    <td class='px-4 py-2'>
                                        <img src='" . ($row['photo']) . "' alt='Photo' class='w-12 h-8 object-cover'>
                                    </td>
                                    <td class='px-4 py-2'>" . ($row['position']) . "</td>
                                    <td class='px-4 py-2'>" . ($row['rating']) . "</td>
                                    <td class='px-4 py-2'>
                                        <a href='./edit.php?id=" . ($row['id']) . "' class='text-blue-600 hover:underline'>Edit</a>
                                        <a href='./delete.php?id=" . ($row['id']) . "' class='text-red-600 hover:underline ml-3'>Remove</a>
                                    </td>
                                </tr>
                                ";
                                
                            }

                            ?>

                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>

</body>

</html>
