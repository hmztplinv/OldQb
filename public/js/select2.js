$(function() {
	
	$('.select2').select2({
		placeholder: 'Choose one',
		searchInputPlaceholder: 'Search',
		minimumResultsForSearch: Infinity,
		width: '100%'
	});
	$('.bankname').select2({
		placeholder: 'Choose Financial Application',
		searchInputPlaceholder: 'Search',
		minimumResultsForSearch: Infinity,
		width: '100%'
	});

	$('.select2-with-search').select2({
		searchInputPlaceholder: 'Search',
		width: '100%'
	});
	$('.filtero').select2({
		placeholder: 'Origin',
		searchInputPlaceholder: 'Search',
		width: '100%'
	});
	$('.filter1').select2({
		placeholder: 'Product Name',
		searchInputPlaceholder: 'Search',
		width: '100%'
	});
	$('.filter2').select2({
		placeholder: 'Size',
		searchInputPlaceholder: 'Search',
		width: '100%'
	});
	$('.filter3').select2({
		placeholder: 'Family Name',
		searchInputPlaceholder: 'Search',
		width: '100%'
	});
	$('.filter4').select2({
		placeholder: 'Type',
		searchInputPlaceholder: 'Search',
		width: '100%'
	});
	$('.filter5').select2({
		placeholder: 'Thickness',
		searchInputPlaceholder: 'Search',
		width: '100%'
	});
	$('.filter6').select2({
		placeholder: 'Process',
		searchInputPlaceholder: 'Search',
		width: '100%'
	});
	$('.filter7').select2({
		placeholder: 'Color',
		searchInputPlaceholder: 'Search',
		width: '100%'
	});
	$('.filter8').select2({
		placeholder: 'Finish',
		searchInputPlaceholder: 'Search',
		width: '100%'
	});


	function formatState (state) {
	  if (!state.id) { return state.text; }
	  var $state = $(
		'<span><img src="../../assets/plugins/flag-icon-css/flags/4x3/' +  state.element.value.toLowerCase() +
	'.svg" class="img-flag" /> ' +
	state.text +  '</span>'
	 );
	 return $state;
	};

	$(".select2-flag-search").select2({
	  templateResult: formatState,
	  templateSelection: formatState,
	   escapeMarkup: function(m) { return m; }
	});
	
});
