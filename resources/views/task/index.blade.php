<h3 class="text-md font-semibold text-gray-700 mb-2">Tasks <span class="bg-gray-100 px-2 py-1 rounded shadow"> {{$project->tasks()->count()}} </span></h3>
<ul class="space-y-2" id="task-list-{{ $project->id }}">
    @if($project->tasks->isEmpty())
    <li class="text-gray-500 text-sm text-center">No tasks yet.</li>
    @else
    @foreach($project->tasks as $task)

    <li class="flex items-center gap-2" data-id="{{ $task->id }}">
        <span class="handle cursor-move text-gray-400 hover:text-gray-600">
            ⠿ <!--  this will be the handle to drag and drop functionality -->
        </span>
        @include('task.update', ['task' => $task])
        @include('task.delete', ['task' => $task])

    </li>
    @endforeach
    @endif
</ul>
@include('task.create', ['project' => $project])

<script>
    document.addEventListener('DOMContentLoaded', () => {
        document.querySelectorAll('[id^="task-list-"]').forEach(list => {
            new Sortable(list, {
                animation: 150,
                handle: '.handle',
                onEnd: function(evt) {
                    const order = Array.from(evt.to.children).map(li => li.dataset.id);
                    console.log(order)
                    fetch("{{ route('tasks.reorder') }}", {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({
                            order
                        })
                    });
                }
            });
        });
    });
</script>