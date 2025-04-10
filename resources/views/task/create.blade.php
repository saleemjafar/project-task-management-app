<form action="{{ route('tasks.store', $project) }}" method="POST" class="mt-4 flex rounded-md shadow-sm">
    @csrf
    <input type="text" name="name" class="block w-full min-w-0 flex-1 px-2 rounded-none rounded-l-md border-gray-300 focus:ring-gray-500 focus:border-gray-500 sm:text-sm" placeholder="New Task Name" required>
    <button class="bg-gray-800 hover:bg-gray-900 text-white font-bold py-2 px-4 rounded-r-md focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2">
        Add Task
    </button>
</form>