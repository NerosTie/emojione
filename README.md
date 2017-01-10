# Shaarli Plugin Emojione
Add colorful emojis to your Shaarli.

# Installation
```
cd plugins
git clone https://github.com/NerosTie/emojione
```

Or download [the zip archive](https://github.com/NerosTie/emojione/archive/master.zip) and extract it in `plugins/emojione`.

Then activate the new plugin.

# Options
ASCII Smiley is deactivated by default.  
http://git.emojione.com/demos/latest/ascii-smileys.html  
To activate it, edit `assets/js/emojione.js`:
```
emojione.ascii = false; /* change to 'true' to have ASCII conversion */
```
SVG is the default format for emojis.
If you prefer PNG, edit `assets/js/emojione.js`:
```
emojione.imageType = 'svg'; /* change to 'png' to have emojis in PNG */
```

The autocomplete function is deactivated by default.  
http://git.emojione.com/demos/latest/autocomplete.html  
To activate it, edit `emojione.php`:
```
    /*
     * Uncomment the five lines below to use the autocomplete function.
     * If your theme use jquery, let the second line commented.
     */
#    if($data['_PAGE_'] === Router::$PAGE_EDITLINK){
#        $data['js_files'][] = PluginManager::$PLUGINS_PATH . '/emojione/assets/js/jquery.min.js';
#        $data['js_files'][] = PluginManager::$PLUGINS_PATH . '/emojione/assets/js/textcomplete.min.js';
#        $data['js_files'][] = PluginManager::$PLUGINS_PATH . '/emojione/assets/js/autocomplete.js';
#    }
```

# Compatibility

The plugin and the options are fully compatible with these themes:
* Default
* Material (https://github.com/kalvn/Shaarli-Material)
* AlbinoMouse (https://github.com/alexisju/albinomouse-template)
