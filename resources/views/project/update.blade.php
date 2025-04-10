       <form action="{{ route('projects.update', $project) }}" method="POST" class="flex items-center w-full gap-2">
           @csrf @method('PUT')
           <input type="text" name="name" value="{{ $project->name }}" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full border-gray-300 rounded-md text-lg font-semibold py-2 px-3">
           <button type="submit" class="inline-flex items-center px-3 py-2 border border-transparent shadow-sm text-sm leading-4 font-medium rounded-md text-green-700 bg-green-100 hover:bg-green-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
               Update
           </button>
       </form>