for (let letter = 97; letter < 123; letter++) {
    document.getElementById(String.fromCharCode(letter)).addEventListener("click", () => {
        const sound = new Audio(`/assets/letters/${String.fromCharCode(letter)}.mp3`);
        sound.play();
    });
}