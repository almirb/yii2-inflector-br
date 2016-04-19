<?php

namespace almirb\inflectorbr;

use \yii\helpers\BaseInflector;
/**
 * Inflector pluralizes and singularizes Brazilian nouns. It also contains some other useful methods.
 *
 * @author Almir Bolduan <almir.bsi@gmail.com>
 * Date: 07/04/16
 * Time: 19:01
 *
 */
class Inflector extends BaseInflector
{
    /**
     * @var array the rules for converting a word into its plural form.
     * The keys are the regular expressions and the values are the corresponding replacements.
     */
    public static $plurals = [
        '/m$/i'    => 'ns',
        '/l$/i'    => 'is',
        '/r$/i'    => 'res',
        '/(ç|l)ão$/i' => '\1ões',
        '/(p)ão$/i'   => '\1ães',
        '/$/i'     => 's',
    ];


    /**
     * @var array the rules for converting a word into its singular form.
     * The keys are the regular expressions and the values are the corresponding replacements.
     */
    public static $singulars = [
        '/ns$/i'    => 'm',
        '/is$/i'    => 'l',
        '/res$/i'    => 'r',
        '/(ç|l)ões$/i' => '\1ão',
        '/(p)ães$/i'   => '\1ão',
        '/s$/i'     => '',
    ];

}