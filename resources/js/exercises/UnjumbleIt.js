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

let word;

function chooseWord() {
    let words = [];

    if (document.getElementById("object").checked) object.forEach((letters) => words.push(letters));
    if (document.getElementById("verb").checked) verb.forEach((letters) => words.push(letters));
    return (words[Math.floor(Math.random() * words.length)]);
}

function scrambleWord(word) {
    if (word == undefined) return "";
    const letters = word.split("");

    for (let i = letters.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        [letters[i], letters[j]] = [letters[j], letters[i]];
    }
    return (letters.join(""));
}

function reload() {
    word = chooseWord();
    document.getElementById("word").textContent = scrambleWord(word);
    document.getElementById("response").value = "";
}

function result() {
    const iconClass = (document.getElementById("response").value == word) ? ["bi-hand-thumbs-up", "text-green-500"] : ["bi-hand-thumbs-down", "text-red-500"];

    document.getElementById("iconResult").className = "text-5xl bi";
    document.getElementById("iconResult").classList.add(iconClass[0], iconClass[1]);
    document.getElementById("result").textContent = (document.getElementById("response").value == word) ? "Parabéns! Resposta certa!" : "Resposta errada!";
    document.getElementById("backgroundResult").classList.toggle("hidden");
    if (document.getElementById("response").value == word) reload();
}

document.getElementById("toRespond").addEventListener("click", () => {
    if (word == undefined) return ;
    result();
});

document.getElementById("response").addEventListener("keydown", (event) => {
    if (event.key != "Enter") return ;
    result();
});

document.getElementById("reload").addEventListener("click", () => {
    reload();
});

document.getElementById("backgroundResult").addEventListener("click", (event) => {
    if (event.target.id == "backgroundResult" || event.target.id == "closeResult") {
        document.getElementById("backgroundResult").classList.toggle("hidden");
    }
});

reload();