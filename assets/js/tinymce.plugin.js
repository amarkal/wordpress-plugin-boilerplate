(function() {
    tinymce.create('tinymce.plugins.myplugin', {
        init : function(ed, url) {
            ed.addButton('mybutton', {
                title : 'My Button',
                cmd : 'my_alert_cmd',
                image : url + '/dropcap.jpg'
            });
        }
    });
    // Register plugin
    tinymce.PluginManager.add( 'myplugin', tinymce.plugins.myplugin );
})();