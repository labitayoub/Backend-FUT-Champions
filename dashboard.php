<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/style.css">

</head>

<body>
    <div id="playerform">
        <form method="POST">
            <aside>
                <div class="mb-4">
                    <label for="name" class="block text-white font-medium mb-2">Name</label>
                    <input type="text" id="name" name="name"
                        class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Enter name">
                    <span class="error"></span>
                </div>
                <div class="mb-4 flex justify-between">
                    <div>
                        <label for="photo"
                            class="add-imgs block px-4 py-2 font-medium mb-2 text-black rounded hover:bg-yellow-600 ">Upload
                            Image</label>
                        <input type="file" id="photo" name="photo" onchange="loadImage(event,'profile')"
                            class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Enter photo URL" style="display: none;">
                        <span class="error"></span>
                    </div>
                    <div class="style-imgs">
                        <img id="profile" style="width: 100px; height: 100px;"
                            src="./src/assets/images/img.png" />
                    </div>

                </div>
                <div class="mb-4">
                    <label for="position" class="block text-white font-medium mb-2">Position</label>
                    <select id="position" name="position"
                        class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        onchange="toggleFields()">
                        <option value="" disabled selected>Select a position</option>

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
                    <span class="error"></span>
                </div>
                <div class="mb-4">
                    <label for="nationality" class="block text-white font-medium mb-2">Nationality</label>
                    <select id="nationality" name="nationality"
                        class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="" disabled selected>Select a nationality</option>
                        <option value="us">United States</option>
                        <option value="gb">United Kingdom</option>
                        <option value="fr">France</option>
                        <option value="it">Italy</option>
                        <option value="ma">Morocco</option>
                        <option value="es">Spain</option>
                    </select>
                    <span class="error"></span>
                </div>
                <div class="mb-4 flex justify-between p-3">
                    <div>
                        <label for="flag"
                            class="add-imgs block font-medium mb-2 px-4 py-2  rounded hover:bg-yellow-600 ">Flag
                        </label>
                        <input type="file" id="flag" name="flag" onchange="loadImage(event,'flagimg')"
                            class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Enter flag" style="display: none; ">
                        <span class="error"></span>
                    </div>
                    <div class="style-imgs">
                        <img id="flagimg" style="width: 30px; height: 30px;"
                            src="/src/assets/images/flags/india.png" alt="">
                    </div>
                </div>
                <div class="mb-4 ">
                    <div>
                        <label for="club" class="block text-white font-medium mb-2">Club</label>
                        <input type="text" id="club" name="club"
                            class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Enter club">
                        <span class="error"></span>
                    </div>
                </div>
                <div class="mb-4 flex justify-between p-3">
                    <div>
                        <label for="logo"
                            class="add-imgs block font-medium mb-2  text-black rounded hover:bg-yellow-600 ">Add
                            club Logo </label>
                        <input type="file" id="logo" name="logo" onchange="loadImage(event, 'logoimg')"
                            class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Enter club logo URL" style="display: none;">
                        <span class="error"></span>
                    </div>
                    <div class="style-imgs">
                        <img id="logoimg" style="width: 30px; height: 30px;" src="/src/assets/images/logos/club.png"
                            alt="">
                    </div>
                </div>


                <div id="outfield-fields" class="hidden">
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                        <div>
                            <label for="rating" class="block text-white font-medium mb-2">Rating</label>
                            <input type="number" id="rating" name="rating"
                                class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                placeholder="Enter rating">
                            <span class="error text-red-500 text-sm"></span>
                        </div>
                        <div>
                            <label for="pace" class="block text-white font-medium mb-2">Pace</label>
                            <input type="number" id="pace" name="pace"
                                class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                placeholder="Enter pace">
                            <span class="error text-red-500 text-sm"></span>
                        </div>
                        <div>
                            <label for="shooting" class="block text-white font-medium mb-2">Shooting</label>
                            <input type="number" id="shooting" name="shooting"
                                class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                placeholder="Enter shooting">
                            <span class="error text-red-500 text-sm"></span>
                        </div>
                        <div>
                            <label for="passing" class="block text-white font-medium mb-2">Passing</label>
                            <input type="number" id="passing" name="passing"
                                class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                placeholder="Enter passing">
                            <span class="error text-red-500 text-sm"></span>
                        </div>
                        <div>
                            <label for="dribbling" class="block text-white font-medium mb-2">Dribbling</label>
                            <input type="number" id="dribbling" name="dribbling"
                                class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                placeholder="Enter dribbling">
                            <span class="error text-red-500 text-sm"></span>
                        </div>
                        <div>
                            <label for="defending" class="block text-white font-medium mb-2">Defending</label>
                            <input type="number" id="defending" name="defending"
                                class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                placeholder="Enter defending">
                            <span class="error text-red-500 text-sm"></span>
                        </div>
                        <div>
                            <label for="physical" class="block text-white font-medium mb-2">Physical</label>
                            <input type="number" id="physical" name="physical"
                                class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                placeholder="Enter physical">
                            <span class="error text-red-500 text-sm"></span>
                        </div>
                    </div>
                </div>

                <div id="goalkeeper-fields" class="hidden">
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                        <div>
                            <label for="rating" class="block text-white font-medium mb-2">Rating</label>
                            <input type="number" id="rating" name="rating"
                                class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                placeholder="Enter rating">
                            <span class="error text-red-500 text-sm"></span>
                        </div>
                        <div>
                            <label for="diving" class="block text-white font-medium mb-2">Diving</label>
                            <input type="number" id="diving" name="diving"
                                class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                placeholder="Enter diving">
                            <span class="error text-red-500 text-sm"></span>
                        </div>
                        <div>
                            <label for="handling" class="block text-white font-medium mb-2">Handling</label>
                            <input type="number" id="handling" name="handling"
                                class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                placeholder="Enter handling">
                            <span class="error text-red-500 text-sm"></span>
                        </div>
                        <div>
                            <label for="kicking" class="block text-white font-medium mb-2">Kicking</label>
                            <input type="number" id="kicking" name="kicking"
                                class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                placeholder="Enter kicking">
                            <span class="error text-red-500 text-sm"></span>
                        </div>
                        <div>
                            <label for="reflexes" class="block text-white font-medium mb-2">Reflexes</label>
                            <input type="number" id="reflexes" name="reflexes"
                                class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                placeholder="Enter reflexes">
                            <span class="error text-red-500 text-sm"></span>
                        </div>
                        <div>
                            <label for="speed" class="block text-white font-medium mb-2">Speed</label>
                            <input type="number" id="speed" name="speed"
                                class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                placeholder="Enter speed">
                            <span class="error text-red-500 text-sm"></span>
                        </div>
                        <div>
                            <label for="positioning" class="block text-white font-medium mb-2">Positioning</label>
                            <input type="number" id="positioning" name="positioning"
                                class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                placeholder="Enter positioning">
                            <span class="error text-red-500 text-sm"></span>
                        </div>
                    </div>
                </div>



                <div class="flex justify-center mt-6">
                    <button type="submit"
                        class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-700 focus:outline-none">Submit</button>
                </div>
        </form>
    </div>
    </aside>
</body>

</html>