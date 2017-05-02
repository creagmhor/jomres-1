<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.29
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j10002charts
{
    public function __construct()
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = true;

            return;
        }
        $this->cpanelButton = '';
        $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
        $jrConfig = $siteConfig->get();

		$htmlFuncs = jomres_singleton_abstract::getInstance('html_functions');
		$this->cpanelButton = $htmlFuncs->cpanelButton(JOMRES_SITEPAGE_URL_ADMIN.'&task=charts', 'ChartBarTrend.png', jr_gettext('_JOMRES_CHARTS', '_JOMRES_CHARTS', false, false), '/'.JOMRES_ROOT_DIRECTORY.'/images/jomresimages/small/', jr_gettext('_JOMRES_CUSTOMCODE_MENUCATEGORIES_STATS', '_JOMRES_CUSTOMCODE_MENUCATEGORIES_STATS', false, false));
    }

    public function touch_template_language()
    {
        $output = array();

        $output[ ] = jr_gettext('_JOMRES_CUSTOMCODE_MENUCATEGORIES_STATS', '_JOMRES_CUSTOMCODE_MENUCATEGORIES_STATS');

        foreach ($output as $o) {
            echo $o;
            echo '<br/>';
        }
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return $this->cpanelButton;
    }
}
