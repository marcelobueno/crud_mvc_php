window.onload = function() {
    
    let btn = document.querySelector('#new-product');
    let modal = document.querySelector('.modal-area');
    let close = document.querySelector('.modal-close');

    btn.addEventListener('click', function(){

        if(modal.style.display == "flex")
        {
            modal.style.display = "none";
        }
        else
        {
            modal.style.display = "flex";
        }
    });

    close.addEventListener('click', function(){

        let form = document.querySelector('.modal-area form');

        form.reset();

        modal.style.display = "none";

    });
}