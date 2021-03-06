<?php
namespace SmartKlass\xAPI;

/**
 * xAPI exited Verb
 *
 * @package    local_smart_klass
 * @copyright  KlassData <kttp://www.klassdata.com>
 * @author     Oscar Ruesga <oscar@klassdata.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

class exited extends xApiObject{

    public function __construct() {
        $this->id = 'http://adlnet.gov/expapi/verbs/exited';

        $this->display['en-US'] = 'exited';
        $this->display['es'] = 'salido';
    }

}
