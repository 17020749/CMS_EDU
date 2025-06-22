<div class="w-64" id="sideBar">
  <div class="transition-all duration-300 ease-in-out" :class="isSidebarExpanded ? 'w-64' : 'w-20'">
                <div class=" flex flex-col  bg-white h-full border-r transition-all duration-300 ease-in-out"
                :class="isSidebarExpanded ? 'w-64' : 'w-20'"
                >
                    
                     <div class="overflow-y-auto overflow-x-hidden flex-grow">
      <ul class="flex flex-col py-4 space-y-1">
        <li class="px-2">
          <div class="flex flex-row items-center h-8">
            <div class="text-md font-light tracking-wide text-gray-500">Menu</div>
          </div>
        </li>

        <li>
          <x-side-link :href="route('courses')" :active="request()->routeIs('courses')">
                                    <span class="inline-flex justify-center items-center ml-4">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
            </span>
            <span class="ml-2 text-sm tracking-wide truncate duration-300 ease-in-out" :class="isSidebarExpanded ? 'opacity-100' : 'opacity-0'">Khóa học</span>
                    </x-side-link>
      
        </li>

        <li>
          <x-side-link :href="route('semester')" :active="request()->routeIs('semester')">
                                    <span class="inline-flex justify-center items-center ml-4">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
            </span>
            <span class="ml-2 text-sm tracking-wide truncate duration-300 ease-in-out" :class="isSidebarExpanded ? 'opacity-100' : 'opacity-0'">Banner</span>
                    </x-side-link>
      
        </li>

        <li>
          <x-side-link :href="route('department')" :active="request()->routeIs('department')">
                                    <span class="inline-flex justify-center items-center ml-4">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
            </span>
            <span class="ml-2 text-sm tracking-wide truncate duration-300 ease-in-out" :class="isSidebarExpanded ? 'opacity-100' : 'opacity-0'">Khoa</span>
                    </x-side-link>
      
        </li>

        <li>
          <x-side-link :href="route('class')" :active="request()->routeIs('class')">
                                    <span class="inline-flex justify-center items-center ml-4">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
            </span>
            <span class="ml-2 text-sm tracking-wide truncate duration-300 ease-in-out" :class="isSidebarExpanded ? 'opacity-100' : 'opacity-0'">Lớp</span>
                    </x-side-link>
      
        </li>
        
        <li>
          <x-side-link :href="route('teacher')" :active="request()->routeIs('teacher')">
                                    <span class="inline-flex justify-center items-center ml-4">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
            </span>
            <span class="ml-2 text-sm tracking-wide truncate duration-300 ease-in-out" :class="isSidebarExpanded ? 'opacity-100' : 'opacity-0'">Giáo viên</span>
                    </x-side-link>
      
        </li>

        <li>
          <x-side-link :href="route('student')" :active="request()->routeIs('student')">
                                    <span class="inline-flex justify-center items-center ml-4">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
            </span>
            <span class="ml-2 text-sm tracking-wide truncate duration-300 ease-in-out" :class="isSidebarExpanded ? 'opacity-100' : 'opacity-0'">Sinh viên</span>
                    </x-side-link>
      
        </li>

        <li>
          <a href="#" class="relative transition-colors duration-150 ease-in-out flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 pr-6">
            <span class="inline-flex justify-center items-center ml-4">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
            </span>
            <span class="ml-2 text-sm tracking-wide truncate duration-300 ease-in-out" :class="isSidebarExpanded ? 'opacity-100' : 'opacity-0'">Profile</span>
          </a>
        </li>
        @if(Auth::check())
          @if(Auth::user()->isAdmin==1)
            <li>
            <x-side-link :href="route('role')" :active="request()->routeIs('role')">
                                    <span class="inline-flex justify-center items-center ml-4">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
            </span>
            <span class="ml-2 text-sm tracking-wide truncate duration-300 ease-in-out" :class="isSidebarExpanded ? 'opacity-100' : 'opacity-0'">Phân quyền</span>
                    </x-side-link>
            </li>
          @endif
        @endif
        <li>
           <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-side-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        <span class="inline-flex justify-center items-center ml-4">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
            </span>
            <span class="ml-2 text-sm tracking-wide truncate duration-300 ease-in-out" :class="isSidebarExpanded ? 'opacity-100' : 'opacity-0'">Logout</span>
                    </x-side-link>
                </form>
         
        </li>
      </ul>
    </div>
                </div>
            </div>
</div>
<script>
  document.addEventListener('DOMContentLoaded', function(){
      document.getElementById('sideBar').removeAttribute('class');
  })

</script>