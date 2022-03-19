<?php

namespace App\Http\Livewire\backend;

use App\Models\contents\Content;
use App\Models\Language;
use Livewire\Component;

class InnovationContent extends Component
{

    public function save($formData)
    {

        $innovation = Content::where('page', 'innovation')->first();

        if (!empty($formData['file'])) {
            if ($innovation->hasMedia()) {
                $innovation->getMedia()[0]->delete();
            }
            $innovation->addMedia(storage_path('app/') . $formData['file'])->toMediaCollection();
        }

        $data = [];

        foreach (Language::all() as $lang) {
            $data[getLocale($lang)] = [
                'text' => $formData[getLocale($lang) . '_text'],
                'title' => $formData[getLocale($lang) . '_title']
            ];
        }

        $innovation->update($data);

        $this->dispatchBrowserEvent('toaster:info', [
            'message' => 'قسمت نوآوری ویرایش شد.',
        ]);
    }

    public function render()
    {
        return view('livewire.admin.innovation-content', [
            'content' => Content::where('page', 'innovation')->first(),
            'languages' => Language::all()
        ]);
    }
}
