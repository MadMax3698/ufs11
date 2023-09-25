let carousels = $('.carousel-js'); // ottiene un array di elementi con la stessa classe

// con .each() possiamo fare un ciclo su ogni elemento presente nell'array
carousels.each(function (index, element) {
    // index è l'indice di ogni elemento nell'array ( indice a base 0 )
    // elemento è il singolo elemento HTML

    // $(this) significa "questoElemento"
	$(this).slick({
        arrows: false, 
        infinite: true,
        autoplay: true,
        autoplaySpeed: 3000,
        slidesToShow: 2,
        slidesToScroll: 1, 
        touchThreshold: 10
    });
});