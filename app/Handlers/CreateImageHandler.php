<?php namespace App\Handlers;

use App\Events\ImageWasUploaded;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldBeQueued;
use App\Models\Image;

class CreateImageHandler {

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
	 * @param  ImageWasUploaded  $event
	 * @return void
	 */
	public function handle(ImageWasUploaded $event)
	{
		$image = Image::create($event->data);
	}

}
