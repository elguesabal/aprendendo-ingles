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

let word = chooseWord();

function chooseWord() {
    let words = [];

    words = (document.getElementById("object").checked) ? [...words, ...object] : words;
    words = (document.getElementById("verb").checked) ? [...words, ...verb] : words;
    return (words[Math.floor(Math.random() * words.length)]);
}

function scrambleWord(word) {
    const letters = word.split("");

    for (let i = letters.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        [letters[i], letters[j]] = [letters[j], letters[i]];
    }
    return letters.join("");
}

document.getElementById("toRespond").addEventListener('click', () => {
    const iconClass = (document.getElementById("response").value == word) ? ["bi-hand-thumbs-up", "text-green-500"] : ["bi-hand-thumbs-down", "text-red-500"];

    document.getElementById("iconResult").classList.add(iconClass[0], iconClass[1]);
    document.getElementById("result").textContent = (document.getElementById("response").value == word) ? "Parabéns! Resposta certa!" : "Resposta errada!";
});

document.getElementById("response").addEventListener("keydown", (event) => {
    if (event.key != "Enter") return ;
    const iconClass = (document.getElementById("response").value == word) ? ["bi-hand-thumbs-up", "text-green-500"] : ["bi-hand-thumbs-down", "text-red-500"];

    document.getElementById("iconResult").classList.add(iconClass[0], iconClass[1]);
    document.getElementById("result").textContent = (document.getElementById("response").value == word) ? "Parabéns! Resposta certa!" : "Resposta errada!";
});

document.getElementById("word").textContent = scrambleWord(word);