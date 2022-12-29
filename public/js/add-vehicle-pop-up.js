// Pop-up добавления техники

const openAddVehiclePopUp = document.getElementById('addVehicle');
const closeAddVehiclePopUp = document.querySelector('.add-vehicle-pop-up-close');
const addVehiclePopUp = document.querySelector('.add-vehicle-pop-up');

// Открытие Pop-up
openAddVehiclePopUp.addEventListener('click', function (e){
    e.preventDefault();
    addVehiclePopUp.classList.add('active');
})

// Закрытие Pop-up на "крестик"
closeAddVehiclePopUp.addEventListener('click', () => {
    addVehiclePopUp.classList.remove('active');
})
