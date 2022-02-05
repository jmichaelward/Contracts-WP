<?php

namespace JMichaelWard\ContractsWP;

/**
 * An interface for running an initialization process on an object.
 *
 * On its face, this may seem comparable to the Runnable interface; the distinction here is that an initializing action
 * might refer to object setup, whereas a running action would refer to performing a task at a certain time.
 * Initialization might occur as part of an object's run task, it might occur before a run task, or there might not
 * be a run task at all.
 *
 * Importantly, it provides a contract for objects which require some kind of initialization. This could include
 * object hydration or running an algorithm or creating other objects to properly set up the application.
 */
interface Initializable {
	/**
	 * Initializes an object.
	 *
	 * @return void
	 */
	public function init(): void;
}
