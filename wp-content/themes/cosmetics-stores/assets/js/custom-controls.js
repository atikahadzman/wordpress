(function(api) {

    api.sectionConstructor['cosmetics-stores-upsell'] = api.Section.extend({
        attachEvents: function() {},
        isContextuallyActive: function() {
            return true;
        }
    });

})(wp.customize);