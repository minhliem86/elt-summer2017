<?php namespace App\Handlers;

use App\Events\ImageWasDeleted;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldBeQueued;

use App\Models\Image;

class DeleteImageHandler {

	/**
	 * Create the event handler.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//
	}

	/**
	 * Handle the event.
	 *
	 * @param  ImageWasDeleted  $event
	 * @return void
	 */
	public function handle(ImageWasDeleted $event)
	{
		Image::destroy($event->data);
	}

}
