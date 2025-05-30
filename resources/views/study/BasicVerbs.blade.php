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
    <main class="bg-zinc-950 text-zinc-400">
        <section>
            <h1 class="text-3xl font-bold mb-2 text-neutral-300">📌 O que é um verbo?</h1>
            <p>Verbo é uma ação ou estado.</p>
            <p>Exemplos em português: ser, estar, ter, gostar, falar, comer...</p>
        </section>
        <section>
            <h2>To be (ser/estar)</h2>
            <table class="mx-auto table-fixed w-3/4 border-collapse border border-gray-300 text-center">
                <thead class="bg-gray-900">
                    <tr>
                        <th class="w-1/2 border border-gray-300 px-4 py-2">Pronoun</th>
                        <th class="w-1/2 border border-gray-300 px-4 py-2">Verb to be</th>
                        <th class="w-1/2 border border-gray-300 px-4 py-2">example</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">I</td>
                        <td class="border border-gray-300 px-4 py-2">am</td>
                        <td class="border border-gray-300 px-4 py-2">I am happy.</td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">You</td>
                        <td class="border border-gray-300 px-4 py-2">are</td>
                        <td class="border border-gray-300 px-4 py-2">You are my friend.</td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">He/She/It</td>
                        <td class="border border-gray-300 px-4 py-2">is</td>
                        <td class="border border-gray-300 px-4 py-2">Se is nice.</td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">We</td>
                        <td class="border border-gray-300 px-4 py-2">are</td>
                        <td class="border border-gray-300 px-4 py-2">We are ready.</td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">They</td>
                        <td class="border border-gray-300 px-4 py-2">are</td>
                        <td class="border border-gray-300 px-4 py-2">They are students.</td>
                    </tr>
                </tbody>
            </table>
        </section>
        <section>
            <h2>To have (ter)</h2>
            <table class="mx-auto table-fixed w-3/4 border-collapse border border-gray-300 text-center">
                <thead class="bg-gray-900">
                    <tr>
                        <th class="w-1/2 border border-gray-300 px-4 py-2">Pronoun</th>
                        <th class="w-1/2 border border-gray-300 px-4 py-2">Verb to have</th>
                        <th class="w-1/2 border border-gray-300 px-4 py-2">example</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">I</td>
                        <td class="border border-gray-300 px-4 py-2">have</td>
                        <td class="border border-gray-300 px-4 py-2">I have car.</td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">You</td>
                        <td class="border border-gray-300 px-4 py-2">have</td>
                        <td class="border border-gray-300 px-4 py-2">You have a dog.</td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">He/She/It</td>
                        <td class="border border-gray-300 px-4 py-2">has</td>
                        <td class="border border-gray-300 px-4 py-2">He has a bike.</td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">We/They</td>
                        <td class="border border-gray-300 px-4 py-2">have</td>
                        <td class="border border-gray-300 px-4 py-2">They have books.</td>
                    </tr>
                </tbody>
            </table>
            <p>⚠️ Atenção: só muda para has no he / she / it.</p>
        </section>
        <section>
            <h2>To like (gostar)</h2>
            <table class="mx-auto table-fixed w-3/4 border-collapse border border-gray-300 text-center">
                <thead class="bg-gray-900">
                    <tr>
                        <th class="w-1/2 border border-gray-300 px-4 py-2">Pronoun</th>
                        <th class="w-1/2 border border-gray-300 px-4 py-2">Verb to have</th>
                        <th class="w-1/2 border border-gray-300 px-4 py-2">example</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">I</td>
                        <td class="border border-gray-300 px-4 py-2">like</td>
                        <td class="border border-gray-300 px-4 py-2">I like pizza.</td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">You</td>
                        <td class="border border-gray-300 px-4 py-2">like</td>
                        <td class="border border-gray-300 px-4 py-2">You like music.</td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">He/She/It</td>
                        <td class="border border-gray-300 px-4 py-2">likes</td>
                        <td class="border border-gray-300 px-4 py-2">She likes chocolate.</td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">We/They</td>
                        <td class="border border-gray-300 px-4 py-2">like</td>
                        <td class="border border-gray-300 px-4 py-2">We like movies.</td>
                    </tr>
                </tbody>
            </table>
            <p>⚠️ Acrescenta -s no final com he / she / it → "likes".</p>
        </section>
        <section>
            <h2 class="text-lg font-bold mb-2">🧠 Dica rápida para verbos no presente:</h2>
            <ul class="list-disc pl-6">
                <li>Com <strong>i, you, we, they</strong> -> verbo normal (sem s).</li>
                <li>Com <strong>he, she, it</strong> -> verbo + s.</li>
            </ul>
        </section>
    </main>
    <x-footer/>
</body>
</html>