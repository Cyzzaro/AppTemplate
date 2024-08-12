<div class="p-6 bg-white shadow-lg rounded-lg">
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-2xl font-bold text-gray-700">{{ __('Audit Logs') }}</h2>
        <div class="flex space-x-4">
            <input type="text" wire:model="search" placeholder="{{ __('Search...') }}"
                class="w-64 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">

            <select wire:model="actionFilter"
                class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="">{{ __('All Actions') }}</option>
                <option value="created">{{ __('Created') }}</option>
                <option value="updated">{{ __('Updated') }}</option>
                <option value="deleted">{{ __('Deleted') }}</option>
            </select>
        </div>
    </div>

    <table class="min-w-full bg-white rounded-lg shadow">
        <thead>
            <tr class="bg-gray-100 border-b">
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">
                    {{ __('User') }}
                </th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">
                    {{ __('Action') }}
                </th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">
                    {{ __('Auditable Type') }}
                </th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">
                    {{ __('New Value') }}
                </th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">
                    {{ __('Created At') }}
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($audits as $audit)
                <tr class="border-b hover:bg-gray-50">
                    <td class="px-6 py-4 text-sm text-gray-700">{{ $audit->user_id }}</td>
                    <td class="px-6 py-4 text-sm text-gray-700">{{ ucfirst($audit->event) }}</td>
                    <td class="px-6 py-4 text-sm text-gray-700">{{ class_basename($audit->auditable_type) }}</td>
                    <td class="px-6 py-4 text-sm text-gray-700">
                        @foreach ($audit->new_values as $key => $value)
                            <div><strong>{{ $key }}:</strong> {{ $value }}</div>
                        @endforeach
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-700">{{ $audit->created_at->format('Y-m-d H:i:s') }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="px-6 py-4 text-center text-gray-500">{{ __('No records found') }}</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div class="mt-4">
        {{ $audits->links() }}
    </div>
</div>
