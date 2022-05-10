function showModal(modal)
{
    let newModal = document.querySelector(`.modal-area#${modal}`);

    if(newModal.style.display == "flex") {
        newModal.style.display = "none";
    } else {
        newModal.style.opacity = 0;
        newModal.style.display = "flex";

        setInterval(()=>{newModal.style.opacity = 1}, 200);
    }
}

function hideModal(modal)
{
    let newModal = document.querySelector(`.modal-area#${modal}`);

    let form = document.querySelector(`.modal-area#${modal} form`);

    if (form) {
        form.reset();
    }

    newModal.style.display = "none";
}