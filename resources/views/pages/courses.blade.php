<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Danh sách Khóa học') }}
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
         <div class="flex flex-col">
        
  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
      <div class="overflow-hidden">
        <div class="p-2">
            @if(Auth::user()->check('Add:Courses')) 
            
              <x-btn-insert
                data-hs-overlay="#modal-course"
                @click="$dispatch('open-modal-course', {dataUpdate:{}})"
                >
                </x-btn-insert>
          @endif
         
        </div>
          
        <table class="min-w-full text-left text-sm font-light">
          <thead
            class="border-b bg-white font-medium dark:border-neutral-500 dark:bg-neutral-600">
            <tr>
              <th scope="col" class="px-6 py-4">STT</th>
              <th scope="col" class="px-6 py-4">Mã khóa học</th>
              <th scope="col" class="px-6 py-4">Tên khóa học</th>
            </tr>
          </thead>
          <tbody id="course">
          </tbody>
        </table>
        <!-- modal -->
          <div>
                    <x-database.modal-course>
                    </x-database.modal-course>
                    <x-modal-delete>
                      Xóa Khóa học
                    </x-modal-delete>
                  </div>
        
      </div>
    </div>
  </div>
</div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<script>
    // var token = '{{ session("token") }}';
  getListCourse();
async function getListCourse() { 
  var html=``;
  try {
    const response = await $.ajax({
      url: '/api/course',
      method: 'GET',
      // headers: {
      //   'Authorization': 'Bearer ' + token
      // }
    });
      response.data.forEach(element => {
               html+=`<tr
                  class="border-b bg-white dark:border-neutral-500 dark:bg-neutral-600">
                  <td class="whitespace-nowrap px-6 py-4 font-medium">${element.id}</td>
                  <td class="whitespace-nowrap px-6 py-4">${element.course_code}</td>
                  <td class="whitespace-nowrap px-6 py-4">${element.course_name}</td>
                  <td class="whitespace-nowrap px-6 py-4">
                   @if(Auth::user()->check('Update:Courses')) 
                       <x-btn-edit
                    @click="$dispatch('open-modal-course', {dataUpdate:{id:'${element.id}',course_code:'${element.course_code}',course_name:'${element.course_name}'}})"
                    data-hs-overlay="#modal-course" >
                    </x-btn-edit>
                    @endif
                   
                     @if(Auth::user()->check('Delete:Courses')) 
                      <x-btn-delete
                    @click="$dispatch('delete', {dataDelete:{url:'/api/course/${element.id}', message:'course'}})"
                    data-hs-overlay="#modal-delete" >
                    </x-btn-delete>
                    @endif
                    
                  </td>
                </tr>`
      });
      document.getElementById('course').innerHTML= html;
    console.log('Course data:', response.data);
      
  } catch (error) {
     if (error.responseJSON && error.responseJSON.message) {
      console.error('Error :', error.responseJSON.message);
      toastr.error(error.responseJSON.message);
    } else {
      console.error('Error:', error);
    }
    console.error('Error getting data', error);
  }
}
</script>