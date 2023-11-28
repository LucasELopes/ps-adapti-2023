window.onscroll = function () {
    const cabecalho = document.querySelector("#cabecalho");
    const containerHeader = document.querySelector("#container-header");

    if (
        document.body.scrollTop > 50 ||
        document.documentElement.scrollTop > 50
    ) {
        containerHeader.style.height = "10vh";
        cabecalho.style.height = "10vh";
    } else {
        containerHeader.style.height = "15vh";
        cabecalho.style.height = "15vh";
    }
};

function abrirModal(card) {
    let novoCard = card.cloneNode(true);

    let janelaModal = document.querySelector("#janela-modal");

    // Cabeçalho do modal
    let modalCabecalho = document.querySelector(".modal .modal-cabecalho");
    modalCabecalho.append(novoCard.querySelector(".card-cabecalho-info img"));
    modalCabecalho.append(novoCard.querySelector(".card-cabecalho-info div"));

    // Corpo do modal
    let modalCorpo = document.querySelector(".modal .modal-corpo");
    modalCorpo.append(novoCard.querySelector(".card-corpo-info"));

    janelaModal.classList.add("abrir");

    janelaModal.addEventListener("click", (e) => {
        if (e.target.id == "fechar" || e.target.id == "janela-modal") {
            console.log("Entrou aqui!");
            janelaModal.classList.remove("abrir");

            modalCabecalho.innerHTML = " ";
            modalCorpo.innerHTML = " ";
        }
    });
}

function trocaTema() {
    const containerHeader = document.querySelector("#container-header");
    const main = document.querySelector("main");
    const modal = document.querySelector(".modal");

    if (containerHeader.classList.contains("dark")) {
        containerHeader.classList.remove("dark");
        main.classList.remove("dark");
        modal.classList.remove("dark");
    } else {
        containerHeader.classList.add("dark");
        main.classList.add("dark");
        modal.classList.add("dark");
    }
}

function busca() {
    const input = document.querySelector("#input-busca");
    const containerDosCards = document.querySelector(".cards");

    input.addEventListener("keyup", () => {
        let nome = input.value.toLowerCase();

        let cards = containerDosCards.querySelectorAll(".card");
        let cardsCabecalho = containerDosCards.querySelectorAll(
            ".card-cabecalho-info"
        );
        console.log(cards);

        if (nome.length >= 0 && nome.length < 2) {
            for (let card in cards) {
                if (true == isNaN(card)) {
                    continue;
                }
                cards[card].style.display = "";
            }
            return;
        }

        for (let card in cards) {
            if (true == isNaN(card)) {
                continue;
            }

            let nomeCandidato = cardsCabecalho[card].innerHTML.toLowerCase();

            if (nomeCandidato.includes(nome) && nome) {
                cards[card].style.display = "";
            } else {
                cards[card].style.display = "none";
            }
        }
    });
}
