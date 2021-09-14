require('./bootstrap');

const deleteForm = document.querySelectorAll('.delete-post-form');

deleteForm.forEach(item => {
    item.addEventListener('submit', function(e){
        confirm('Confermare la cancellazione del dato?');
    })
    
})