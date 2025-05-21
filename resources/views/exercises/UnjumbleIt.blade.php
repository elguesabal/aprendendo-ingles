<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    @vite(['resources/js/exercises/UnjumbleIt.js'])
</head>
<body>
    <x-header/>

    <main class="bg-green-100 flex flex-col justify-center">
        <h1 class="text-center text-3xl m-20">Unjumble It!</h1>
        <div class="flex justify-center gap-4 mb-7">
            <div>
                <input type="checkbox" id="object" class="hidden peer" checked>
                <label for="object" class="peer-checked:bg-green-600 peer-checked:text-white bg-white text-green-600 border border-green-600 px-4 py-2 rounded cursor-pointer transition">Object</label>
            </div>
            <div>
                <input type="checkbox" id="verb" class="hidden peer" checked>
                <label for="verb" class="peer-checked:bg-green-600 peer-checked:text-white bg-white text-green-600 border border-green-600 px-4 py-2 rounded cursor-pointer transition">Verb</label>
            </div>
        </div>
        <div class="flex justify-center mb-5">
            <span class="mr-2.5" id="word"></span><strong> == </strong><input type="text" class="ml-2.5" id="response" />
        </div>
        <input type="submit" id="toRespond" value="to respond" class="border border-gray-500 text-gray-700 px-4 py-2 rounded w-48 mx-auto hover:bg-gray-100 cursor-pointer transition duration-500 ease-in-out" />
        <x-exercise-result idBtn="toRespond" idInput="response" />
    </main>
</body>
</html>