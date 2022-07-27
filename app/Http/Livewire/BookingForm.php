<?php

namespace App\Http\Livewire;

use App\Models\Stadium;
use DateTime;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Livewire\Component;

class BookingForm extends Component
{
    public ?int $stadiumId;
    public ?DateTime $date;
    public ?string $time;
    public Collection $stadiums;


    public function render(): Factory|View|Application
    {
        $this->stadiums = Stadium::query()->get();

        return view('livewire.booking');
    }


}
