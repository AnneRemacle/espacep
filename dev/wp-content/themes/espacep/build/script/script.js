$(document).ready(function(){
    $('.antennes__tab.bruxelles').on('click', function(e){
        e.preventDefault();
        $('.tabcontent').removeClass('active');
        $('.tabcontent#bruxelles').addClass('active');
        
        $('.antennes__tab').removeClass('antennes__tab--active');
        $('.antennes__tab.bruxelles').addClass('antennes__tab--active');
    })

    $('.antennes__tab.liege').on('click', function(e){
        e.preventDefault();
        $('.tabcontent').removeClass('active');
        $('.tabcontent#liege').addClass('active');
        
        $('.antennes__tab').removeClass('antennes__tab--active');
        $('.antennes__tab.liege').addClass('antennes__tab--active');
    })

    $('.antennes__tab.namur').on('click', function(e){
        e.preventDefault();
        $('.tabcontent').removeClass('active');
        $('.tabcontent#namur').addClass('active');
        
        $('.antennes__tab').removeClass('antennes__tab--active');
        $('.antennes__tab.namur').addClass('antennes__tab--active');
    })

    $('.antennes__tab.charleroi').on('click', function(e){
        e.preventDefault();
        $('.tabcontent').removeClass('active');
        $('.tabcontent#charleroi').addClass('active');
        
        $('.antennes__tab').removeClass('antennes__tab--active');
        $('.antennes__tab.charleroi').addClass('antennes__tab--active');
    })
    
    $('.antennes__tab.arlon').on('click', function(e){
        e.preventDefault();
        $('.tabcontent').removeClass('active');
        $('.tabcontent#arlon').addClass('active');
        
        $('.antennes__tab').removeClass('antennes__tab--active');
        $('.antennes__tab.arlon').addClass('antennes__tab--active');
    })
    
    $('.antennes__tab.mons').on('click', function(e){
        e.preventDefault();
        $('.tabcontent').removeClass('active');
        $('.tabcontent#mons').addClass('active');
        
        $('.antennes__tab').removeClass('antennes__tab--active');
        $('.antennes__tab.mons').addClass('antennes__tab--active');
    })
})
