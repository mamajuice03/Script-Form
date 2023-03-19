
function showForm(){
    var formContainer = document.querySelector('.form-container');
    formContainer.style.display = 'block';
    }

function hideForm(){
    var formContainer = document.querySelector('.form-container');
    formContainer.style.display = 'none';
    }

    var contactLink = document.querySelector('.navbar li:last-child a');
    contactLink.addEventListener('click', function(){
     showForm();
    });

    var iconClose = document.querySelector('.icon-close');
    iconClose.addEventListener('click', function(){
    hideForm();
    });
