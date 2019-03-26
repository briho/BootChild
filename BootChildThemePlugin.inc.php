<?php
import('lib.pkp.classes.plugins.ThemePlugin');

class BootChildThemePlugin extends ThemePlugin {

    /**
     * Load the custom styles for our theme
     * @return null
     */
	 public function init() {
        $this->setParent('bootstrapthreethemeplugin');
        $this->modifyStyle('bootstrap', array('addLess' => array('styles/variables.less')));
    }
	
    /**
     * Get the display name of this theme
     * @return string
     */
    function getDisplayName() {
        return __('plugins.themes.bootchild.name');
    }
	
    /**
     * Get the description of this plugin
     * @return string
     */
    function getDescription() {
        return __('plugins.themes.bootchild.description');
    }
}