<?php
namespace SmartKlass\xAPI;

/**
 * xAPI initialized Verb
 *
 * @package    local_smart_klass
 * @copyright  KlassData <kttp://www.klassdata.com>
 * @author     Oscar Ruesga <oscar@klassdata.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

class initialized extends VerbObject {

    public function __construct() {
        $this->id = 'http://adlnet.gov/expapi/verbs/initialized';

        $this->display['en-US'] = 'initialized';
        $this->display['es'] = 'inicializado';
    }
}
