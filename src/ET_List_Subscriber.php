<?php
spl_autoload_register( function($class_name) {
    include_once 'src/'.$class_name.'.php';
});

/**
 * The class retrieves subscribers for a list or lists for a subscriber.
 */
class ET_List_Subscriber extends ET_GetSupport
{
	/** 
	* Initializes a new instance of the class and sets the obj property of parent.
	*/
	function __construct()
	{
		$this->obj = "ListSubscriber";
	}
}
?>