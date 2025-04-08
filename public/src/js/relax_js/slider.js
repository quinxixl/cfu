
document.addEventListener("DOMContentLoaded", function () {
    if (window.sliderData) {
        const sliderContainer = document.getElementById("slider");
        sliderContainer.innerHTML = "";

        window.sliderData.forEach(item => {
            const slide = document.createElement("div");
            slide.classList.add("swiper-slide");
            slide.innerHTML = `
                <div class="main__card-wrapper">
                    <p class="main__card-date">${item.date}</p>
                    <div class="main__card-div">
                        <img src="/src/image/${item.image}" alt="#" class="main__card-image">
                        <p class="main__card-description">${item.description}</p>
                    </div>
                    <a class="main__card-btn" href="#">Подробнее</a>
                    <p class="main__card-title">${item.title}</p>
                    <img src="/src/image/${item.organizer_logo}" alt="#" class="main__card-organizer">
                </div>
            `;
            sliderContainer.appendChild(slide);
        });

        // Инициализация Swiper
        new Swiper(".swiper", {
        slidesPerView: 3,
        spaceBetween: 20,
        loop: true,
        navigation: {
            nextEl: ".right__arrow",
            prevEl: ".left__arrow",
        },
        breakpoints: {
            320: { slidesPerView: 1 },
            768: { slidesPerView: 2 },
            1024: { slidesPerView: 3 }
        }
    });
    }
});
