document.addEventListener('click', function (evt) {
    if (evt.target.matches(".card__btn")){
        window.open(evt.target.href, "_blank")
    }
})
document.querySelectorAll('.card__href').forEach(card => {
    const poppup = card.querySelector('.card__poppup');
    const closeBtn = card.querySelector('.poppup__close');

    card.addEventListener('click', (evt) => {
        evt.preventDefault();
        poppup.classList.add('open');
    });

    closeBtn.addEventListener('click', (evt) => {
        evt.preventDefault();
        poppup.classList.remove('open');
    });

    window.addEventListener('click', (evt) => {
        if (evt.target === poppup) {
            poppup.classList.remove('open');
        }
    });
});
