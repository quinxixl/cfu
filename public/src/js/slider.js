const allSlides = [

]
const nextSlide = document.querySelector('.main__slider__btn')
const previousSlide = document.querySelector('.main__slider__btn__2')

let activeSlide = 0;

const newSlideGeneration = () =>{
    let newSlide = activeSlide + 1;
    if(newSlide >= allSlides.length) activeSlide = 0;
}


