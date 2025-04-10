@include('project.create')

<div class="space-y-6">
    @foreach($projects as $project)
    <div class="bg-white rounded-lg shadow-sm border border-gray-200">
        <div class="p-4">
            <div class="flex items-center justify-between mb-3">
                @include('project.update', ['project' => $project])
                @include('project.delete', ['project' => $project])
            </div>

            <div>
                @include('task.index', ['project' => $project])
            </div>
        </div>
    </div>
    @endforeach
</div>