<?php

namespace App\Livewire;

use App\Models\Todo;
use Illuminate\Support\Facades\Log;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class TodoList extends Component
{
    use WithPagination;

    #[Rule('required|min:3|max:50')]
    public $name;

    #[Rule('required|min:3|max:50')]
    public $EditingNewName;

    public $EditingTodoID;

    public $search;

    public function create()
    {
        $this->validateOnly('name');
        Todo::create(['name' => $this->name]);

        $this->reset('name');
        $this->resetPage();

        session()->flash('success', 'Todo Created Successfully.');
    }


    public function delete($id)
    {
        try {
            Todo::findOrFail($id)->delete();
        } catch (\Throwable $th) {
            session()->flash('error', 'Failed to delete todo!');
            Log::error($th->getMessage());
            return;
        }
    }

    public function edit($id)
    {
        $this->EditingTodoID = $id;
        $this->EditingNewName = Todo::find($id)->name;

    }


    function toggle($id)
    {
        $todo = Todo::find($id);
        $todo->completed = !$todo->completed;
        $todo->save();

    }

    public function update()
    {
        $this->validateOnly('EditingNewName');

        Todo::find($this->EditingTodoID)->update([
            'name' => $this->EditingNewName,
        ]);
        $this->cancel();
    }

    public function cancel()
    {
        $this->reset('EditingTodoID', 'EditingNewName');
    }
    public function render()
    {
        return view('livewire.todo-list', [
            'todos' => Todo::latest()
                ->where('name', 'like', "%{$this->search}%")
                ->paginate(5),
        ]);
    }
}
