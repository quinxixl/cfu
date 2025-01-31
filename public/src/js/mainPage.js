const poppup = document.querySelector('.poppup');
const btnOpen=document.querySelector('.page_1__btn');
const btnClose=document.querySelector('.poppup_btn');
btnOpen.addEventListener('click', (evt)=>{
    evt.preventDefault();
    poppup.classList.add('open');
})
btnClose.addEventListener('click',(evt)=>{
    evt.preventDefault();
    poppup.classList.remove('open');
})

window.addEventListener('click',(evt)=>{
    if (evt.target === poppup) {
        poppup.classList.remove('open');
    }
})


const btnOpenPage2WB=document.querySelector('.wb_popup');
const btnClosePage2WB=document.querySelector('.poppup_btn_Page2__wb');
const popup2WB=document.querySelector('.popup__Page2__wb');

btnOpenPage2WB.addEventListener('click',(evt)=>{
    evt.preventDefault();
    popup2WB.classList.add('open');
})
btnClosePage2WB.addEventListener('click',(evt)=>{
    evt.preventDefault();
    popup2WB.classList.remove('open');
})
window.addEventListener('click',(evt)=>{
    if (evt.target === popup2WB) {
        popup2WB.classList.remove('open');
    }
})

const btnOpenPage2KS=document.querySelector('.ks_popup');
const btnClosePage2KS=document.querySelector('.poppup_btn_Page2__ks');
const popup2KS=document.querySelector('.popup__Page2__ks');

btnOpenPage2KS.addEventListener('click',(evt)=>{
    evt.preventDefault();
    popup2KS.classList.add('open');
})
btnClosePage2KS.addEventListener('click',(evt)=>{
    evt.preventDefault();
    popup2KS.classList.remove('open');
})
window.addEventListener('click',(evt)=>{
    if (evt.target === popup2KS) {
        popup2KS.classList.remove('open');
    }
})

const btnOpenPage2VTB=document.querySelector('.vtb_popup');
const btnClosePage2VTB=document.querySelector('.poppup_btn_Page2__vtb');
const popup2VTB=document.querySelector('.popup__Page2__vtb');

btnOpenPage2VTB.addEventListener('click',(evt)=>{
    evt.preventDefault();
    popup2VTB.classList.add('open');
})
btnClosePage2VTB.addEventListener('click',(evt)=>{
    evt.preventDefault();
    popup2VTB.classList.remove('open');
})
window.addEventListener('click',(evt)=>{
    if (evt.target === popup2VTB) {
        popup2VTB.classList.remove('open');
    }
})