<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <x-header/>
    <main>
        <h1 class="text-3xl font-bold mb-10 text-center">Alphabet pronunciation</h1>
        <article class="theme-primary py-10">
            <div class="flex flex-col w-3/4 mx-auto">
                <section class="my-5">
                    <table class="mx-auto table-fixed w-3/4 border-collapse border text-center">
                        <thead>
                            <tr>
                                <th class="w-1/2 border border-gray-300 px-4 py-2">Letter</th>
                                <th class="w-1/2 border border-gray-300 px-4 py-2">Pronunciation</th>
                                <th class="w-1/2 border border-gray-300 px-4 py-2">Sound</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">A</td>
                                <td class="border border-gray-300 px-4 py-2">êi</td>
                                <td class="border border-gray-300 px-4 py-2"></td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">B</td>
                                <td class="border border-gray-300 px-4 py-2">bí</td>
                                <td class="border border-gray-300 px-4 py-2"></td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">C</td>
                                <td class="border border-gray-300 px-4 py-2">cí</td>
                                <td class="border border-gray-300 px-4 py-2"></td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">D</td>
                                <td class="border border-gray-300 px-4 py-2">dí</td>
                                <td class="border border-gray-300 px-4 py-2"></td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">E</td>
                                <td class="border border-gray-300 px-4 py-2">í</td>
                                <td class="border border-gray-300 px-4 py-2"></td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">F</td>
                                <td class="border border-gray-300 px-4 py-2">éf</td>
                                <td class="border border-gray-300 px-4 py-2"></td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">G</td>
                                <td class="border border-gray-300 px-4 py-2">dgí</td>
                                <td class="border border-gray-300 px-4 py-2"></td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">H</td>
                                <td class="border border-gray-300 px-4 py-2">êitch</td>
                                <td class="border border-gray-300 px-4 py-2"></td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">I</td>
                                <td class="border border-gray-300 px-4 py-2">ái</td>
                                <td class="border border-gray-300 px-4 py-2"></td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">J</td>
                                <td class="border border-gray-300 px-4 py-2">djêi</td>
                                <td class="border border-gray-300 px-4 py-2"></td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">K</td>
                                <td class="border border-gray-300 px-4 py-2">kêi</td>
                                <td class="border border-gray-300 px-4 py-2"></td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">L</td>
                                <td class="border border-gray-300 px-4 py-2">él</td>
                                <td class="border border-gray-300 px-4 py-2"></td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">M</td>
                                <td class="border border-gray-300 px-4 py-2">êm</td>
                                <td class="border border-gray-300 px-4 py-2"></td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">N</td>
                                <td class="border border-gray-300 px-4 py-2">ên</td>
                                <td class="border border-gray-300 px-4 py-2"></td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">O</td>
                                <td class="border border-gray-300 px-4 py-2">ôu</td>
                                <td class="border border-gray-300 px-4 py-2"></td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">P</td>
                                <td class="border border-gray-300 px-4 py-2">pí</td>
                                <td class="border border-gray-300 px-4 py-2"></td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">Q</td>
                                <td class="border border-gray-300 px-4 py-2">kíu</td>
                                <td class="border border-gray-300 px-4 py-2"></td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">R</td>
                                <td class="border border-gray-300 px-4 py-2">ár</td>
                                <td class="border border-gray-300 px-4 py-2"></td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">S</td>
                                <td class="border border-gray-300 px-4 py-2">és</td>
                                <td class="border border-gray-300 px-4 py-2"></td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">T</td>
                                <td class="border border-gray-300 px-4 py-2">tí</td>
                                <td class="border border-gray-300 px-4 py-2"></td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">U</td>
                                <td class="border border-gray-300 px-4 py-2">iúl</td>
                                <td class="border border-gray-300 px-4 py-2"></td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">V</td>
                                <td class="border border-gray-300 px-4 py-2">ví</td>
                                <td class="border border-gray-300 px-4 py-2"></td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">W</td>
                                <td class="border border-gray-300 px-4 py-2">dâbliu</td>
                                <td class="border border-gray-300 px-4 py-2"></td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">X</td>
                                <td class="border border-gray-300 px-4 py-2">éks</td>
                                <td class="border border-gray-300 px-4 py-2"></td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">Y</td>
                                <td class="border border-gray-300 px-4 py-2">uái</td>
                                <td class="border border-gray-300 px-4 py-2"></td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">Z</td>
                                <td class="border border-gray-300 px-4 py-2">zí</td>
                                <td class="border border-gray-300 px-4 py-2"></td>
                            </tr>
                        </tbody>
                    </table>
                </section>
            </div>
        </article>
    </main>
    <x-footer/>
</body>
</html>