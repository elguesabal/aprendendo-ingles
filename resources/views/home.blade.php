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

    <main style="background-color: rgb(17, 17, 19);">
        <h1 class="text-center text-5xl p-10" style="color: rgb(218, 218, 218);">site de <span class="underline decoration-wavy underline-offset-4 decoration-5" style="color: rgb(218, 255, 1); text-decoration-color: rgb(127, 74, 142);">ingles</span></h1>
        <article style="color: rgb(161, 161, 170);">
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
                <section class="flex-1 rounded-3xl p-5" style="background: rgb(26, 28, 30);">
                    <p><a href="studyTopics/BasicVerbs">Basic verbs</a></p>
                    <p><a href="studyTopics/pronouns">Pronouns</a></p>
                    <p><a href="studyTopics/NegativeForm">Negative form</a></p>
                </section>
                <section class="flex-1 rounded-3xl p-5" style="background: rgb(26, 28, 30);">
                    <p><a href="exercises/UnjumbleIt">Unjumble It!</a> Pratique decifrando palavras embaralhadas</p>
                    <p><a href="">Exercises 2</a></p>
                    <p><a href="">Exercises 3</a></p>
                </section>
            </div>
        </article>
    </main>

    <x-footer/>
</body>
</html>