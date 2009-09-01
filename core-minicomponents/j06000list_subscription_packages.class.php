<?php
/**
 * Mini-component core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4
* @package Jomres
* @subpackage mini-components
* @copyright	2005-2009 Vince Wooll

Jomres is distributed as a mix of two licenses (excepting other files in the libraries folder, which are independantly licensed). 

The first, proprietary license, refers to Jomres as a package. You cannot share it, period. You can see the full license here http://www.jomres.net/license.html. There are some exceptions, and these files are independantly licensed (see the /jomres/libraries/phptools folder for example)
The files in the /jomres/core-minicomponents,  /jomres/libraries/jomres/cms_specific and the /jomres/templates folders, whilst copyright Vince Wooll, are licensed differently to allow those users who wish, to develop and distribute their own third party plugins for Jomres. Those files are licensed under the MIT license, which allows third party vendors to modify them to suit their own requirements and if so desired, distribute them for free or cost. 

################################################################
This file is subject to The MIT License. For licencing information, please visit 
http://www.jomres.net/index.php?option=com_content&task=view&id=214&Itemid=86 and http://www.jomres.net/license.html
################################################################
*/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
// ################################################################

class j06000list_subscription_packages
	{
	function j06000list_subscription_packages()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $thisJRUser;
		$siteConfig = jomres_getSingleton('jomres_config_site_singleton');
		$jrConfig=$siteConfig->get();
		$task 				= get_showtime('task');
		if (!$thisJRUser->superPropertyManager && $jrConfig['useSubscriptions']=="1")
			{
			if ($thisJRUser->accesslevel == 2 && (strlen($task)==0 || $task=="list_subscription_packages" || $task == "listyourproperties" || $task == "publishProperty") )
				{
				$allowedProperties = subscribers_getAvailablePropertySlots($thisJRUser->id);
				$existingProperties = subscribers_getManagersPublishedProperties($thisJRUser->id);
				echo _JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES1.$allowedProperties._JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES2;
				echo _JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES4.count($existingProperties)._JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES5;
				if ($allowedProperties == $existingProperties)
					echo _JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES3;
				if ($task != "listyourproperties")
					echo _JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES6;
				if ($task != "list_subscription_packages")
				echo _JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES7;
				}
			}
		$subscribeIcon	='<IMG SRC="'.get_showtime('live_site').'/jomres/images/jomresimages/small/EditItem.png" border="0" alt="editicon">';
		$packages=subscriptions_packages_getallpackages();
		$output=array();
		$pageoutput=array();
		$rows=array();
		
		$output['PAGETITLE']		=_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TITLE;
		$output['HNAME']			=_JRPORTAL_SUBSCRIPTIONS_PACKAGES_NAME;
		$output['HDESCRIPTION']		=_JRPORTAL_SUBSCRIPTIONS_PACKAGES_DESCRIPTION;
		$output['HPUBLISHED']		=_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PUBLISHED;
		$output['HFREQUENCY']		=_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY;
		$output['HTRIALPERIOD']		=_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD;
		$output['HTRIALAMOUNT']		=_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALAMOUNT;
		$output['HFULLAMOUNT']		=_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FULLAMOUNT;
		$output['HROOMSLIMIT']		=_JRPORTAL_SUBSCRIPTIONS_PACKAGES_ROOMSLIMIT;
		$output['HPROPERTYLIMIT']	=_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PROPERTYLIMIT;
		
		foreach ($packages as $package)
			{
			$r=array();
			$r['ID']			=$package['id'];
			$r['NAME']			=$package['name'];
			$r['DESCRIPTION']	=$package['description'];
			$r['PUBLISHED']		=$package['published'];
			$r['FREQUENCY']		=$package['frequency'];
			$r['TRIALPERIOD']	=$package['trial_period'];
			$r['TRIALAMOUNT']	=$package['trial_amount'];
			$r['FULLAMOUNT']	=$package['full_amount'];
			$r['ROOMSLIMIT']	=$package['rooms_limit'];
			$r['PROPERTYLIMIT']	=$package['property_limit'];
			$r['SUBSCRIBE']		='<a href="'.JOMRES_SITEPAGE_URL.'&task=subscribe&id='.$package['id'].'">'._JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE.'</a>';
			$rows[]=$r;
			}

		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
		$tmpl->readTemplatesFromInput( 'frontend_list_subscription_packages.html');
		$tmpl->addRows( 'pageoutput',$pageoutput);
		$tmpl->addRows( 'rows',$rows);
		$tmpl->displayParsedTemplate();
		}
	
	
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}	
	}