document.addEventListener('DOMContentLoaded', function () {
    const toggles = document.querySelectorAll('.toggle-dropdown');

    toggles.forEach(toggle => {
        toggle.addEventListener('click', function (e) {
            e.preventDefault();

            const item = this.closest('.table__item');
            const container = item.querySelector('.table__container-item');
            const image = this.querySelector('.table__image');

            const isOpen = container.style.display === 'block';

            container.style.display = isOpen ? 'none' : 'block';
            image.classList.toggle('rotated', !isOpen);
        });
    });
});