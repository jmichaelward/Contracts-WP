<?php

namespace JMichaelWard\ContractsWP;

/**
 * This interface can be implemented by objects which need to register themselves with WordPress.
 *
 * A typical use case for this interface would be to implement it on an object that registers any kind of entity with
 * WordPress. This might be a post type, taxonomy, nav menu, editor block, etc. The `register` method in this interface
 * would contain the logic for that registration call.
 */
interface Registerable {
	/**
	 * Register an entity with WordPress.
	 */
	public function register();
}
