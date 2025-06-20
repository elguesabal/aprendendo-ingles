for (let number = 0; number < 21; number++) {
    document.getElementById(String(number)).addEventListener("click", () => {
        const sound = new Audio(`/assets/numbers/${String(number)}.mp3`);
        sound.play();
    });
}