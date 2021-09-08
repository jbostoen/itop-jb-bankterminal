<?php

/**
 * @copyright   Copyright (C) 2021 Jeffrey Bostoen
 * @license     https://www.gnu.org/licenses/gpl-3.0.en.html
 * @version     2021-09-07 12:16:22
 *
 * iTop module definition file
 */

SetupWebPage::AddModule(
        __FILE__, // Path to the current file, all other file names are relative to the directory containing this file
        'jb-bankterminal-teemip/2.6.210907',
        array(
                // Identification
                //
                'label' => 'Datamodel: Bank Terminal (TeemIP)',
                'category' => 'business',

                // Setup
                //
                'dependencies' => array(
					'jb-bankterminal-main/2.6.0'
                ),
                'mandatory' => false,
				'visible' => false, // To prevent auto-install but shall not be listed in the install wizard
				'auto_select' => 'SetupInfo::ModuleIsSelected("teemip-config-mgmt-adaptor") && SetupInfo::ModuleIsSelected("jb-bankterminal-main")',

                // Components
                //
                'datamodel' => array(
					'model.jb-bankterminal-teemip.php'
                ),
                'webservice' => array(

                ),
                'data.struct' => array(
					// add your 'structure' definition XML files here,
                ),
                'data.sample' => array(
					// add your sample data XML files here,
                ),

                // Documentation
                //
                'doc.manual_setup' => '', // hyperlink to manual setup documentation, if any
                'doc.more_information' => '', // hyperlink to more information, if any

                // Default settings
                //
                'settings' => array(
                        // Module specific settings go here, if any
                ),
        )
);

