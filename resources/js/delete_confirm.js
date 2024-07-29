const deleteForms = document.querySelectorAll('form.delete_form');

deleteForms.forEach((deleteFormElement) =>{
    deleteFormElement.addEventListener('submit', function( event ){
        event.preventDefault();
        const name = this.getAttribute('data_project_nome');

        if(window.confirm(`Sei sicuro di voler cancellare ${name}?` ) === true){
            this.submit();
        }
    });

})
