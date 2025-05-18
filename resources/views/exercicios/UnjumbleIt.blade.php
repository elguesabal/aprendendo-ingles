<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Unjumble It!</h1>
    <span id="object"></span> == <input type="text" id="response" />
    <input type="submit" onclick="toRespond()" value="to respond" />
    <!-- verb: <input type="text" id="verb">
    <input type="text" id="verb" /> -->

    <p id="result"></p>

    <script>
        const object = [
            "book",
            "chair",
            "table",
            "pen",
            "pencil",
            "bag",
            "phone",
            "door",
            "window",
            "cup",
            "spoon",
            "fork",
            "plate",
            "shoe",
            "hat",
            "bed",
            "clock",
            "lamp",
            "ball",
            "key"
        ];
        const verb = [
            "go",
            "come",
            "eart",
            "drink",
            "sleep",
            "run",
            "walk",
            "read",
            "write",
            "sit",
            "stand",
            "open",
            "close",
            "see",
            "hear",
            "talk",
            "listen",
            "play",
            "jump",
            "look"
        ];

        let word = object[Math.floor(Math.random() * 20)];
        // console.log(word)

        function scrambleWord(word) {
            const letters = word.split("");
            for (let i = letters.length - 1; i > 0; i--) {
                const j = Math.floor(Math.random() * (i + 1));
                [letters[i], letters[j]] = [letters[j], letters[i]];
            }
            return letters.join("");
        }

        function toRespond() {
            // console.log(scrambleWord(word));
            if (document.getElementById("response").value == word) {
                document.getElementById("result").textContent = "Ok";
            } else {
                document.getElementById("result").textContent = "Error";
            }
        }

        document.getElementById("object").textContent = scrambleWord(word);
    </script>
</body>
</html>