<?php


namespace App\Http\Controllers\Admin;

use App\Group;
use App\Http\Requests\AdminGroupCreateRequest;
use App\Http\Requests\AdminGroupDestroyRequest;
use App\Http\Requests\AdminGroupStoreRequest;
use App\Http\Requests\AdminGroupUpdateRequest;
use Illuminate\Support\MessageBag;
use Yajra\DataTables\DataTables;

class GroupsController extends Controller
{
    public function store(AdminGroupStoreRequest $request)
    {

        return DataTables::of(Group::withCount(['users', 'permissions'])->get())->make(true);
    }

    public function create(AdminGroupCreateRequest $request)
    {
        $input = $request->all();
        $message = new MessageBag();
        $message->add('success', 'Pomyślnie utworzono grupę!');
        Group::create(['name' => $input['name']]);
        return $message->jsonSerialize();
    }

    public function update($id, AdminGroupUpdateRequest $request)
    {
        $message = new MessageBag();
        $input = $request->all();
        if ($group = Group::find($id)) {
            $group->update(['name' => $input['name']]);
            $message->add('success', 'Pomyślnie edytowano grupę!');
        } else $message->add('error', 'Taka grupa nie istnieje!');
        return $message->jsonSerialize();
    }

    public function destroy($id, AdminGroupDestroyRequest $request)
    {
        $message = new MessageBag();
        if ($genre = Group::find($id)) {
            if (!Group::find($id)->permissions()->get()->count()) {
                $genre->delete();
                $message->add('success', 'Pomyślnie usunięto gatunek!');
            } else $message->add('error', 'Grupa posiada permisje, usuń przypisane permisje a następnie usuń grupę!');
        } else $message->add('error', 'Taka grupa nie istnieje!');
        return $message->jsonSerialize();
    }

}
