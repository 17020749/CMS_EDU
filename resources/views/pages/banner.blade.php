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
                data-hs-overlay="#modal-banner"
                @click="$dispatch('open-modal-banner', {dataUpdate:{}})"
                >
                </x-btn-insert>
          @endif
         
        </div>
          
        <table class="min-w-full text-left text-sm font-light">
          <thead
            class="border-b bg-white font-medium dark:border-neutral-500 dark:bg-neutral-600">
            <tr>
              <th scope="col" class="px-6 py-4">STT</th>
              <th scope="col" class="px-6 py-4">Tên banner</th>
              <th scope="col" class="px-6 py-4">Slug - link</th>
              <th scope="col" class="px-6 py-4">Ảnh</th>
            </tr>
          </thead>
          <tbody id="banner">
          </tbody>
        </table>
        <!-- modal -->
          <div>
                    <x-database.modal-banner>
                    </x-database.modal-banner>
                    <x-modal-delete>
                      Xóa banner
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
  getListBanner();
async function getListBanner() { 
  var html=``;
  try {
    const response = await $.ajax({
      url: '/api/banner',
      method: 'GET',
      // headers: {
      //   'Authorization': 'Bearer ' + token
      // }
    });
      response.data.forEach(element => {
               html+=`<tr
                  class="border-b bg-white dark:border-neutral-500 dark:bg-neutral-600">
                  <td class="whitespace-nowrap px-6 py-4 font-medium">${element.id}</td>
                  <td class="whitespace-nowrap px-6 py-4">${element.banner_name}</td>
                  <td class="whitespace-nowrap px-6 py-4">${element.banner_slug}</td>
                  <td class="whitespace-nowrap px-6 py-4"><img
                    src="${element.banner_img}"
                    class="h-auto max-w-full"
                    alt="..." /></td>
                  <td class="whitespace-nowrap px-6 py-4">
                   @if(Auth::user()->check('Update:Semester')) 
                       <x-btn-edit
                    @click="$dispatch('open-modal-banner', {dataUpdate:{id:'${element.id}',
                    banner_name:'${element.banner_name}',banner_img:'${element.banner_img}',banner_slug:'${element.banner_slug}'}})"
                    data-hs-overlay="#modal-banner" >
                    </x-btn-edit>
                    @endif
                   
                     @if(Auth::user()->check('Delete:Semester')) 
                      <x-btn-delete
                    @click="$dispatch('delete', {dataDelete:{url:'/api/banner/${element.id}', message:'banner'}})"
                    data-hs-overlay="#modal-delete" >
                    </x-btn-delete>
                    @endif
                    
                  </td>
                </tr>`
      });
      document.getElementById('banner').innerHTML= html;
    console.log('Banner data:', response.data);
      
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