<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    @vite('resources/css/app.css')
    @vite('resources/js/exercises/UnjumbleIt.js')
</head>
<body>
    <x-header/>

    <main>
        <h1 class="text-center text-3xl m-20">Unjumble It!</h1>
        <article class="flex flex-col justify-center theme-primary py-10">
            <section class="flex justify-center gap-4 mb-7">
                <div>
                    <input type="checkbox" id="object" class="hidden peer">
                    <label for="object" class="peer-checked:bg-orange-500 peer-checked:text-white bg-white border-2 border-[black] px-4 py-2 cursor-pointer transition">Object</label>
                </div>
                <div>
                    <input type="checkbox" id="verb" class="hidden peer">
                    <label for="verb" class="peer-checked:bg-orange-500 peer-checked:text-white bg-white border-2 border-[black] px-4 py-2 cursor-pointer transition">Verb</label>
                </div>
            </section>
            <section class="flex justify-center mb-5">
                <span class="bg-gray-200 text-center mr-2.5 sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/6 rounded border-1" id="word"></span><strong> == </strong><input type="text" class="ml-2.5 text-center sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/6 rounded border-1" id="response" />
            </section>
            <section class="flex justify-center gap-x-10">
                <!-- <input type="submit" id="toRespond" value="to respond" class="border border-gray-500 text-gray-700 px-4 py-2 rounded w-48 hover:bg-gray-100 cursor-pointer transition duration-500 ease-in-out" /> -->
                <button id="toRespond" class="border border-gray-500 text-gray-700 px-4 py-2 border-2 w-48 cursor-pointer transition duration-500 ease-in-out">to respond</button>
                <button id="reload" class="border border-gray-500 text-gray-700 px-4 py-2 border-2 w-48 cursor-pointer transition duration-500 ease-in-out"><i class="bi bi-arrow-clockwise"></i></button>
            </section>
        </article>
        <x-exercise-result idBtn="toRespond" idInput="response" />
    </main>

    <x-footer/>
</body>
</html>