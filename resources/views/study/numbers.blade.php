<!DOCTYPE html>
<html lang="en">
<head>
    <x-head-meta/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    @env('local')
        @vite('resources/js/study/numbers.js')
    @else
        <link rel="stylesheet" href="{{ secure_asset('build/assets/numbers.js') }}">
    @endenv
</head>
<body>
    <x-header/>
    <main class="text-xs md:text-lg">
        <h1 class="text-3xl font-bold mb-10 text-center">Numbers</h1>
        <article class="theme-primary py-10">
            <div class="flex flex-col w-4/5 md:w-3/4 mx-auto">
                <section class="my-5">
                    <h2 class="text-2xl">Números de 1 a 19</h2>
                    <table class="mx-auto table-fixed w-full md:w-3/4 border-collapse border text-center">
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
                        </tbody>
                    </table>
                </section>
            </div>
        </article>
        <article class="theme-secondary py-10">
            <div class="flex flex-col w-4/5 md:w-3/4 mx-auto">
                <section class="my-5">
                    <h2 class="text-3xl font-bold mb-2">Múltiplos de 10 (20 a 90)</h2>
                    <table class="mx-auto table-fixed w-full md:w-3/4 border-collapse border text-center">
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
                                <td class="border border-gray-300 px-4 py-2">20</td>
                                <td class="border border-gray-300 px-4 py-2">twenty</td>
                                <td class="border border-gray-300 px-4 py-2">tuênti</td>
                                <td id="20" class="border border-gray-300 px-4 py-2 cursor-pointer"><i class="bi bi-volume-up-fill"></i></td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">30</td>
                                <td class="border border-gray-300 px-4 py-2">thirty</td>
                                <td class="border border-gray-300 px-4 py-2">thârti</td>
                                <td id="30" class="border border-gray-300 px-4 py-2 cursor-pointer"><i class="bi bi-volume-up-fill"></i></td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">40</td>
                                <td class="border border-gray-300 px-4 py-2">forty</td>
                                <td class="border border-gray-300 px-4 py-2">fórti</td>
                                <td id="40" class="border border-gray-300 px-4 py-2 cursor-pointer"><i class="bi bi-volume-up-fill"></i></td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">50</td>
                                <td class="border border-gray-300 px-4 py-2">fifty</td>
                                <td class="border border-gray-300 px-4 py-2">fífti</td>
                                <td id="50" class="border border-gray-300 px-4 py-2 cursor-pointer"><i class="bi bi-volume-up-fill"></i></td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">60</td>
                                <td class="border border-gray-300 px-4 py-2">sixty</td>
                                <td class="border border-gray-300 px-4 py-2">síksti</td>
                                <td id="60" class="border border-gray-300 px-4 py-2 cursor-pointer"><i class="bi bi-volume-up-fill"></i></td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">70</td>
                                <td class="border border-gray-300 px-4 py-2">seventy</td>
                                <td class="border border-gray-300 px-4 py-2">séventi</td>
                                <td id="70" class="border border-gray-300 px-4 py-2 cursor-pointer"><i class="bi bi-volume-up-fill"></i></td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">80</td>
                                <td class="border border-gray-300 px-4 py-2">eighty</td>
                                <td class="border border-gray-300 px-4 py-2">êiti</td>
                                <td id="80" class="border border-gray-300 px-4 py-2 cursor-pointer"><i class="bi bi-volume-up-fill"></i></td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">90</td>
                                <td class="border border-gray-300 px-4 py-2">ninety</td>
                                <td class="border border-gray-300 px-4 py-2">náinti</td>
                                <td id="90" class="border border-gray-300 px-4 py-2 cursor-pointer"><i class="bi bi-volume-up-fill"></i></td>
                            </tr>
                        </tbody>
                    </table>
                </section>
            </div>
        </article>
        <article class="theme-primary py-10">
            <div class="flex flex-col w-4/5 md:w-3/4 mx-auto">
                <section class="my-5">
                    <h2 class="text-lg font-bold mb-2">Regra para montar os números</h2>
                    <p>Estrutura: [Múltiplo de 10] + [número de 1 a 9]</p>
                    <h2 class="text-lg font-bold mb-2">Exemplos:</h2>
                    <ul class="list-disc pl-6">
                        <li><strong>42</strong> -> forty-two</li>
                        <li><strong>83</strong> -> eighty-three</li>
                        <li><strong>24</strong> -> twenty-four</li>
                        <li><strong>51</strong> -> fifty-one</li>
                        <li><strong>77</strong> -> seventy-seven</li>
                    </ul>
                </section>
            </div>
        </article>
        <article class="theme-secondary py-10">
            <div class="flex flex-col w-4/5 md:w-3/4 mx-auto">
                <section class="my-5">
                    <h2 class="text-3xl font-bold mb-2">Múltiplos de 100 (100 a 900)</h2>
                    <table class="mx-auto table-fixed w-full md:w-3/4 border-collapse border text-center">
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
                                <td class="border border-gray-300 px-4 py-2">100</td>
                                <td class="border border-gray-300 px-4 py-2">one hundred</td>
                                <td class="border border-gray-300 px-4 py-2">uãn rândréd</td>
                                <td id="100" class="border border-gray-300 px-4 py-2 cursor-pointer"><i class="bi bi-volume-up-fill"></i></td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">200</td>
                                <td class="border border-gray-300 px-4 py-2">two hundred</td>
                                <td class="border border-gray-300 px-4 py-2">tchú rândréd</td>
                                <td id="200" class="border border-gray-300 px-4 py-2 cursor-pointer"><i class="bi bi-volume-up-fill"></i></td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">300</td>
                                <td class="border border-gray-300 px-4 py-2">three hundred</td>
                                <td class="border border-gray-300 px-4 py-2">thrí rândréd</td>
                                <td id="300" class="border border-gray-300 px-4 py-2 cursor-pointer"><i class="bi bi-volume-up-fill"></i></td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">400</td>
                                <td class="border border-gray-300 px-4 py-2">four hundred</td>
                                <td class="border border-gray-300 px-4 py-2">fór rândréd</td>
                                <td id="400" class="border border-gray-300 px-4 py-2 cursor-pointer"><i class="bi bi-volume-up-fill"></i></td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">500</td>
                                <td class="border border-gray-300 px-4 py-2">five hundred</td>
                                <td class="border border-gray-300 px-4 py-2">faiv rândréd</td>
                                <td id="500" class="border border-gray-300 px-4 py-2 cursor-pointer"><i class="bi bi-volume-up-fill"></i></td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">600</td>
                                <td class="border border-gray-300 px-4 py-2">six hundred</td>
                                <td class="border border-gray-300 px-4 py-2">síks rândréd</td>
                                <td id="600" class="border border-gray-300 px-4 py-2 cursor-pointer"><i class="bi bi-volume-up-fill"></i></td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">700</td>
                                <td class="border border-gray-300 px-4 py-2">seven hundred</td>
                                <td class="border border-gray-300 px-4 py-2">séven rândréd</td>
                                <td id="700" class="border border-gray-300 px-4 py-2 cursor-pointer"><i class="bi bi-volume-up-fill"></i></td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">800</td>
                                <td class="border border-gray-300 px-4 py-2">eight hundred</td>
                                <td class="border border-gray-300 px-4 py-2">êit rândréd</td>
                                <td id="800" class="border border-gray-300 px-4 py-2 cursor-pointer"><i class="bi bi-volume-up-fill"></i></td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">900</td>
                                <td class="border border-gray-300 px-4 py-2">nine hundred</td>
                                <td class="border border-gray-300 px-4 py-2">náin rândréd</td>
                                <td id="900" class="border border-gray-300 px-4 py-2 cursor-pointer"><i class="bi bi-volume-up-fill"></i></td>
                            </tr>
                        </tbody>
                    </table>
                </section>
            </div>
        </article>
        <article class="theme-primary py-10">
            <div class="flex flex-col w-4/5 md:w-3/4 mx-auto">
                <section class="my-5">
                    <h2 class="text-lg font-bold mb-2">Regra para montar os números</h2>
                    <p>Estrutura: [centena] + and + [resto do número]</p>
                    <h2 class="text-lg font-bold mb-2">Exemplos:</h2>
                    <ul class="list-disc pl-6">
                        <li><strong>800</strong> -> eight hundred</li>
                        <li><strong>101</strong> -> one hundred and one</li>
                        <li><strong>215</strong> -> two hundred and fifteen</li>
                        <li><strong>360</strong> -> three hundred and sixty</li>
                        <li><strong>499</strong> -> four hundred and ninety-nine</li>
                    </ul>
                </section>
            </div>
        </article>
        <article class="theme-secondary py-10">
            <div class="flex flex-col w-4/5 md:w-3/4 mx-auto">
                <section class="my-5">
                    <h2 class="text-3xl font-bold mb-2">Múltiplos de 1.000 (1.000 a 9.000)</h2>
                    <table class="mx-auto table-fixed w-full md:w-3/4 border-collapse border text-center">
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
                                <td class="border border-gray-300 px-4 py-2">1.000</td>
                                <td class="border border-gray-300 px-4 py-2">one thousand</td>
                                <td class="border border-gray-300 px-4 py-2">uãn tháuzand</td>
                                <td id="1000" class="border border-gray-300 px-4 py-2 cursor-pointer"><i class="bi bi-volume-up-fill"></i></td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">2.000</td>
                                <td class="border border-gray-300 px-4 py-2">two thousand</td>
                                <td class="border border-gray-300 px-4 py-2">tchú tháuzand</td>
                                <td id="2000" class="border border-gray-300 px-4 py-2 cursor-pointer"><i class="bi bi-volume-up-fill"></i></td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">3.000</td>
                                <td class="border border-gray-300 px-4 py-2">three thousand</td>
                                <td class="border border-gray-300 px-4 py-2">thrí tháuzand</td>
                                <td id="3000" class="border border-gray-300 px-4 py-2 cursor-pointer"><i class="bi bi-volume-up-fill"></i></td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">4.000</td>
                                <td class="border border-gray-300 px-4 py-2">four thousand</td>
                                <td class="border border-gray-300 px-4 py-2">fór tháuzand</td>
                                <td id="4000" class="border border-gray-300 px-4 py-2 cursor-pointer"><i class="bi bi-volume-up-fill"></i></td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">5.000</td>
                                <td class="border border-gray-300 px-4 py-2">five thousand</td>
                                <td class="border border-gray-300 px-4 py-2">faiv tháuzand</td>
                                <td id="5000" class="border border-gray-300 px-4 py-2 cursor-pointer"><i class="bi bi-volume-up-fill"></i></td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">6.000</td>
                                <td class="border border-gray-300 px-4 py-2">six thousand</td>
                                <td class="border border-gray-300 px-4 py-2">síks tháuzand</td>
                                <td id="6000" class="border border-gray-300 px-4 py-2 cursor-pointer"><i class="bi bi-volume-up-fill"></i></td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">7.000</td>
                                <td class="border border-gray-300 px-4 py-2">seven thousand</td>
                                <td class="border border-gray-300 px-4 py-2">séven tháuzand</td>
                                <td id="7000" class="border border-gray-300 px-4 py-2 cursor-pointer"><i class="bi bi-volume-up-fill"></i></td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">8.000</td>
                                <td class="border border-gray-300 px-4 py-2">eight thousand</td>
                                <td class="border border-gray-300 px-4 py-2">êit tháuzand</td>
                                <td id="8000" class="border border-gray-300 px-4 py-2 cursor-pointer"><i class="bi bi-volume-up-fill"></i></td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">9.000</td>
                                <td class="border border-gray-300 px-4 py-2">nine thousand</td>
                                <td class="border border-gray-300 px-4 py-2">náin tháuzand</td>
                                <td id="9000" class="border border-gray-300 px-4 py-2 cursor-pointer"><i class="bi bi-volume-up-fill"></i></td>
                            </tr>
                        </tbody>
                    </table>
                </section>
            </div>
        </article>
        <article class="theme-primary py-10">
            <div class="flex flex-col w-4/5 md:w-3/4 mx-auto">
                <section class="my-5">
                    <h2 class="text-lg font-bold mb-2">Regra para montar os números</h2>
                    <p>Estrutura: [milhar] + thousand + [centena] + and + [resto do número]</p>
                    <h2 class="text-lg font-bold mb-2">Exemplos:</h2>
                    <ul class="list-disc pl-6">
                        <li><strong>1.200</strong> -> one thousand two hundred</li>
                        <li><strong>1.215</strong> -> one thousand two hundred and fifteen</li>
                        <li><strong>2.050</strong> -> two thousand and fifty</li>
                        <li><strong>3.001</strong> -> three thousand and one</li>
                        <li><strong>5.430</strong> -> five thousand four hundred and thirty</li>
                        <li><strong>7.888</strong> -> seven thousand eight hundred and eighty-eight</li>
                    </ul>
                </section>
            </div>
        </article>
        <article class="theme-secondary py-10">
            <div class="flex flex-col w-4/5 md:w-3/4 mx-auto">
                <section class="my-5">
                    <h2 class="text-3xl font-bold mb-2">Múltiplos de 10.000 (10.000 a 90.000)</h2>
                    <table class="mx-auto table-fixed w-full md:w-3/4 border-collapse border text-center">
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
                                <td class="border border-gray-300 px-4 py-2">10.000</td>
                                <td class="border border-gray-300 px-4 py-2">ten thousand</td>
                                <td class="border border-gray-300 px-4 py-2">tén tháuzand</td>
                                <td id="10000" class="border border-gray-300 px-4 py-2 cursor-pointer"><i class="bi bi-volume-up-fill"></i></td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">20.000</td>
                                <td class="border border-gray-300 px-4 py-2">twenty thousand</td>
                                <td class="border border-gray-300 px-4 py-2">tuênti tháuzand</td>
                                <td id="20000" class="border border-gray-300 px-4 py-2 cursor-pointer"><i class="bi bi-volume-up-fill"></i></td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">30.000</td>
                                <td class="border border-gray-300 px-4 py-2">thirty thousand</td>
                                <td class="border border-gray-300 px-4 py-2">thârti tháuzand</td>
                                <td id="30000" class="border border-gray-300 px-4 py-2 cursor-pointer"><i class="bi bi-volume-up-fill"></i></td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">40.000</td>
                                <td class="border border-gray-300 px-4 py-2">forty thousand</td>
                                <td class="border border-gray-300 px-4 py-2">fórti tháuzand</td>
                                <td id="40000" class="border border-gray-300 px-4 py-2 cursor-pointer"><i class="bi bi-volume-up-fill"></i></td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">50.000</td>
                                <td class="border border-gray-300 px-4 py-2">fifty thousand</td>
                                <td class="border border-gray-300 px-4 py-2">fífti tháuzand</td>
                                <td id="50000" class="border border-gray-300 px-4 py-2 cursor-pointer"><i class="bi bi-volume-up-fill"></i></td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">60.000</td>
                                <td class="border border-gray-300 px-4 py-2">sixty thousand</td>
                                <td class="border border-gray-300 px-4 py-2">síksti tháuzand</td>
                                <td id="60000" class="border border-gray-300 px-4 py-2 cursor-pointer"><i class="bi bi-volume-up-fill"></i></td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">70.000</td>
                                <td class="border border-gray-300 px-4 py-2">seventy thousand</td>
                                <td class="border border-gray-300 px-4 py-2">séventi tháuzand</td>
                                <td id="70000" class="border border-gray-300 px-4 py-2 cursor-pointer"><i class="bi bi-volume-up-fill"></i></td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">80.000</td>
                                <td class="border border-gray-300 px-4 py-2">eighty thousand</td>
                                <td class="border border-gray-300 px-4 py-2">êiti tháuzand</td>
                                <td id="80000" class="border border-gray-300 px-4 py-2 cursor-pointer"><i class="bi bi-volume-up-fill"></i></td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">90.000</td>
                                <td class="border border-gray-300 px-4 py-2">ninety thousand</td>
                                <td class="border border-gray-300 px-4 py-2">náinti tháuzand</td>
                                <td id="90000" class="border border-gray-300 px-4 py-2 cursor-pointer"><i class="bi bi-volume-up-fill"></i></td>
                            </tr>
                        </tbody>
                    </table>
                </section>
            </div>
        </article>
        <article class="theme-primary py-10">
            <div class="flex flex-col w-4/5 md:w-3/4 mx-auto">
                <section class="my-5">
                    <h2 class="text-lg font-bold mb-2">Regra para montar os números</h2>
                    <p>Estrutura: [milhar] + thousand + [centena] + and + [resto do número]</p>
                    <h2 class="text-lg font-bold mb-2">Exemplos:</h2>
                    <ul class="list-disc pl-6">
                        <li><strong>42.300</strong> -> forty-two thousand three hundred</li>
                        <li><strong>67.115</strong> -> sixty-seven thousand one hundred and fifteen</li>
                        <li><strong>80.020</strong> -> eighty thousand and twenty</li>
                        <li><strong>90.999</strong> -> ninety thousand nine hundred and ninety-nine</li>
                        <li><strong>12.464</strong> -> twelve thousand four hundred and sixty-four</li>
                    </ul>
                </section>
            </div>
        </article>
    </main>
    <x-footer/>
</body>
</html>