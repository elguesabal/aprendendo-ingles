<!DOCTYPE html>
<html lang="en">
<head>
    <x-head-meta/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
</head>
<body>
    <x-header/>
    <main>
        <h1 class="text-3xl font-bold mb-10 text-center">Numbers</h1>
        <article class="theme-primary py-10">
            <div class="flex flex-col w-3/4 mx-auto">
                <section class="my-5">
                    <table class="mx-auto table-fixed w-3/4 border-collapse border text-center">
                        <thead>
                            <tr>
                                <th class="w-1/2 border border-gray-300 px-4 py-2">Number</th>
                                <th class="w-1/2 border border-gray-300 px-4 py-2">Spelling</th>
                                <th class="w-1/2 border border-gray-300 px-4 py-2">Pronunciation</th>
                                <th class="w-1/2 border border-gray-300 px-4 py-2">Sound</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">0</td>
                                <td class="border border-gray-300 px-4 py-2">zero</td>
                                <td class="border border-gray-300 px-4 py-2">zírôu</td>
                                <td id="0" class="border border-gray-300 px-4 py-2 cursor-pointer"><i class="bi bi-volume-up-fill"></i></td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">1</td>
                                <td class="border border-gray-300 px-4 py-2">one</td>
                                <td class="border border-gray-300 px-4 py-2">uãn</td>
                                <td id="1" class="border border-gray-300 px-4 py-2 cursor-pointer"><i class="bi bi-volume-up-fill"></i></td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">2</td>
                                <td class="border border-gray-300 px-4 py-2">two</td>
                                <td class="border border-gray-300 px-4 py-2">tchú</td>
                                <td id="2" class="border border-gray-300 px-4 py-2 cursor-pointer"><i class="bi bi-volume-up-fill"></i></td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">3</td>
                                <td class="border border-gray-300 px-4 py-2">three</td>
                                <td class="border border-gray-300 px-4 py-2">thrí</td>
                                <td id="3" class="border border-gray-300 px-4 py-2 cursor-pointer"><i class="bi bi-volume-up-fill"></i></td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">4</td>
                                <td class="border border-gray-300 px-4 py-2">four</td>
                                <td class="border border-gray-300 px-4 py-2">fór</td>
                                <td id="4" class="border border-gray-300 px-4 py-2 cursor-pointer"><i class="bi bi-volume-up-fill"></i></td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">5</td>
                                <td class="border border-gray-300 px-4 py-2">five</td>
                                <td class="border border-gray-300 px-4 py-2">faiv</td>
                                <td id="5" class="border border-gray-300 px-4 py-2 cursor-pointer"><i class="bi bi-volume-up-fill"></i></td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">6</td>
                                <td class="border border-gray-300 px-4 py-2">six</td>
                                <td class="border border-gray-300 px-4 py-2">síks</td>
                                <td id="6" class="border border-gray-300 px-4 py-2 cursor-pointer"><i class="bi bi-volume-up-fill"></i></td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">7</td>
                                <td class="border border-gray-300 px-4 py-2">seven</td>
                                <td class="border border-gray-300 px-4 py-2">séven</td>
                                <td id="7" class="border border-gray-300 px-4 py-2 cursor-pointer"><i class="bi bi-volume-up-fill"></i></td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">8</td>
                                <td class="border border-gray-300 px-4 py-2">eight</td>
                                <td class="border border-gray-300 px-4 py-2">êit</td>
                                <td id="8" class="border border-gray-300 px-4 py-2 cursor-pointer"><i class="bi bi-volume-up-fill"></i></td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">9</td>
                                <td class="border border-gray-300 px-4 py-2">nine</td>
                                <td class="border border-gray-300 px-4 py-2">náin</td>
                                <td id="9" class="border border-gray-300 px-4 py-2 cursor-pointer"><i class="bi bi-volume-up-fill"></i></td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">10</td>
                                <td class="border border-gray-300 px-4 py-2">ten</td>
                                <td class="border border-gray-300 px-4 py-2">tén</td>
                                <td id="10" class="border border-gray-300 px-4 py-2 cursor-pointer"><i class="bi bi-volume-up-fill"></i></td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">11</td>
                                <td class="border border-gray-300 px-4 py-2">eleven</td>
                                <td class="border border-gray-300 px-4 py-2">iléven</td>
                                <td id="11" class="border border-gray-300 px-4 py-2 cursor-pointer"><i class="bi bi-volume-up-fill"></i></td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">12</td>
                                <td class="border border-gray-300 px-4 py-2">twelve</td>
                                <td class="border border-gray-300 px-4 py-2">tuélv</td>
                                <td id="12" class="border border-gray-300 px-4 py-2 cursor-pointer"><i class="bi bi-volume-up-fill"></i></td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">13</td>
                                <td class="border border-gray-300 px-4 py-2">thirteen</td>
                                <td class="border border-gray-300 px-4 py-2">thârtín</td>
                                <td id="13" class="border border-gray-300 px-4 py-2 cursor-pointer"><i class="bi bi-volume-up-fill"></i></td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">14</td>
                                <td class="border border-gray-300 px-4 py-2">fourteen</td>
                                <td class="border border-gray-300 px-4 py-2">fórtín</td>
                                <td id="14" class="border border-gray-300 px-4 py-2 cursor-pointer"><i class="bi bi-volume-up-fill"></i></td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">15</td>
                                <td class="border border-gray-300 px-4 py-2">fifteen</td>
                                <td class="border border-gray-300 px-4 py-2">fíftín</td>
                                <td id="15" class="border border-gray-300 px-4 py-2 cursor-pointer"><i class="bi bi-volume-up-fill"></i></td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">16</td>
                                <td class="border border-gray-300 px-4 py-2">sixteen</td>
                                <td class="border border-gray-300 px-4 py-2">síkstín</td>
                                <td id="16" class="border border-gray-300 px-4 py-2 cursor-pointer"><i class="bi bi-volume-up-fill"></i></td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">17</td>
                                <td class="border border-gray-300 px-4 py-2">seventeen</td>
                                <td class="border border-gray-300 px-4 py-2">séventín</td>
                                <td id="17" class="border border-gray-300 px-4 py-2 cursor-pointer"><i class="bi bi-volume-up-fill"></i></td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">18</td>
                                <td class="border border-gray-300 px-4 py-2">eighteen</td>
                                <td class="border border-gray-300 px-4 py-2">êitín</td>
                                <td id="18" class="border border-gray-300 px-4 py-2 cursor-pointer"><i class="bi bi-volume-up-fill"></i></td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">19</td>
                                <td class="border border-gray-300 px-4 py-2">nineteen</td>
                                <td class="border border-gray-300 px-4 py-2">náintín</td>
                                <td id="19" class="border border-gray-300 px-4 py-2 cursor-pointer"><i class="bi bi-volume-up-fill"></i></td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">20</td>
                                <td class="border border-gray-300 px-4 py-2">twenty</td>
                                <td class="border border-gray-300 px-4 py-2">tuêntí</td>
                                <td id="20" class="border border-gray-300 px-4 py-2 cursor-pointer"><i class="bi bi-volume-up-fill"></i></td>
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