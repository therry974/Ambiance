const wheel = document.getElementById("wheel");
const spinButton = document.getElementById("spinButton");
const resultMessage = document.getElementById("resultMessage");

spinButton.addEventListener("click", () => {
    const spinDegrees = Math.floor(Math.random() * 360) + 720; // Ajoute des tours
    wheel.style.transform = `rotate(${spinDegrees}deg)`;

    // Simuler un résultat
    const sections = ["Gagné", "Perdu"];
    const randomIndex = Math.floor(Math.random() * sections.length);
    const result = sections[randomIndex];

    setTimeout(() => {
        resultMessage.innerText = `Résultat : ${result}`;
    }, 3000);
});
