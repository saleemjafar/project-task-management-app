        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-800 mb-4">Project & Task Manager</h1>
            <form action="{{ route('projects.store') }}" method="POST" class="flex rounded-md shadow-sm">
                @csrf
                <input type="text" name="name" class="block w-full min-w-0 flex-1 px-2 rounded-none rounded-l-md border-gray-300 focus:ring-blue-500 focus:border-blue-500 sm:text-sm" placeholder="New Project Name" required>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-r-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    Add Project
                </button>
            </form>
        </div>