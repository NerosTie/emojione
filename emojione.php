<?php
function hook_emojione_render_includes($data)
{
    $data['css_files'][] = PluginManager::$PLUGINS_PATH . '/emojione/emojione.css';
    return $data;
}

function hook_emojione_render_footer($data)
{
    $data['js_files'][] = 'https://cdn.jsdelivr.net/emojione/2.1.4/lib/js/emojione.min.js';
    $data['js_files'][] = PluginManager::$PLUGINS_PATH . '/emojione/emojione.js';
    return $data;
}
