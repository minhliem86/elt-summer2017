<?php namespace App\Events;

use App\Events\Event;

use Illuminate\Queue\SerializesModels;

class ImageWasDeleted extends Event {

	use SerializesModels;

	/**
	 * Create a new event instance.
	 *
	 * @return void
	 */
	public $data;
	public function __construct($data)
	{
		$this->data = $data;
	}

}
