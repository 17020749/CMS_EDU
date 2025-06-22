<style type="text/css">
	label.error {
		display: inline-block;
		color:red;
	}
	</style>
<div id="modal-semester" class="hs-overlay hidden w-full h-full fixed top-0 left-0 z-[60] overflow-x-hidden overflow-y-auto">
  <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
    
  <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-gray-800 dark:border-gray-700 dark:shadow-slate-700/[.7]">
      <div class="flex justify-between items-center py-3 px-4 border-b dark:border-gray-700">
        <h3 class="font-bold text-gray-800 dark:text-white">
          Modal title
        </h3>
        <button type="button" class="hs-dropdown-toggle inline-flex flex-shrink-0 justify-center items-center h-8 w-8 rounded-md text-gray-500 hover:text-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 focus:ring-offset-white transition-all text-sm dark:focus:ring-gray-700 dark:focus:ring-offset-gray-800" data-hs-overlay="#modal-semester">
          <span class="sr-only">Close</span>
          <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"/>
          </svg>
        </button>
      </div>
       <form action="google.com" id="formSemester" x-data="{dataUpdate: {}}" @open-modal-semester.window="dataUpdate=$event.detail.dataUpdate, console.log(typeof(dataUpdate.id))">
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
              for="semester_code"
              class="mb-3 block text-base font-medium text-[#07074D]"
            >
              Mã học kỳ
            </label>
            <input
              
                x-model="dataUpdate.semester_code"
              type="text"
              name="semester_code"
              id="semester_code"
              placeholder="Mã học kỳ"
              class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
            />
          </div>
          <div class="mb-5">
            <label
              for="semester_name"
              class="mb-3 block text-base font-medium text-[#07074D]"
            >
              Tên học kỳ
            </label>
            <input
              x-model="dataUpdate.semester_name"
              type="text"
              name="semester_name"
              id="semester_name"
              placeholder="Tên học kỳ"
              class=" w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
            />
          </div>
          <div class="mb-5">
          <label
              for="file_input"
              class="mb-3 block text-base font-medium text-[#07074D]"
            >
              Tải ảnh banner
            </label>
          <input 
          name="banner_img"
          class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" 
          id="file_input" 
          type="file">
          </div>
        </div>
      </div>
      <div>
       
      </div>
   
  </div>
</div>
      </div>
      <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-gray-700">
         <button type="button" class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border-2 border-red-200 font-semibold text-red-500 hover:text-white hover:bg-red-500 hover:border-red-500 focus:outline-none focus:ring-2 focus:ring-red-200 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800" data-hs-overlay="#modal-semester">
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
	$("#formSemester").validate({
    onsubmit: true,
		onfocusout: false,
		onkeyup: false,
		onclick: false,
		rules: {
        semester_code: {
            required:true,
        },
          semester_name: {
            required:true,
        },
  },
  messages: {
    semester_code: {
          required: "MÃ học kỳ là bắt buộc",
  },
  semester_name: {
          required: "MÃ học kỳ là bắt buộc",
  },
},
  submitHandler: function (form, event) {
      event.preventDefault();
    },
	});
function submit(dataUpdate){
  var form = $("#formSemester");
  var isValid = form.valid(); 
  if(isValid) {
    form.submit();
    Semester(dataUpdate);
  }
}
  async function Semester(dataUpdate) {
  try {
    var request
    const fileInput = document.getElementById('file_input');

    const formData = new FormData();
    formData.append('semester_code', dataUpdate.semester_code);
    formData.append('semester_name', dataUpdate.semester_name);

    if (fileInput && fileInput.files.length > 0) {
      formData.append('banner_img', fileInput.files[0]);
    }

    if(dataUpdate.id==undefined) {
        request ={
           url: `/api/semester`,
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
          request ={
           url: `/api/semester/${dataUpdate.id}`,
      method: 'PATCH',
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
  getListSemester()
  .then(() => {
     HSOverlay.close(document.getElementById('modal-semester'));
     toastr.success(response.message);
     console.log(response)
     
  })
  } catch (error) {
    if (error.responseJSON && error.responseJSON.message) {
      console.error('Error insert semester:', error.responseJSON.message);
      toastr.error(error.responseJSON.message);
    } else {
      console.error('Error insert semester:', error);
    }
  }
  }
</script>