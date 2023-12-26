<?php

namespace App\Http\Controllers\Admin;

use Exception;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use App\Http\Requests\RoleEditRequest;
use App\Http\Requests\RoleInsertRequest;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class RoleController extends Controller
{
    public $data = [];
    public function index()
    {
        $roles = Role::select('id','name')->get();
        return view('admin.role', compact('roles'));
    }

    public function create()
    {
        return view('role.create');
    }

    public function store(RoleInsertRequest $request)
    {
        //dd($request->all());
        try{
            $roles = Role::create([
                'name' => $request->input('name'),
            ]);
            return redirect('admin/role');
        }catch(Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function edit(string $id)
    {
        $role = Role::findOrFail($id);
        return view('role.edit', compact('role'));
    }

    public function update(RoleEditRequest $request,string $id)
    {
        $role = Role::findOrFail($id);
        $role->name = $request->input('name');
        $role->save();
        return redirect()->route('role.index');
    }

    public function destroy(string $id)
    {
        $role = Role::findOrFail($id);
        $role->delete();
        return redirect()->route('role.index');
    }

    public function permission(string $id)
    {
        try{
            $role = Role::findOrFail($id);
            $roles = $role->permissions()->pluck('name')->toArray();
            $permissions = Permission::all()->pluck('name')->toArray();
            $groupedPermissions = [];
            foreach ($permissions as $permission) {
                $groupName = explode('_', $permission)[0];
                $groupedPermissions[$groupName][] = $permission;
            }
            $this->data['roles'] = $roles;
            $this->data['role'] = $role;
            $this->data['groupedPermissions'] = $groupedPermissions;
            return view('admin.permission')->with(['data' => $this->data]);
        }catch(ModelNotFoundException $e) {
            return back()->with('error', $e->getMessage());
        }catch(Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}
