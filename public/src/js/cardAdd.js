document.addEventListener('DOMContentLoaded', function () {
    if (window.cardData) {
        const cardContainer = document.getElementById('card__wrapper')

        cardData.forEach(item => {
            const card = document.createElement('a')
            card.href = "#"
            card.classList.add('card__href')
            card.innerHTML = `
                <div class="card">
                    <img src="/src/image/${ item.image }" alt="" class="card__img">
                    <p class="card__name">${item.title}</p>
                    <img src="/src/image/${ item.organizer }" alt="" class="card__logo">
                    <div class="card__poppup">
                        <button type="button" class="poppup__close"><span></span></button>
                        <img src="/src/image/${ item.logo }" alt="" class="background__poppup">
                        <div class="card__poppup_content">
                            <p class="card__title">${item.title}</p>
                            <p class="card__dscription">${item.poppup_desc}</p>
                            <a href="${item.event_link}" class="card__btn">Хочу пойти</a>
                        </div>
                    </div>
                </div>    
                `
            cardContainer.appendChild(card)
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

    }
});
