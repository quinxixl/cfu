document.addEventListener('DOMContentLoaded', function (e){

    if(window.filterData){
        const organizerContainer = document.getElementById("organizer__container");
        organizerContainer.innerHTML="";

        window.filterData.forEach(item =>{
            const filterItem = document.createElement("li");
            filterItem.classList.add("choose-item");
            filterItem.innerHTML = `
                    <a class="choose__href">${item.title}</a>
            `;
            organizerContainer.appendChild(filterItem);
        })
    }

});
