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
        <h1 class="text-3xl font-bold mb-10 text-primary text-center">Pronouns</h1>
        <article class="flex flex-col w-3/4 mx-auto mb-10 bg-red-100">
            <section>
                <h1 class="text-3xl font-bold mb-2 text-primary">Subject pronouns</h1>
                <p>Subject pronouns (pronomes pessoais sujeito) são palavras que usamos para substituir o nome da pessoa, animal ou coisa que faz a ação da frase.</p>
                <p>👉 Em português, são palavras como: eu, você, ele, ela, nós, eles...</p>
                <p>👉 Sempre colocamos o subject pronoun no começo da frase, antes do verbo: [Subject Pronoun] + [verbo] + ...</p>
            </section>
            <section>
                <table class="mx-auto table-fixed w-3/4 border-collapse border text-center">
                    <thead class="bg-secondary">
                        <tr>
                            <th class="w-1/2 border border-gray-300 px-4 py-2">Inglês</th>
                            <th class="w-1/2 border border-gray-300 px-4 py-2">Português</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="hover:bg-gray-50">
                            <td class="border border-gray-300 px-4 py-2">I</td>
                            <td class="border border-gray-300 px-4 py-2">Eu</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="border border-gray-300 px-4 py-2">You</td>
                            <td class="border border-gray-300 px-4 py-2">Voçê</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="border border-gray-300 px-4 py-2">He</td>
                            <td class="border border-gray-300 px-4 py-2">Ele</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="border border-gray-300 px-4 py-2">She</td>
                            <td class="border border-gray-300 px-4 py-2">ela</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="border border-gray-300 px-4 py-2">It</td>
                            <td class="border border-gray-300 px-4 py-2">Ele/ela (para coisas ou animais)</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="border border-gray-300 px-4 py-2">We</td>
                            <td class="border border-gray-300 px-4 py-2">Nós</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="border border-gray-300 px-4 py-2">You</td>
                            <td class="border border-gray-300 px-4 py-2">Voçês</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="border border-gray-300 px-4 py-2">They</td>
                            <td class="border border-gray-300 px-4 py-2">Eles/Elas</td>
                        </tr>
                    </tbody>
                </table>
            </section>
            <section>
                <h2 class="text-lg font-bold mb-2">🧠 Dicas importantes:</h2>
                <ul class="list-disc pl-6">
                    <li>"I" (eu) sempre com letra maiúscula, mesmo no meio da frase.</li>
                    <li>"It" é usado para coisas, animais ou ideias, quando não sabemos o sexo (gênero).</li>
                    <li>"You" serve para você e vocês (é o mesmo pronome para singular e plural).</li>
                </ul>
            </section>
            <section>
                <h2 class="text-lg font-bold mb-2">🟢 Exemplos de frases simples:</h2>
                <ul class="list-disc pl-6">
                    <li><strong>I am happy.</strong> -> Eu estou feliz.</li>
                    <li><strong>You are nice.</strong> -> Você é legal.</li>
                    <li><strong>He is a teacher.</strong> -> Ele é professor.</li>
                    <li><strong>She is my friend.</strong> -> Ela é minha amiga.</li>
                    <li><strong>It is a cat.</strong> -> É um gato. (coisa/animal)</li>
                    <li><strong>We are students.</strong> -> Nós somos estudantes.</li>
                    <li><strong>You are welcome.</strong> -> Vocês são bem-vindos.</li>
                    <li><strong>They are tired.</strong> -> Eles estão cansados.</li>
                </ul>
            </section>
        </article>
        <article class="flex flex-col w-3/4 mx-auto mb-10 bg-red-100">
            <section>
                <h1 class="text-3xl font-bold mb-2">Object pronouns</h1>
                <p>Object pronouns são usados para indicar quem recebe a ação do verbo em uma frase.</p>
            </section>
            <section>
                <table class="mx-auto table-fixed w-3/4 border-collapse border text-center">
                    <thead class="bg-secondary">
                        <tr>
                            <th class="w-1/2 border border-gray-300 px-4 py-2">Subject pronoun</th>
                            <th class="w-1/2 border border-gray-300 px-4 py-2">Object Pronoun</th>
                            <th class="w-1/2 border border-gray-300 px-4 py-2">Português</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="hover:bg-gray-50">
                            <td class="border border-gray-300 px-4 py-2">I</td>
                            <td class="border border-gray-300 px-4 py-2">me</td>
                            <td class="border border-gray-300 px-4 py-2">me/mim</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="border border-gray-300 px-4 py-2">You</td>
                            <td class="border border-gray-300 px-4 py-2">you</td>
                            <td class="border border-gray-300 px-4 py-2">te/você/ti</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="border border-gray-300 px-4 py-2">He</td>
                            <td class="border border-gray-300 px-4 py-2">him</td>
                            <td class="border border-gray-300 px-4 py-2">o/lhe/ele</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="border border-gray-300 px-4 py-2">She</td>
                            <td class="border border-gray-300 px-4 py-2">her</td>
                            <td class="border border-gray-300 px-4 py-2">a/lhe/ela</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="border border-gray-300 px-4 py-2">It</td>
                            <td class="border border-gray-300 px-4 py-2">it</td>
                            <td class="border border-gray-300 px-4 py-2">o/a/isso/aquilo</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="border border-gray-300 px-4 py-2">We</td>
                            <td class="border border-gray-300 px-4 py-2">us</td>
                            <td class="border border-gray-300 px-4 py-2">nos</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="border border-gray-300 px-4 py-2">You</td>
                            <td class="border border-gray-300 px-4 py-2">you</td>
                            <td class="border border-gray-300 px-4 py-2">vos/voçês</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="border border-gray-300 px-4 py-2">They</td>
                            <td class="border border-gray-300 px-4 py-2">Them</td>
                            <td class="border border-gray-300 px-4 py-2">os/as/lhes</td>
                        </tr>
                    </tbody>
                </table>
            </section>
            <section>
                <h2 class="text-lg font-bold mb-2">🧠 Dicas importantes:</h2>
                <ul class="list-disc pl-6">
                    <li>Subject pronouns fazem a ação e object pronouns recebem a ação.</li>
                    <li>Os object pronouns geralmente aparecem depois do verbo ou de uma preposição.</li>
                </ul>
            </section>
            <section>
                <h2 class="text-lg font-bold mb-2">🟢 Exemplos de frases simples:</h2>
                <ul class="list-disc pl-6">
                    <li><strong>She called me last night.</strong> -> Ela me ligou ontem à noite.</li>
                    <li><strong>I saw you at the park.</strong> -> Eu te vi no parque.</li>
                    <li><strong>We met him at the party.</strong> -> Nós encontramos ele na festa.</li>
                    <li><strong>John helped her with the homework.</strong> -> John ajudou ela com a lição de casa.</li>
                    <li><strong>I lost my book. Have you seen it?</strong> -> Eu perdi meu livro. Você o viu?</li>
                    <li><strong>The teacher gave us extra homework.</strong> -> A professora nos deu dever extra.</li>
                    <li><strong>I invited them to dinner.</strong> -> Eu os convidei para jantar.</li>
                </ul>
            </section>
        </article>
        <article class="flex flex-col w-3/4 mx-auto mb-10 bg-red-100">
            <section>
                <h1 class="text-3xl font-bold mb-2">Personal pronouns</h1>
                <p>Pronomes pessoais são palavras que usamos para falar sobre pessoas ou coisas sem repetir o nome delas.</p>
                <p>Exemplo em português:</p>
                <p>João está cansado. → Ele está cansado.</p>
                <p>Em inglês, é a mesma ideia! Veja a tabela:</p>
            </section>
            <section>
                <table class="mx-auto table-fixed w-3/4 border-collapse border text-center">
                    <thead class="bg-secondary">
                        <tr>
                            <th class="w-1/2 border border-gray-300 px-4 py-2">Inglês</th>
                            <th class="w-1/2 border border-gray-300 px-4 py-2">Português</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="hover:bg-gray-50">
                            <td class="border border-gray-300 px-4 py-2">I</td>
                            <td class="border border-gray-300 px-4 py-2">Eu</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="border border-gray-300 px-4 py-2">You</td>
                            <td class="border border-gray-300 px-4 py-2">Voçê</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="border border-gray-300 px-4 py-2">He</td>
                            <td class="border border-gray-300 px-4 py-2">Ele</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="border border-gray-300 px-4 py-2">She</td>
                            <td class="border border-gray-300 px-4 py-2">ela</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="border border-gray-300 px-4 py-2">It</td>
                            <td class="border border-gray-300 px-4 py-2">Ele/ela (para coisas ou animais)</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="border border-gray-300 px-4 py-2">We</td>
                            <td class="border border-gray-300 px-4 py-2">Nós</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="border border-gray-300 px-4 py-2">You</td>
                            <td class="border border-gray-300 px-4 py-2">Voçês</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="border border-gray-300 px-4 py-2">They</td>
                            <td class="border border-gray-300 px-4 py-2">Eles/Elas</td>
                        </tr>
                    </tbody>
                </table>
            </section>
            <section>
                <h2 class="text-lg font-bold mb-2">🟢 Exemplos de frases simples:</h2>
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
        </article>
    </main>
    <x-footer/>
</body>
</html>