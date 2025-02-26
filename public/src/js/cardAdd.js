document.addEventListener('DOMContentLoaded', function () {
    if (window.cardData) {
        const cardContainer = document.getElementById('card__wrapper')

        sliderData.forEach(item => {
            const card = document.createElement('div')
            card.classList.add('card__wrapper-2')
            card.innerHTML = `
                <a href="${item.href}" class="card__href">
                    <div class="card">
                        <img src="/src/image/${ item.image }" alt="" class="card__img">
                        <p class="card__name">${item.name}</p>
                        <img src="/src/image/${ item.logo }" alt="" class="card__logo">
                    </div>    
                </a>
                `
            cardContainer.appendChild(card)
        })
    }
});