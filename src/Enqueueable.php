<?php

namespace JMichaelWard\ContractsWP;

/**
 * This interface can be implemented by objects that need to enqueue assets with WordPress.
 *
 * A sample use case might be a plugin or theme that contains lots of scripts and stylesheets. You could create an
 * object for each script which contains information about its version, its path, its URL, etc., then add the
 * actual wp_enqueue_* call inside of this method. An separate class that's responsible for loading scripts could
 * initialize each Enqueable object and be confident that it can call its methods.
 */
interface Enqueueable {
	/**
	 * Enqueue an object's assets with WordPress.
	 */
	public function enqueue();
}
