<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Product') }}
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
            <!-- @if(Auth::user()->check('Add:Semester'))  -->
            
              <x-btn-insert
                data-hs-overlay="#modal-product"
                @click="$dispatch('open-modal-product', {dataUpdate:{}})"
                >
                </x-btn-insert>
          <!-- @endif -->
         
        </div>
          
        <table class="min-w-full text-left text-sm font-light">
          <thead
            class="border-b bg-white font-medium dark:border-neutral-500 dark:bg-neutral-600">
            <tr>
              <th scope="col" class="px-6 py-4">STT</th>
              <th scope="col" class="px-6 py-4">Tên product</th>
              <th scope="col" class="px-6 py-4">title</th>
              <th scope="col" class="px-6 py-4">Slug - link</th>
              <th scope="col" class="px-6 py-4">Ảnh</th>
              <th scope="col" class="px-6 py-4">mo ta</th>
            </tr>
          </thead>
          <tbody id="product">
          </tbody>
        </table>
        <!-- modal -->
          <div>
                    <x-database.modal-product>
                    </x-database.modal-product>
                    <x-modal-delete>
                      Xóa product
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
  getListProduct();
  function handleEditProduct(button) {
    const dataUpdate = {
        id: button.dataset.id,
        product_name: button.dataset.name,
        product_title: button.dataset.title,
        product_description: button.dataset.description,
        product_slug: button.dataset.slug,
        product_img: button.dataset.img,
        product_images: JSON.parse(atob(button.dataset.imagesBase64)), // Mảng ảnh phụ
    };

    // Gửi event tới modal mở popup và truyền dữ liệu
    window.dispatchEvent(new CustomEvent('open-modal-product', {
        detail: { dataUpdate }
    }));
}
async function getListProduct() { 
  var html=``;
  try {
    const response = await $.ajax({
      url: '/api/product',
      method: 'GET',
      // headers: {
      //   'Authorization': 'Bearer ' + token
      // }
    });
    response.data.forEach(element => {
    const product = {...element};
    const base64Images = btoa(JSON.stringify(product.product_images));

    html += `
        <tr>
            <td>${product.id}</td>
            <td>${product.product_name}</td>
            <td>${product.product_title}</td>
            <td>${product.product_slug}</td>
            <td><img src="${product.product_img}" class="h-auto max-w-full" /></td>
            <td>${product.product_description}</td>
            <td>
                <x-btn-edit
                    data-hs-overlay="#modal-product"
                    data-id="${product.id}"
                    data-name="${product.product_name}"
                    data-title="${product.product_title}"
                    data-description="${product.product_description}"
                    data-slug="${product.product_slug}"
                    data-img="${product.product_img}"
                    data-images-base64="${base64Images}"
                    onclick="handleEditProduct(this)"
                ></x-btn-edit>
            </td>
        </tr>
    `;
});
      document.getElementById('product').innerHTML= html;
    console.log('Product data:', response.data);
      
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