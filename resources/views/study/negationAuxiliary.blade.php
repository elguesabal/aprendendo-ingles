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
    <main class="bg-primary text-secondary">
        <h1 class="text-3xl font-bold mb-10 text-primary text-center">Negation Auxiliary</h1>
        <div class="flex flex-col w-3/4 mx-auto mb-10">
            <section>
                <h2 class="text-3xl font-bold mb-2 text-primary">🛠️ O que são auxiliares de negação?</h2>
                <p>São palavras que ajudam a negar uma frase.</p>
                <p>Em inglês, você não pode simplesmente colocar "not" depois do verbo como em português.</p>
                <p>Você precisa de um verbo auxiliar (helping verb) para isso.</p>
            </section>
            <section>
                <table class="mx-auto table-fixed w-3/4 border-collapse border text-center">
                    <thead class="bg-secondary">
                        <tr>
                            <th class="w-1/2 border border-gray-300 px-4 py-2">Subject</th>
                            <th class="w-1/2 border border-gray-300 px-4 py-2">Negative form</th>
                            <th class="w-1/2 border border-gray-300 px-4 py-2">Contracted form</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="hover:bg-gray-50">
                            <td class="border border-gray-300 px-4 py-2">I</td>
                            <td class="border border-gray-300 px-4 py-2">Do not</td>
                            <td class="border border-gray-300 px-4 py-2">Don't</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="border border-gray-300 px-4 py-2">You</td>
                            <td class="border border-gray-300 px-4 py-2">Do not</td>
                            <td class="border border-gray-300 px-4 py-2">Don't</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="border border-gray-300 px-4 py-2">He</td>
                            <td class="border border-gray-300 px-4 py-2">Does not</td>
                            <td class="border border-gray-300 px-4 py-2">Doesn't</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="border border-gray-300 px-4 py-2">She</td>
                            <td class="border border-gray-300 px-4 py-2">Does not</td>
                            <td class="border border-gray-300 px-4 py-2">Doesn't</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="border border-gray-300 px-4 py-2">It</td>
                            <td class="border border-gray-300 px-4 py-2">Does not</td>
                            <td class="border border-gray-300 px-4 py-2">Doesn't</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="border border-gray-300 px-4 py-2">We</td>
                            <td class="border border-gray-300 px-4 py-2">Do not</td>
                            <td class="border border-gray-300 px-4 py-2">Don't</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="border border-gray-300 px-4 py-2">They</td>
                            <td class="border border-gray-300 px-4 py-2">Do not</td>
                            <td class="border border-gray-300 px-4 py-2">Don't</td>
                        </tr>
                    </tbody>
                </table>
            </section>
            <section>
                <h3 class="text-lg font-bold mb-2">🟢 Exemplos de frases simples com "do not" / "don't" (para I, you, we, they):</h3>
                <ul class="list-disc pl-6">
                    <li><strong>I don't like tea.</strong> -> Eu não gosto de chá.</li>
                    <li><strong>They dont't play soccer.</strong> -> Eles não jogam futebol.</li>
                    <li><strong>We don't study at night.</strong> -> Nós não estudamos a noite.</li>
                </ul>
            </section>
            <section>
                <h3 class="text-lg font-bold mb-2">🟢 Exemplos de frases simples com "does not" / "doesn't" (para he, she, it):</h3>
                <ul class="list-disc pl-6">
                    <li><strong>.</strong>He doesn't work here. -> Ele não trabalha aqui.</li>
                    <li><strong>She doens't like coffe.</strong> -> Ela não gosta de café.</li>
                    <li><strong>It doesn't move.</strong> -> Isto não se move.</li>
                </ul>
            </section>
            <section>
                <h3 class="text-lg font-bold mb-2">🚨 Importante:</h3>
                <p>Quando você usa doesn’t, o verbo principal volta para a forma base (sem "s").</p>
                <p>Errado: ❌ She doesn’t likes chocolate.</p>
                <p>Certo: ✅ She doesn’t like chocolate.</p>
            </section>
        </div>
    </main>
    <x-footer/>
</body>
</html>