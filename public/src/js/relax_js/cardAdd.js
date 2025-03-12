window.addEventListener("load", function () {
    document.querySelectorAll('.card__href').forEach(card => {
        const poppup = card.closest('.card').querySelector('.card__poppup');
        const closeBtn = card.closest('.card').querySelector('.poppup__close');

        if (!poppup || !closeBtn) return;

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
});