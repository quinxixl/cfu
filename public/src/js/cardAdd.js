document.addEventListener('DOMContentLoaded', function () {
    if (window.cardData) {
        const cardContainer = document.getElementById('card__wrapper')

        sliderData.forEach(element => {
            const card = document.createElement('a')
            card.classList.add('card__href')
            card.innerHTML = `
                    <div class="card">
                        <img src="/src/image/{{ elemnt.image }}" alt="" class="card__img">
                        <p class="card__name">{{element.name}}</p>
                        <img src="/src/image/{{ elemnt.logo }}" alt="" class="card__logo">
                    </div>
                `
            cardContainer.appendChild(card)
        })
    }
});