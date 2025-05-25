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

    <main class="flex">
        <section class="bg-red-100 flex-1">
            <h1>Study topics</h1>
            <h2>Estude topicos da sua vontade escolhendo por secao</h2>
            <p><a href="studyTopics/PersonalPronouns">Personal pronouns</a></p>
            <p><a href="">Topics 2</a></p>
            <p><a href="">Topics 3</a></p>
        </section>
        <section class="bg-green-100 flex-1">
            <h1>Exercises</h1>
            <h2>Treine seus conhecimentos fazendo exercicios</h2>
            <p><a href="exercises/UnjumbleIt">Unjumble It!</a> Pratique decifrando palavras embaralhadas</p>
            <p><a href="">Exercises 2</a></p>
            <p><a href="">Exercises 3</a></p>
        </section>
    </main>

    <x-footer/>
</body>
</html>