<?php
require_once ('../../../inc/includes.php');

// Check if plugin is activated...
$plugin = new Plugin();
if(!$plugin->isInstalled('formcreator') || !$plugin->isActivated('formcreator')) {
   Html::displayNotFoundError();
}

if(PluginFormcreatorFormanswer::canView()) {
   Html::header(
      _n('Form', 'Forms', 2, 'formcreator'),
      $_SERVER['PHP_SELF'],
      'plugins',
      'formcreator',
      'options'
   );

   Search::show('PluginFormcreatorFormanswer');

   Html::footer();
} else {
   Html::displayRightError();
}
