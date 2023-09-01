window.sr = ScrollReveal({ reset: true});
sr.reveal('#logo', {duration: 3000})
sr.reveal('#h1art', {duration: 1000})

function aparecer(){
    const caixa1 = document.getElementById('caixa1');
const caixa2 = document.getElementById('caixa2');
const caixa3 = document.getElementById('caixa3');
const caixas = [caixa1, caixa2, caixa3];

function closeOtherBoxes(clickedBox) {
    caixas.forEach(caixa => {
        if (caixa !== clickedBox && caixa.style.transform === 'translateX(0px)') {
            caixa.style.transform = 'translateX(570px)';
        }
    });
}

function toggleTranslate(element) {
    if (element.style.transform === 'translateX(0px)') {
        element.style.transform = 'translateX(570px)';
    } else {
        closeOtherBoxes(element);
        element.style.transform = 'translateX(0)';
    }
}

caixas.forEach(caixa => {
    caixa.addEventListener('click', () => {
        toggleTranslate(caixa);
    });
});

}




