<?php
function hook_emojione_render_includes($data)
{
    $data['css_files'][] = PluginManager::$PLUGINS_PATH . '/emojione/css/emojione.css';
    $data['css_files'][] = PluginManager::$PLUGINS_PATH . '/emojione/css/autocomplete.css';
    return $data;
}

function hook_emojione_render_footer($data)
{
    $data['js_files'][] = PluginManager::$PLUGINS_PATH . '/emojione/js/emojione.min.js';
    $data['js_files'][] = PluginManager::$PLUGINS_PATH . '/emojione/js/emojione.js';

/* 
* Uncomment the three lines below to use the autocomplete function.
* If your theme use jquery, let the first line commented.
*/
#    $data['js_files'][] = PluginManager::$PLUGINS_PATH . '/emojione/js/zepto.min.js';
#    $data['js_files'][] = PluginManager::$PLUGINS_PATH . '/emojione/js/textcomplete.min.js';
#    $data['js_files'][] = PluginManager::$PLUGINS_PATH . '/emojione/js/autocomplete.js';

    return $data;
}
