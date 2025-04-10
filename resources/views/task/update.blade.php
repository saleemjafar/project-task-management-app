     <form action="{{ route('tasks.update', $task) }}" method="POST" class="flex items-center w-full gap-2">
         @csrf @method('PUT')

         <input type="text" name="name" value="{{ $task->name }}" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full border-gray-300 rounded-md py-2 px-3 text-sm">
         <div class="shadow-sm focus:ring-blue-500 focus:border-blue-500  py-2 px-2 text-xs ">
             <span style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;" class="flex">
                 <svg class="w-4 h-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                         d="M8 7V3m8 4V3m-9 8h10m-11 9h12a2 2 0 002-2V7a2 2 0 00-2-2h-1V3h-2v2H9V3H7v2H6a2 2 0 00-2 2v11a2 2 0 002 2z" />
                 </svg>

                 {{ $task->created_at->diffForHumans() }}
             </span>
         </div>
         <button type="submit" class="inline-flex items-center px-3 py-2 border border-transparent shadow-sm text-sm leading-4 font-medium rounded-md text-green-700 bg-green-100 hover:bg-green-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
             Save
         </button>
     </form>