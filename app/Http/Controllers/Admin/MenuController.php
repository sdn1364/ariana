<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MenuRequest;
use App\Models\Language;
use App\Models\Menu;
use Illuminate\Http\Client\Events\ResponseReceived;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\Test\Constraint\ResponseIsRedirected;

class MenuController extends Controller
{

    public function index(): View
    {
        return view('admin.menus.index');
    }

    public function create(): View
    {
        $menus = Menu::all();
        return view('admin.menus.create', compact('menus'));
    }

    public function store(Request $request): RedirectResponse
    {

        Menu::create($this->createData());

        if (request('action') == 'newForm') {

            return redirect(route('admin.menus.create'))->withSuccess("منوی جدید ایجاد شد");
        }
        return redirect(route('admin.menus.index'))->withSuccess("منوی جدید ایجاد شد");
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function edit(Menu $menu): View
    {
        return view('admin.menus.edit', compact('menu'));
    }

    public function update(MenuRequest $menuRequest, Menu $menu)
    {
        $menu->update($this->createData());
        return redirect(route('admin.menus.index'))->withSuccess('منوی مورد نظر ویرایش شد.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    private function createData()
    {
        $menu_data = [];

        foreach (getAllLanguages() as $lang) {
            $menu_data[getLocale($lang->id)] = [
                'name' => request(getLocale($lang->id) . '_name')
            ];
        }
        $menu_data['parent_id'] = request('parent_id');
        return $menu_data;
    }
}
