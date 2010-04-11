<?php
/**
 * Userpoint base class
 * 
 * @package     Userpoint
 * @created     Aug 14th, 2009
 * @version     $Revision: $
 * @modifiedby  $LastChangedBy: $
 * @license     http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author      Billy Gunn
 * @copyright   Construct Aegis, LLC 2009
 * @link        http://www.constructaegis.com
 */

class Userpoint extends ElggObject {

    /**
     * A single-word arbitrary string that defines what 
     * kind of object this is
     *
     * @var string
     * @access private
     */
    private $subtype = 'userpoint';

    /**
     * Set up the subtype.
     * 
     * @access protected
     * @see engine/lib/ElggObject#initialise_attributes()
     */
    protected function initialise_attributes() {

        parent::initialise_attributes();

        $this->attributes['subtype'] = $this->subtype;
    }


    /**
     * Class constructor
     *
     * @param integer  $guid The object guid
     * @param integer  $user_guid The users guid
     * @param string   $description The description (reason) for these points
     */
    public function __construct($guid=null, $user_guid=null, $description=null) {

        parent::__construct($guid);

        if ($guid) {
            return true;
        }

        if (!$user = get_entity($user_guid)) {
            return false;
        }

        $this->owner_guid     = $user_guid;
        $this->container_guid = $user_guid;
        $this->description    = $description;
    }
}

