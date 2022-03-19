<?php

namespace App\Http\Livewire\frontend;

use Livewire\Component;
use function view;

class Notification extends Component
{
    public $type;
    public $content;
    public $color;
    public $icon;
    public $status = 'hidden';

    protected $listeners = ['notify' => 'showNotification', 'close'];

    public function render()
    {
        return view('livewire.frontend.notification');
    }

    public function close()
    {
        $this->status = 'hidden';
        $this->color = '';
        $this->icon = '';
        $this->type = '';
        $this->content = '';
    }

    public function showNotification($event)
    {
        switch ($event['type']) {
            case('info'):
                $this->color = 'sky';
                $this->icon = 'ri-information-line';
                break;
            case('error'):
                $this->color = 'red';
                $this->icon = 'ri-error-warning-line';

                break;
            case('success'):
                $this->color = 'green';
                $this->icon = 'ri-check-line';

                break;
            case('warning'):
                $this->color = 'amber';
                $this->icon = 'ri-error-warning-line';
                break;
        }
        $this->status = 'flex';
        $this->type = $event['type'];
        $this->content = $event['content'];
    }
}
