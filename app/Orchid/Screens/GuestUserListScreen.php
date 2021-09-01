<?php

namespace App\Orchid\Screens;

use App\Models\GuestUser;
use App\Orchid\Layouts\GuestUserListLayout;
use Orchid\Screen\Screen;

class GuestUserListScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Guest Users';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [
            'guest_users' => GuestUser::paginate()
        ];
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): array
    {
        return [];
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): array
    {
        return [
            GuestUserListLayout::class
        ];
    }
}
