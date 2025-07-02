<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Danh mục') }}
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
                data-hs-overlay="#modal-category"
                @click="$dispatch('open-modal-category', {dataUpdate:{}})"
                >
                </x-btn-insert>
          @endif
         
        </div>
          
        <table class="min-w-full text-left text-sm font-light">
          <thead
            class="border-b bg-white font-medium dark:border-neutral-500 dark:bg-neutral-600">
            <tr>
              <th scope="col" class="px-6 py-4">STT</th>
              <th scope="col" class="px-6 py-4">Ma danh mục</th>
              <th scope="col" class="px-6 py-4">Tên danh mục</th>
              <th scope="col" class="px-6 py-4">Slug - link</th>
              <th scope="col" class="px-6 py-4">Ảnh</th>
            </tr>
          </thead>
          <tbody id="category">
          </tbody>
        </table>
        <!-- modal -->
          <div>
                    <x-database.modal-category>
                    </x-database.modal-category>
                    <x-modal-delete>
                      Xóa danh mục
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
  getListCategory();
async function getListCategory() { 
  var html=``;
  try {
    const response = await $.ajax({
      url: '/api/category',
      method: 'GET',
      // headers: {
      //   'Authorization': 'Bearer ' + token
      // }
    });
      response.data.forEach(element => {
               html+=`<tr
                  class="border-b bg-white dark:border-neutral-500 dark:bg-neutral-600">
                  <td class="whitespace-nowrap px-6 py-4 font-medium">${element.id}</td>
                  <td class="whitespace-nowrap px-6 py-4">${element.category_code}</td>
                  <td class="whitespace-nowrap px-6 py-4">${element.category_name}</td>
                  <td class="whitespace-nowrap px-6 py-4">${element.category_slug}</td>
                  <td class="whitespace-nowrap px-6 py-4"><img
                    src="${element.category_img}"
                    class="h-auto max-w-full"
                    alt="..." /></td>
                  <td class="whitespace-nowrap px-6 py-4">
                   @if(Auth::user()->check('Update:Semester')) 
                       <x-btn-edit
                    @click="$dispatch('open-modal-category', {dataUpdate:{id:'${element.id}',
                    category_code:'${element.category_code}',category_name:'${element.category_name}',category_img:'${element.category_img}',category_slug:'${element.category_slug}'}})"
                    data-hs-overlay="#modal-category" >
                    </x-btn-edit>
                    @endif
                   
                     @if(Auth::user()->check('Delete:Semester')) 
                      <x-btn-delete
                    @click="$dispatch('delete', {dataDelete:{url:'/api/category/${element.id}', message:'category'}})"
                    data-hs-overlay="#modal-delete" >
                    </x-btn-delete>
                    @endif
                    
                  </td>
                </tr>`
      });
      document.getElementById('category').innerHTML= html;
    console.log('Category data:', response.data);
      
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