<?php

namespace JMichaelWard\ContractsWP;

/**
 * Interface for loading an object with data that requires calls to internal WordPress development APIs.
 *
 * An object's __construct() method should only serve the purpose of creating that object for use. That is,
 * we want to avoid calling any functions within the constructor, otherwise, that object must call those
 * functions every time it is created. This can cause a lot of headaches for things like writing unit tests,
 * extending objects, etc.
 *
 * If you need to make sure an object has a fully-populated set of properties before you use it, and you take my
 * advice above, you can implement this interface, and immediately call `hydrate` on the object after you create it.
 */
interface Hydratable {
	/**
	 * Hydrates an object with data that couldn't or shouldn't have been initialized in the constructor.
	 *
	 * @return mixed
	 */
	public function hydrate();
}
