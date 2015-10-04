<?php defined('SYSPATH') or die('No direct access allowed.');
/**
 * List of all supported languages. Array keys match language segment from the URI.
 * A default fallback language can be set by Lang::$default.
 *
 * Options for each language:
 *  i18n_code    - The target language for the I18n class
 *  locale       - Locale name(s) for setting all locale information (http://php.net/setlocale)
 *  translations - Translated route parameters for i18n routes, only needed for non-default languages
 */
return array(

    'en' => array(
        'i18n_code'    => 'en-us',
        'locale'       => array('en_US.utf-8'),
    ),
	'fr' => array(
		'i18n_code'    => 'fr-fr',
		'locale'       => array('fr_FR.utf-8'),
        'translations' => array(
        // Translations for the 'default' route example
        'welcome' => 'frwelcome', // controller
        'contest' => 'concours',    // example action
		
		'details' => 'entree', // controller
		
		

        // Translations for the 'special' route example
        'special' => 'besondere',   // static value
        'page'    => 'seite',       // static value
        'hello'   => 'hallo',       // regex value (and action)
        'goodbye' => 'wiedersehen', // regex value (and action)

        // Translations for the 'super special' route example
        'special-<action>-now' => 'besondere-<action>-jetzt', // complete route
        'sale'                 => 'verkauf',                  // example action
    ),
	),

);