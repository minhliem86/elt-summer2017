<?php namespace App\Composers;

use Illuminate\Contracts\View\View;
use App\Repositories\ContactRepository;

class RegisterComposer {

    /**
     * The user repository implementation.
     *
     * @var UserRepository
     */
    protected $contact;

    /**
     * Create a new profile composer.
     *
     * @param  UserRepository  $users
     * @return void
     */
    public function __construct(ContactRepository $contact)
    {
        // Dependencies automatically resolved by service container...
        $this->contact = $contact;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        // $view->with('count', $this->users->count());
        $list_city = $this->contact->getListCity();
        $view->with('list_city',$list_city);
    }

}
