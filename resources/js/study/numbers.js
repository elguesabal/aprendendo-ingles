function eventSound(number) {
    document.getElementById(String(number)).addEventListener("click", () => {
        new Audio(`/assets/numbers/${String(number)}.mp3`).play();
    });
}

for (let number = 0; number <= 19; number++) {
    eventSound(number);
}

for (let number = 10; number <= 90; number += 10) {
    eventSound(number);
}

for (let number = 100; number <= 900; number += 100) {
    eventSound(number);
}

for (let number = 1000; number <= 9000; number += 1000) {
    eventSound(number);
}

for (let number = 10000; number <= 90000; number += 10000) {
    eventSound(number);
}

eventSound("hundred");
eventSound("thousand");
eventSound("million");
eventSound("billion");
eventSound("trillion");