(function() {
    tinymce.create('tinymce.plugins.mylink', {
        init : function(ed, url) {
			
			ed.addCommand('mcekarma_shortcodes', function() {
				ed.windowManager.open({
					file : url + '/interface.php',
					width : 410 + ed.getLang('karma_shortcodes.delta_width', 0),
					height : 250 + ed.getLang('karma_shortcodes.delta_height', 0),
					inline : 1
				}, {
					plugin_url : url
				});
			});
			
            ed.addButton('mylink', {
                title : 'My Link',
				cmd : 'mcekarma_shortcodes',
                image : url+'/z.png',
               /* onclick : function() {
                     ed.selection.setContent('[zenite]' + ed.selection.getContent() + '[/zenite]');
 
                }*/
            });
        },
        createControl : function(n, cm) {
            return null;
        },
    });
    tinymce.PluginManager.add('mylink', tinymce.plugins.mylink);
})();