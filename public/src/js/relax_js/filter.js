const btnOrg = document.querySelector('.btn__organize');
const btnDate = document.querySelector('.btn__date');
const btnView = document.querySelector('.btn__view');



btnOrg.addEventListener('click', (evt) =>{
    evt.preventDefault()
    const container = document.querySelector('.filter__container');

    const openContainer = container.style.display === 'block';
    container.style.display = openContainer ? 'none' : 'block';
});

btnView.addEventListener('click', (evt) =>{
    evt.preventDefault()
    const container = document.querySelector('.filter__container');

    const openContainer = container.style.display === 'block';
    container.style.display = openContainer ? 'none' : 'block';
});
