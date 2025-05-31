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
        <h1 class="text-center text-5xl p-10 text-neutral-300">site de <span class="underline decoration-wavy underline-offset-4 decoration-5 theme-tx-primary decoration-violet-500">ingles</span></h1>
        <article>
            <div class="flex space-x-10 px-6">
                <div class="flex-1 pl-5 font-serif">
                    <h2>Study topics</h2>
                    <h3>Estude topicos da sua vontade escolhendo por secao</h3>
                </div>
                <div class="flex-1 pl-5">
                    <h2>Exercises</h2>
                    <h3>Treine seus conhecimentos fazendo exercicios</h3>
                </div>
            </div>
            <div class="flex space-x-10 px-6 font-serif">
                <section class="flex-1 rounded-3xl p-5 bg-secondary">
                    <p><a href="study/BasicVerbs">Basic verbs</a></p>
                    <p><a href="study/pronouns">Pronouns</a></p>
                    <p><a href="study/NegativeForm">Negative form</a></p>
                </section>
                <section class="flex-1 rounded-3xl p-5 bg-secondary">
                    <p><a href="exercises/UnjumbleIt">Unjumble It!</a> Pratique decifrando palavras embaralhadas</p>
                    <p><a href="#">Exercises 2</a></p>
                    <p><a href="#">Exercises 3</a></p>
                </section>
            </div>
        </article>
    </main>
    <x-footer/>
</body>
</html>