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

let lista_nazioni_visibile_btn = document.querySelector('.lista-opt-selected')

lista_nazioni_visibile_btn.addEventListener('click', function(e){
    lista = document.querySelector('.lista-opts')
    lista.classList.toggle('show-list')
    //this.append('<div class="lista-options">'++'</div>');
});

lista_opts_nazioni = document.querySelectorAll('.lista-opts div')

lista_opts_nazioni.forEach( function(opt){

    opt.addEventListener('click', function(){

        if(this.nextElementSibling){
            this.nextElementSibling.classList.remove('active')
        }

        if(this.previousElementSibling){
            this.previousElementSibling.classList.remove('active')
        }
        
        
        lista = document.querySelector('.lista-opts')
        this.classList.add('active')
        lista.classList.remove('show-list')

        clone = this.cloneNode(true)
        lista_nazioni_visibile_btn.innerHTML = '';
        lista_nazioni_visibile_btn.append(clone)

        document.querySelector('[name="nazione"]').value = this.getAttribute('data-val')
    })
} )


document.querySelectorAll('.tab-list-reviews').forEach(function( tablist ){

    tablist.querySelectorAll('.tab-list-reviews--head a').forEach(function( linktablist ){
        linktablist.addEventListener('click', function(e){

            document.querySelectorAll(".tab-list-reviews--body [data-target]").forEach( (t) => t.classList.remove('active') )
    
            let target = this.getAttribute('data-href')
            let colorBg = this.getAttribute('data-color')

            tablist.querySelectorAll('.tab-list-reviews--head a').forEach( (a) => a.classList.remove('active') )
            tablist.querySelectorAll('.tab-list-reviews--head a').forEach( (a) => a.style.background = 'white' )
            this.classList.add('active')
            this.style.background = colorBg
    
            console.log(target);
    
            let target_to_trigger = document.querySelector("[data-target="+target+"]")
            
            target_to_trigger.style.background = colorBg
            target_to_trigger.classList.add('active')
        });
    })
});

let counterReviews = 1;

document.querySelector('.go-forward-reviews').addEventListener('click', function(e){
    let listaReviews = document.querySelector('.lista-reviews')
    let recensioni = document.querySelectorAll('.recensione')
    let countMaxReviews = recensioni.length;

    if( counterReviews < countMaxReviews ){
        counterReviews++;
    }

    document.querySelector('.counter-reviews span').innerHTML = counterReviews
    
    document.querySelectorAll('.recensione').forEach( (item) => item.classList.remove('active') )
    console.log(listaReviews[counterReviews]);
    recensioni[counterReviews - 1 ].classList.add('active')

});


document.querySelector('.go-back-reviews').addEventListener('click', function(e){
    let listaReviews = document.querySelector('.lista-reviews')
    let recensioni = document.querySelectorAll('.recensione')

    if( counterReviews > 1 ){
        counterReviews--;
    }

    document.querySelector('.counter-reviews span').innerHTML = counterReviews
    
    document.querySelectorAll('.recensione').forEach( (item) => item.classList.remove('active') )
    console.log(listaReviews[counterReviews]);
    recensioni[counterReviews - 1 ].classList.add('active')

});