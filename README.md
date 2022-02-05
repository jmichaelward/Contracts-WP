# Contracts-WP
This library provides a small collection of interfaces intended for use in object-oriented development for WordPress.
It is an evolution of the first such library I'd developed, [OOPS-WP](https://github.com/webdevstudios/oops-wp), which
contained some of these concepts, but also included a series of abstract classes to help facilitate faster and more
consistent scaffolding of plugins and themes.

This time around, I'm intentionally leaving the library much smaller; the intent is to allow developers to start with
just these interfaces so that they might extend them to create other interfaces and abstract classes more specific to
the particular needs of their projects. If you didn't like the approach of the abstract classes in OOPS-WP, but you
saw the value in these smaller contracts, you may find this library useful as the basis for your own. 

Notably, this iteration includes a few contracts that differ from my first attempt: Enqueueable, Initializable, and
Hydratable. Enqueuable is definitely WordPress-specific, and can be implemented in classes responsible for enqueuing
scripts and stylesheets with WordPress, and Initializable is a variation of Runnable, but they might be used in conjunction
with one another.

Hydratable, on the other hand, is a concept prevalent in the PHP community that I wanted to add here because I use it 
myself all time. Those who are writing unit tests on a regular basis understand how challenging it can be to work
with objects that call WordPress functionality within their constructor. If you need to populate data on an object
before it can be used and want to do it the "right" way, you can implement the Hydratable interface and put the logic
for your class that populates it with data from other sources into that method. Basically, it enables that separation
of concerns, making your tests easier to write. I hope you'll give it a try.

## Requirements
PHP 7.4 or higher must be installed in your environment in order to install Contracts-WP.

## Installation
This library is best installed using [Composer](https://getcomposer.org). Simply run 
`composer require jmichaelward/contracts-wp` and ensure you're autoloading the dependencies from Composer's vendor
directory.
