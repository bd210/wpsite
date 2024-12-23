( function( api ) {

	// Extends our custom "fast-food-truck" section.
	api.sectionConstructor['fast-food-truck'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );