<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Features\SupportPagination\WithoutUrlPagination;
use Livewire\WithPagination;
use OwenIt\Auditing\Models\Audit;

class AuditLog extends Component
{
    use WithPagination, WithoutUrlPagination;

    public $search = '';
    public $actionFilter = '';
    public $perPage = 10;

    protected $queryString = ['search', 'actionFilter', 'perPage'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatingActionFilter()
    {
        $this->resetPage();
    }

    public function render()
    {
        $audits = Audit::query()
            ->when($this->search, function ($query) {
                $query->where('user_name', 'like', '%' . $this->search . '%')
                    ->orWhere('auditable_type', 'like', '%' . $this->search . '%');
            })
            ->when($this->actionFilter, function ($query) {
                $query->where('event', $this->actionFilter);
            })
            ->orderBy('created_at', 'desc')
            ->paginate($this->perPage);

        return view('livewire.audit-log', [
            'audits' => $audits,
        ]);
    }
}
