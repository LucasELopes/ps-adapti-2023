window.onscroll = function () {
    let cabecalho = document.querySelector("#cabecalho");
    let containerHeader = document.querySelector("#container-header");
    let main = document.querySelector("main");

    let corOriginal = "#2c79f8"; // Alterar isso para ficar mais dinamico

    if (
        document.body.scrollTop > 50 ||
        document.documentElement.scrollTop > 50
    ) {
        containerHeader.style.height = "8vh";
        cabecalho.style.height = "8vh";
        main.classList.add("dark");
        containerHeader.style.backgroundColor = "#131518";
    } else {
        containerHeader.style.height = "15vh";
        cabecalho.style.height = "15vh";
        main.classList.remove("dark");
        containerHeader.style.backgroundColor = corOriginal;
    }
};
