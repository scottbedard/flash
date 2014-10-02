<?php namespace Bedard\Flash;

use Session;

class Flash {

	// Keeps track of how many messages we've flashed so we can push our session data correctly.
	protected $i = 0;

	/**
	 * Preset types for convenience (error, info, success, warning)
	 */
	public function error	( $content ) { $this->message('error', $content); }
	public function info	( $content ) { $this->message('info', $content); }
	public function success	( $content ) { $this->message('success', $content); }
	public function warning	( $content ) { $this->message('warning', $content); }

	/**
	 * Adds a message to the flash data
	 */
	public function message( $type, $content )
	{
		// Push our message onto the end of the flash data and update the counter
		Session::flash('flash_messages.'.$this->i, ['type' => $type, 'content' => $content]);
		$this->i++;
	}

	/**
	 * Persist messages for another request
	 */
	public function keep()
	{
		Session::reflash();
	}

}