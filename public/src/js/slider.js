document.addEventListener('DOMContentLoaded', function (){
    if(window.sliderData){
        const sliderContainer=document.getElementById('slider')

        sliderData.forEach(item =>{
            const slide = document.createElement('div')
            slide.classList.add('swiper-slide')
            slide.innerHTML=`
                    <div class="main__card-wrapper">
                        <p class="main__card-date">${ item.date }</p>
                        <div class="main__card-div">
                            <img src="/src/image/${ item.image }" alt="#" class="main__card-image">
                            <p class="main__card-description">${ item.description }</p>
                        </div>
                        <a class ="main__card-btn" href="#">Подробнее</a>
                        <p class="main__card-title">${ item.title }</p>
                        <img src="/src/image/${ item.organizer }" alt="#" class="main__card-organizer">
                    </div>
                `
            sliderContainer.appendChild(slide)
        })

        const swiper = new Swiper('.slider-wrapper',{
            spaceBetween: 10,
            loop: true,
            centeredSlides: false,
            grabCursor: true,
            navigation:{
                nextEl: '.main__slider__btn__2',
                prevEl: '.main__slider__btn',
            },
            slideToClickedSlide: true,

            speed:600,
            breakpoints:{
                0:{
                    slidesPerView:1,
                },
                620:{
                    slidesPerView:2,
                },
                1024:{
                    slidesPerView:3,
                },
            },
        })
    }


});







