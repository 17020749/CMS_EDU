<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Banner') }}
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
            @if(Auth::user()->check('Add:Semester')) 
            
              <x-btn-insert
                data-hs-overlay="#modal-semester"
                @click="$dispatch('open-modal-semester', {dataUpdate:{}})"
                >
                </x-btn-insert>
          @endif
         
        </div>
          
        <table class="min-w-full text-left text-sm font-light">
          <thead
            class="border-b bg-white font-medium dark:border-neutral-500 dark:bg-neutral-600">
            <tr>
              <th scope="col" class="px-6 py-4">STT</th>
              <th scope="col" class="px-6 py-4">Mã học kỳ</th>
              <th scope="col" class="px-6 py-4">Tên học kỳ</th>
            </tr>
          </thead>
          <tbody id="semester">
          </tbody>
        </table>
        <!-- modal -->
          <div>
                    <x-database.modal-banner>
                    </x-database.modal-banner>
                    <x-modal-delete>
                      Xóa Học kỳ
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
    var token = '{{ session("token") }}';
  getListSemester();
async function getListSemester() { 
  var html=``;
  try {
    const response = await $.ajax({
      url: '/api/semester',
      method: 'GET',
      // headers: {
      //   'Authorization': 'Bearer ' + token
      // }
    });
      response.data.forEach(element => {
               html+=`<tr
                  class="border-b bg-white dark:border-neutral-500 dark:bg-neutral-600">
                  <td class="whitespace-nowrap px-6 py-4 font-medium">${element.id}</td>
                  <td class="whitespace-nowrap px-6 py-4">${element.semester_code}</td>
                  <td class="whitespace-nowrap px-6 py-4">${element.semester_name}</td>
                  <td class="whitespace-nowrap px-6 py-4">
                   @if(Auth::user()->check('Update:Semester')) 
                       <x-btn-edit
                    @click="$dispatch('open-modal-semester', {dataUpdate:{id:'${element.id}',semester_code:'${element.semester_code}',semester_name:'${element.semester_name}'}})"
                    data-hs-overlay="#modal-semester" >
                    </x-btn-edit>
                    @endif
                   
                     @if(Auth::user()->check('Delete:Semester')) 
                      <x-btn-delete
                    @click="$dispatch('delete', {dataDelete:{url:'/api/semester/${element.id}', message:'semester'}})"
                    data-hs-overlay="#modal-delete" >
                    </x-btn-delete>
                    @endif
                    
                  </td>
                </tr>`
      });
      document.getElementById('semester').innerHTML= html;
    console.log('Semester data:', response.data);
      
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