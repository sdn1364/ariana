<?php

namespace App\Http\Livewire\backend;

use App\Models\Language;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithFileUploads;
use mysql_xdevapi\Exception;

class LanguageTable extends Component
{
    use WithFileUploads;

    public $languages;
    public $language;


    public function save(): void
    {
        $validatedData = $this->validate([
            'language' => 'required | string | unique:languages'
        ]);

        Language::create($validatedData);

        $this->dispatchBrowserEvent('toaster:success', [
            'message' => 'زبان مورد نظر اضافه شد.',
        ]);

        $this->resetForm();
    }

    public function render()
    {
        $this->languages = Language::all();
        return view('livewire.admin.language-table');
    }

    public function delete($id): void
    {
        $lang = Language::find($id);
        $this->deleteTranslationFile($id);
        $lang->delete();

        $this->dispatchBrowserEvent('toaster:info', [
            'message' => 'زبان مورد نظر حذف شد.',
        ]);
    }

    private function resetForm(): void
    {
        $this->language = '';
    }


    public function downloadFile()
    {
        return Storage::download('translate.json');
    }

    public function deleteTranslationFile($id)
    {
        $lang = Language::find($id);

        Storage::disk('lang')->delete($this->getLocale($lang->language) . '.json');

        $this->dispatchBrowserEvent('toaster:info', [
            'message' => 'فایل ترجمه مورد نظر حذف شد.',
        ]);
    }

    private function getLocale($lang)
    {

        return explode(',', $lang)[0];

    }
}
