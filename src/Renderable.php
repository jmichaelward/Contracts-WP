<?php

namespace JMichaelWard\ContractsWP;

/**
 * This interface can be implemented by any object responsible for rendering content to a screen.
 *
 * Any objects which output markup by way of echo statements, template includes, `ob_get_clean`, etc., are good
 * candidates for implementing this interface.
 */
interface Renderable {
	/**
	 * Render content to a screen.
	 *
	 * @return void
	 */
	public function render(): void;
}
