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
        <h1 class="text-center text-5xl p-10">site de <span class="underline decoration-wavy underline-offset-4 decoration-5 theme-tx-primary decoration-orange-500">ingles</span></h1>
        <div class="flex justify-evenly flex-col md:flex-row theme-primary py-10">
            <article class="w-1/3 theme-secondary p-5 rounded-3xl">
                <h2>Study topics</h2>
                <h3>Estude topicos da sua vontade escolhendo por secao</h3>
                <section class="flex flex-col space-y-3 p-5">
                    <a class="text-center border-3 px-2 py-1" href="study/basicVerbs">Basic verbs</a>
                    <a class="text-center border-3 px-2 py-1" href="study/pronouns">Pronouns</a>
                    <a class="text-center border-3 px-2 py-1" href="study/negativeForm">Negative form</a>
                    <a class="text-center border-3 px-2 py-1" href="study/negationAuxiliary">Negation Auxiliary</a>
                </section>
            </article>
            <article class="w-1/3 theme-secondary p-5 rounded-3xl">
                <h2>Exercises</h2>
                <h3>Treine seus conhecimentos fazendo exercicios</h3>
                <section class="flex flex-col space-y-3 p-5">
                    <a class="text-center border-3 px-2 py-1" href="exercises/UnjumbleIt">Unjumble It!</a>
                    <a class="text-center border-3 px-2 py-1" href="#">Exercises 2</a>
                    <a class="text-center border-3 px-2 py-1" href="#">Exercises 3</a>
                </section>
            </article>
        </div>
    </main>
    <x-footer/>
</body>
</html>
<!-- https://www.happyhues.co/palettes/9 -->