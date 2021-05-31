const elementResult = document.querySelector("[data-Result]");
elementResult.innerHTML = currentTime();

function currentTime() {
  const date = new Date();
  const minutes = date.getMinutes();
  const hours = date.getHours();

  if (hours > 0 && hours < 12) {
    return `São <span>${hours}</span> horas e <span>${minutes}</span> minutos tenha um <span>Bom Dia</span>`;
  } else if (hours > 17 || hours < 0) {
    return `São <span>${hours}</span> horas e <span>${minutes}</span> minutos tenha uma <span>Boa Noite</span>`;
  } else {
    return `São <span>${hours}</span> horas e <span>${minutes}</span> minutos tenha uma <span>Boa Tarde</span>`;
  }
}
