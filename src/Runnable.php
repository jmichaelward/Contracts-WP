<?php

namespace JMichaelWard\ContractsWP;

/**
 * Provides an interface for running tasks on objects.
 *
 * Objects which need to perform some kind of process such as initializing a plugin, setting up a theme,
 * or running a command are good candidates for implementing this interface.
 */
interface Runnable {
	/**
	 * Run a process on an object.
	 *
	 * @return void
	 */
	public function run(): void;
}
