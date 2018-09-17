// init Isotope
var $grid = $('.grid').isotope({
  	itemSelector: '.grid-item',
  	percentPosition: true,
  	masonry: {
    	// use element for option
    	columnWidth: '.grid-sizer'
  	}
});

// reveal all items after init
var $items = $grid.find('.grid-item');
$grid.addClass('is-showing-items')
  .isotope( 'revealItemElements', $items );

// store filter for each group
var filters = {};

$('#filters').on( 'click', 'button', function() {
	var $this = $(this);
  	// get group key
  	var $buttonGroup = $this.parents('.btn-group');
  	var filterGroup = $buttonGroup.attr('data-filter-group');
  	// set filter for group
  	filters[ filterGroup ] = $this.attr('data-filter');
  	// combine filters
  	var filterValue = concatValues( filters );
  	$grid.isotope({ filter: filterValue });
});

// flatten object by concatting values
function concatValues( obj ) {
  var value = '';
  for ( var prop in obj ) {
    value += obj[ prop ];
  }
  return value;
}

// change is-checked class on buttons
$('.btn-group').each( function( i, buttonGroup ) {
  var $buttonGroup = $( buttonGroup );
  $buttonGroup.on( 'click', 'button', function() {
    $buttonGroup.find('.is-checked').removeClass('is-checked');
    $( this ).addClass('is-checked');
  });
});