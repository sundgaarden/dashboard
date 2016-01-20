<?php
/**
 * SerializeBehavior class file.
 *
 * @author Kenrick Buchanan <nsbucky@gmail.com>
 * @author George Pligor <pligor@facebook.com>
 * @license http://www.yiiframework.com/license/
 * 
 */

/**
 * SerializeBehavior allows a model to specify some attributes to be
 * arrays and serialized upon save and unserialized after a Find() function
 * is called on the model.
 *
 *<pre>
 * public function behaviors()
 *	{
 *		return array(
 *			'SerializeBehavior' => array(
 *				'class' => 'ext.behaviors.SerializeBehavior',
 *				'serialAttributes' => array('validator_options'),
 *			)
 *		);
 *	}
 * </pre>
 * 
*/
class SerializeBehavior extends CActiveRecordBehavior {
	/**
	* @var array The name of the attribute(s) to serialize/unserialize
	*/
    public $serialAttributes = array();
    
    /**
     * Declares events and the event handler methods
     * @return array
     */
    public function events() {
        return array_merge(parent::events(), array(
            'onBeforeSave' => 'serializeAttributes',
            'onAfterSave' => 'unserializeAttributes',
            'onAfterFind' => 'unserializeAttributes',
        ));
    }
    
    /**
     * Check to see if a php value is serializable or not
     * @return bool
     */
    protected function isSerializable($var) {
		try {
		    serialize($var);
		    return true;
		} catch(Exception $e) {
		    return false;
		}
	}
	
	/**
	 * Converts a php value into a serialized string that can be saved in the database
	 * @throws CException
	 */
	public function serializeAttributes() {

        if (count($this->serialAttributes)) {
            foreach($this->serialAttributes as $attribute) {
                $_att = $this->getOwner()->$attribute;
                if( $this->isSerializable($_att) ) {
                	$this->getOwner()->$attribute = serialize($_att);
                }
                else {
                	throw new CException('you are trying to save a non serializable variable');
                }
            }
        }
	}
	
	/** 
	 *  convert the saved as a serialized string back into a php value
	 */
	public function unserializeAttributes() {
		if(count($this->serialAttributes)) {
			foreach($this->serialAttributes as $attribute) {
				$_att = $this->getOwner()->$attribute;
				if(!empty($_att) && is_scalar($_att)) {
					$a = @unserialize($_att);
					if($a !== false) {
						$this->getOwner()->$attribute = $a;
					} else {
						$this->getOwner()->$attribute = null;
					}
				}
			}			
		}
	}
}