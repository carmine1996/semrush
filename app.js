/*
tabs
- permette di animare la tabs e di cambiare argomento nella home 
*/
function tabs(){
    switch_links = document.querySelectorAll('.tab-head a')
    switch_links.forEach( function( switch_link ){
        switch_link.addEventListener('click', function(){
            data_id = switch_link.getAttribute('data-id') 
            document.querySelector('.active-tab').classList.remove('active-tab')
            document.querySelector(data_id).classList.add('active-tab')
        })
    })
}
tabs()


menu_principale_links = document.querySelectorAll('#main-header .navigation nav li')
menu_principale_links.forEach( function( menu_principale_link ){
    
    if( menu_principale_link.querySelector('ul.submenu') == null){
        return;
    }

    menu_principale_link.addEventListener('click', function(){
        menu_principale_link.querySelector('ul.submenu').classList.toggle('active-submenu')
    })

    
})