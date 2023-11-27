window.onscroll = function () {
    const cabecalho = document.querySelector("#cabecalho");
    const containerHeader = document.querySelector("#container-header");
    // const main = document.querySelector("main");

    // const corOriginal = "#2c79f8"; // Alterar isso para ficar mais dinamico

    if (
        document.body.scrollTop > 50 ||
        document.documentElement.scrollTop > 50
    ) {
        containerHeader.style.height = "8vh";
        cabecalho.style.height = "8vh";
        // main.classList.add("dark");
        // containerHeader.style.backgroundColor = "#131518";
    } else {
        containerHeader.style.height = "15vh";
        cabecalho.style.height = "15vh";
        // main.classList.remove("dark");
        // containerHeader.style.backgroundColor = corOriginal;
    }
};

function abrirModal() {
    const modal = document.querySelector("#janela-modal");
    modal.classList.add("abrir");

    modal.addEventListener("click", (e) => {
        if (e.target.id == "fechar" || e.target.id == "janela-modal") {
            modal.classList.remove("abrir");
        }
    });
}

function trocaTema() {
    const containerHeader = document.querySelector("#container-header");
    const main = document.querySelector("main");

    if (containerHeader.classList.contains("dark")) {
        containerHeader.classList.remove("dark");
        main.classList.remove("dark");
    } else {
        containerHeader.classList.add("dark");
        main.classList.add("dark");
    }
}

function adiconarCard() {}
