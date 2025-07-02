<style type="text/css">
	label.error {
		display: inline-block;
		color:red;
	}
	</style>
<div id="modal-category" class="hs-overlay hidden w-full h-full fixed top-0 left-0 z-[60] overflow-x-hidden overflow-y-auto">
  <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
    
  <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-gray-800 dark:border-gray-700 dark:shadow-slate-700/[.7]">
      <div class="flex justify-between items-center py-3 px-4 border-b dark:border-gray-700">
        <h3 class="font-bold text-gray-800 dark:text-white">
        </h3>
        <button type="button" class="hs-dropdown-toggle inline-flex flex-shrink-0 justify-center items-center h-8 w-8 rounded-md text-gray-500 hover:text-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 focus:ring-offset-white transition-all text-sm dark:focus:ring-gray-700 dark:focus:ring-offset-gray-800" data-hs-overlay="#modal-category">
          <span class="sr-only">Close</span>
          <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"/>
          </svg>
        </button>
      </div>
       <form  id="formCategory" x-data="{dataUpdate: {},photoPreview: null,
    photoName: null}" @open-modal-category.window="dataUpdate=$event.detail.dataUpdate, console.log(typeof(dataUpdate.id)), photoPreview = null,$refs.photo.value = null;window.dataUpdate = dataUpdate;" enctype="multipart/form-data">
      <div class="p-4 overflow-y-auto">
       <!-- component -->
<div class="flex items-center justify-center p-12">
  <!-- Author: FormBold Team -->
  <!-- Learn More: https://formbold.com -->
  <div class="mx-auto w-full max-w-[550px]">
   
      <div class="-mx-3 flex flex-wrap">
        <div class="w-full px-3">
               <template  x-if="dataUpdate.id !== undefined">
            <div class="mb-5">
            <label
              for="idSemester"
              class="mb-3 block text-base font-medium text-[#07074D]"
            >
              ID
            </label>
                   <input
              x-bind:disabled="dataUpdate.id !== undefined"
                x-model="dataUpdate.id"
              type="text"
              name="idSemester"
              id="idSemester"
              class="w-full rounded-md border border-[#e0e0e0] py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                x-bind:class="dataUpdate.id !== undefined?'bg-gray-300':''"
              />
          </div>
          </template>
          <div class="mb-5">
            <label
              for="category_code"
              class="mb-3 block text-base font-medium text-[#07074D]"
            >
              Ma danh muc
            </label>
            <input
              
                x-model="dataUpdate.category_code"
              type="text"
              name="category_code"
              id="category_code"
              placeholder="Nhập ma category"
              class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
            />
          </div>
          <div class="mb-5">
            <label
              for="category_name"
              class="mb-3 block text-base font-medium text-[#07074D]"
            >
              Tên danh mục
            </label>
            <input
              
                x-model="dataUpdate.category_name"
              type="text"
              name="category_name"
              id="category_name"
              placeholder="Nhập tên category"
              class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
            />
          </div>
          <div class="mb-5">
            <label
              for="category_slug"
              class="mb-3 block text-base font-medium text-[#07074D]"
            >
              Slug
            </label>
            <input
              x-model="dataUpdate.category_slug"
              type="text"
              name="category_slug"
              id="category_slug"
              placeholder="Nhập đường dẫn"
              class=" w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
            />
          </div>
          <div class="mb-5">
          <label
              for="file_input"
              class="mb-3 block text-base font-medium text-[#07074D]"
            >
              Tải ảnh danh mục
            </label>
            <div class="col-span-6 ml-2 sm:col-span-4 md:mr-3">
            <!-- Photo File Input -->
            <input id="file_input" name="category_img" type="file" class="hidden" x-ref="photo" x-on:change="
                                photoName = $refs.photo.files[0].name;
                                const reader = new FileReader();
                                reader.onload = (e) => {
                                    photoPreview = e.target.result;
                                };
                                reader.readAsDataURL($refs.photo.files[0]);
                                photoPreview = null;
            ">

            <label class="block text-gray-700 text-sm font-bold mb-2 text-center" for="photo">
                Profile Photo <span class="text-red-600"> </span>
            </label>
            
            <div class="text-center">
                <!-- Current Profile Photo -->
                <div class="mt-2" x-show="! photoPreview">
                    <img x-bind:src="dataUpdate.category_img" class="h-auto m-auto shadow">
                </div>
                <!-- New Profile Photo Preview -->
                <div class="mt-2" x-show="photoPreview" style="display: none;">
                <img x-bind:src="photoPreview" class="h-auto m-auto shadow">
                </div>
                <button type="button" class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-400 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50 transition ease-in-out duration-150 mt-2 ml-3" x-on:click.prevent="$refs.photo.click()">
                    Click để chọn ảnh
                </button>
            </div>
        </div>
          </div>
        </div>
      </div>
      <div>
       
      </div>
   
  </div>
</div>
      </div>
      <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-gray-700">
         <button type="button" class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border-2 border-red-200 font-semibold text-red-500 hover:text-white hover:bg-red-500 hover:border-red-500 focus:outline-none focus:ring-2 focus:ring-red-200 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800" data-hs-overlay="#modal-category">
        Close
        </button>
        <button @click="submit(dataUpdate)" class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border-2 border-green-200 font-semibold text-green-500 hover:text-white hover:bg-green-500 hover:border-green-500 focus:outline-none focus:ring-2 focus:ring-green-200 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
        Save
        </button>
      </div>
      </form>
    </div>
     
  </div>
</div>
<script>
  document.addEventListener('open-modal-category', () => {
  // Reset lỗi validate
  $('#formCategory').validate().resetForm();
});
	$("#formCategory").validate({
    ignore: [],
    onsubmit: true,
		onfocusout: false,
		onkeyup: false,
		onclick: false,
		rules: {
      category_code: {
            required:true,
        },
      category_name: {
            required:true,
        },
        category_slug: {
            required:true,
        },
        category_img:{
          required: function () {
      return window.dataUpdate?.id === undefined;
    }
         }
  },
  messages: {
    category_code: {
          required: "Ma danh mục là bắt buộc",
  },
    category_name: {
          required: "Tên danh mục là bắt buộc",
  },
  category_slug: {
          required: "link là bắt buộc",
  },
  category_img:{
          required: "ảnh là bắt buộc"
  }
},
  submitHandler: function (form, event) {
      event.preventDefault();
    },
	});
function submit(dataUpdate){
  var form = $("#formCategory");
  var isValid = form.valid(); 
  if(isValid) {
    form.submit();
    Category(dataUpdate);
  }
}
  async function Category(dataUpdate) {
  try {
    var request
    const fileInput = document.getElementById('file_input');

    const formData = new FormData();
    formData.append('category_code', dataUpdate.category_code);
    formData.append('category_name', dataUpdate.category_name);
    formData.append('category_slug', dataUpdate.category_slug);

    if (fileInput && fileInput.files.length > 0) {
      formData.append('category_img', fileInput.files[0]);
    }
    else {
      formData.append('category_img', dataUpdate.category_img);
    }
    if(dataUpdate.id==undefined) {
        request ={
           url: `/api/category`,
      method: 'POST',
      data:formData,
      processData: false,
      contentType: false, 
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        // 'Authorization': 'Bearer ' + token
      } 
        }
    }
    else {
      formData.append('_method', 'PATCH'); 
          request ={
           url: `/api/category/${dataUpdate.id}`,
      method: 'POST',
      data:formData,
      processData: false, 
      contentType: false, 
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        // 'Authorization': 'Bearer ' + token
      } 
        }
    }
    const response = await $.ajax(request);
  getListCategory()
  .then(() => {
     HSOverlay.close(document.getElementById('modal-category'));
     toastr.success(response.message);
     console.log(response)
     
  })
  } catch (error) {
    if (error.responseJSON && error.responseJSON.message) {
      console.error('Error insert category:', error.responseJSON.message);
      toastr.error(error.responseJSON.message);
    } else {
      console.error('Error insert category:', error);
    }
  }
  }
</script>