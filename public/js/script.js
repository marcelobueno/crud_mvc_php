window.onload = function() {
    
    let btnNewProduct = document.querySelector('#new-product');
    let modalNewProduct = document.querySelector('.modal-area#modalNewProduct');
    let closeNewProduct = document.querySelector('.modal-close#closeNewProduct');

    btnNewProduct.addEventListener('click', function(){

        if(modalNewProduct.style.display == "flex")
        {
            modalNewProduct.style.display = "none";
        }
        else
        {
            modalNewProduct.style.opacity = 0;
            modalNewProduct.style.display = "flex";

            setInterval(()=>{modalNewProduct.style.opacity = 1}, 200);
        }
    });

    closeNewProduct.addEventListener('click', function(){

        let form = document.querySelector('.modal-area form');

        form.reset();

        modalNewProduct.style.display = "none";

    });
}

function showModal(modal)
{
    let newModal = document.querySelector(`.modal-area#${modal}`);

    if(newModal.style.display == "flex")
    {
        newModal.style.display = "none";
    }
    else
    {
        newModal.style.opacity = 0;
        newModal.style.display = "flex";

        setInterval(()=>{newModal.style.opacity = 1}, 200);
    }
}

function hideModal(modal)
{
    let newModal = document.querySelector(`.modal-area#${modal}`);

    newModal.style.display = "none";
}