var cards = document.querySelectorAll('.Card');
var cardActions = [];

cards.forEach( function(card, index) {
	cardActions[index] = cards[index].children[0].children[2];

});

cardActions.forEach( function(element, index) {
	$(cardActions[index]).hide();
});

cards.forEach( function(card, index) {
	card.addEventListener("mouseenter", function( event ) { 
		$(cardActions[index]).show("slow");
	});

	card.addEventListener("mouseleave", function( event ) {   
		$(cardActions[index]).hide("slow");
	});
});