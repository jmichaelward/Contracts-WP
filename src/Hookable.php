<?php

namespace JMichaelWard\ContractsWP;

/**
 * Implement this interface on an object when that object contains callbacks for WordPress actions and filters.
 *
 * The benefit of this interfaces is that, generally, you can store all of the object's `add_action` and `add_filter`
 * calls in a single location. This can make it easier to glance at an object and understand how it interacts with
 * the WordPress application.
 */
interface Hookable {
	/**
	 * Register an object's hooks with WordPress.
	 *
	 * @return void
	 */
	public function register_hooks(): void;
}
