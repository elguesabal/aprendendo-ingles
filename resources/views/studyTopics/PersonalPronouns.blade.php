<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <x-header/>
    <main>
        <section>
            <h1 class="text-3xl font-bold mb-2">Personal pronouns</h1>
            <p>Pronomes pessoais são palavras que usamos para falar sobre pessoas ou coisas sem repetir o nome delas.</p>
            <p>Exemplo em português:</p>
            <p>João está cansado. → Ele está cansado.</p>
            <p>Em inglês, é a mesma ideia! Veja a tabela:</p>
        </section>

        <!-- <section class="flex justify-center"> -->
        <section>
            <table class="mx-auto table-fixed w-3/4 border-collapse border border-gray-300">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="w-1/2 border border-gray-300 px-4 py-2 text-left text-center">Inglês</th>
                        <th class="w-1/2 border border-gray-300 px-4 py-2 text-left text-center">Português</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2 text-center">I</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">Eu</td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2 text-center">You</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">Voçê</td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2 text-center">He</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">Ele</td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2 text-center">She</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">ela</td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2 text-center">It</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">Ele/ela (para coisas ou animais)</td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2 text-center">We</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">Nós</td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2 text-center">You</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">Voçês</td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2 text-center">They</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">Eles/Elas</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <section>
            <h2 class="text-lg font-bold mb-2">🧠 Exemplos de frases simples:</h2>
            <ul class="list-disc pl-6">
                <li><strong>I am happy.</strong> -> Eu estou feliz.</li>
                <li><strong>You are my friend.</strong> -> Voçê é meu amigo.</li>
                <li><strong>He is tall.</strong> -> Ele é alto.</li>
                <li><strong>She is smart.</strong> -> Ela é inteligente.</li>
                <li><strong>It is a cat.</strong> -> É um gato.</li>
                <li><strong>We are ready.</strong> -> Nós estamos prontos.</li>
                <li><strong>They are students.</strong> -> Eles são estudantes.</li>
            </ul>
        </section>
    </main>
    <x-footer/>
</body>
</html>