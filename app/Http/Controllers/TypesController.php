<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Type;

class TypesController extends Controller
{
    public function list()
    {
        return view('types.list', [
            'types' => Type::all()]);
    }

    public function delete($id)
    {
        $type = Type::findOrFail($id);
        $type->delete();
        return redirect('/console/types/list')
            ->with('message', 'Type has been deleted');
    }

    public function addForm()
    {
        return view('types.add');
    }

    public function add(Request $request)
    {
        $request->validate([
            'title' => 'required|min:3|max:255',
        ]);

        $type = new Type();
        $type->title = $request->input('title');
        $type->save();

        return redirect('/console/types/list')
            ->with('message', 'Type has been added');
    }

    public function editForm($id)
    {
        $type = Type::findOrFail($id);
        return view('types.edit', [
            'type' => $type
        ]);
    }

    public function edit(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|min:3|max:255',
        ]);

        $type = Type::findOrFail($id);
        $type->title = $request->input('title');
        $type->save();

        return redirect('/console/types/list')
            ->with('message', 'Type has been edited');
    }
}
