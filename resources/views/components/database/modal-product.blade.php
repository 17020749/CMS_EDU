<style type="text/css">
	label.error {
		display: inline-block;
		color:red;
	}
  .hasImage:hover section {
  background-color: rgba(5, 5, 5, 0.4);
}
.hasImage:hover button:hover {
  background: rgba(5, 5, 5, 0.45);
}

#overlay p,
i {
  opacity: 0;
}

#overlay.draggedover {
  background-color: rgba(255, 255, 255, 0.7);
}
#overlay.draggedover p,
#overlay.draggedover i {
  opacity: 1;
}

.group:hover .group-hover\:text-blue-800 {
  color: #2b6cb0;
}
	</style>
<div id="modal-product" class="hs-overlay hidden w-full h-full fixed top-0 left-0 z-[60] overflow-x-hidden overflow-y-auto">
  <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-4xl sm:w-full m-3 sm:mx-auto">
    
  <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-gray-800 dark:border-gray-700 dark:shadow-slate-700/[.7]">
      <div class="flex justify-between items-center py-3 px-4 border-b dark:border-gray-700">
        <h3 class="font-bold text-gray-800 dark:text-white">
        </h3>
        <button type="button" class="hs-dropdown-toggle inline-flex flex-shrink-0 justify-center items-center h-8 w-8 rounded-md text-gray-500 hover:text-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 focus:ring-offset-white transition-all text-sm dark:focus:ring-gray-700 dark:focus:ring-offset-gray-800" data-hs-overlay="#modal-product">
          <span class="sr-only">Close</span>
          <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"/>
          </svg>
        </button>
      </div>
       <form id="formProduct" x-data="{dataUpdate: {},photoPreview: null,
    photoName: null}" 
    @open-modal-product.window="dataUpdate=$event.detail.dataUpdate, 
    console.log(typeof(dataUpdate.id)), 
    console.log(dataUpdate),
    photoPreview = null,
    $refs.photo.value = null;
    window.dataUpdate = dataUpdate;
    // Reset gallery
  FILES = {};
OLD_IMAGES = [];
const gallery = document.getElementById('gallery');
gallery.innerHTML = '';

if (dataUpdate.product_images && dataUpdate.product_images.length > 0) {
  dataUpdate.product_images.forEach((imgUrl) => {
    const clone = imageTempl.content.cloneNode(true);
    const li = clone.querySelector('li');
    const id = 'old-' + btoa(imgUrl); // tạo id duy nhất cho ảnh cũ
    li.id = id;

    clone.querySelector('h1').textContent = imgUrl.split('/').pop();
    const imgEl = clone.querySelector('img');
    imgEl.src = imgUrl;
    imgEl.alt = 'preview';

    const deleteBtn = clone.querySelector('.delete');
    deleteBtn.dataset.target = id;
    deleteBtn.dataset.old = true;
    deleteBtn.dataset.url = imgUrl;

    gallery.appendChild(clone);
    OLD_IMAGES.push(imgUrl);
  });
  empty.classList.add('hidden');
} else {
  empty.classList.remove('hidden');
}

    " 
    enctype="multipart/form-data">
      <div class="p-4 overflow-y-auto">
       <!-- component -->
<div class="flex items-center justify-center p-12">
  <!-- Author: FormBold Team -->
  <!-- Learn More: https://formbold.com -->
  <div class="mx-auto w-full">
   
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
              for="product_name"
              class="mb-3 block text-base font-medium text-[#07074D]"
            >
              Tên san pham
            </label>
            <input
              
                x-model="dataUpdate.product_name"
              type="text"
              name="product_name"
              id="product_name"
              placeholder="Nhập tên product"
              class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
            />
          </div>
          <div class="mb-5">
            <label
              for="product_title"
              class="mb-3 block text-base font-medium text-[#07074D]"
            >
              Tieu de san pham
            </label>
            <input
              
                x-model="dataUpdate.product_title"
              type="text"
              name="product_title"
              id="product_title"
              placeholder="Nhập tên tieu de"
              class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
            />
          </div>
          <div class="mb-5">
            <label
              for="product_description"
              class="mb-3 block text-base font-medium text-[#07074D]"
            >
              Mô tả sản phẩm
            </label>
            <textarea
            id="product_description"
            name="product_description"
            x-model="dataUpdate.product_description" #07074Drows="4" 
            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..."></textarea>
          </div>
          <div class="mb-5">
            <label
              for="product_slug"
              class="mb-3 block text-base font-medium text-[#07074D]"
            >
              Slug
            </label>
            <input
              x-model="dataUpdate.product_slug"
              type="text"
              name="product_slug"
              id="product_slug"
              placeholder="Nhập đường dẫn"
              class=" w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
            />
          </div>
          <!-- tai anh chinh -->
          <div class="mb-5">
          <label
              for="file_input"
              class="mb-3 block text-base font-medium text-[#07074D]"
            >
              Tải ảnh product
            </label>
            <div class="col-span-6 ml-2 sm:col-span-4 md:mr-3">
            <!-- Photo File Input -->
            <input id="file_input" name="product_img" type="file" class="hidden" x-ref="photo" x-on:change="
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
                    <img x-bind:src="dataUpdate.product_img" class="h-auto m-auto shadow">
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
          <!-- tai anh lien quan -->
          <div class="bg-gray-500 h-screen  sm:px-8 md:px-16 sm:py-8">
      <main class="container mx-auto  h-full">
        <!-- file upload modal -->
        <article aria-label="File Upload Modal" class="relative h-full flex flex-col bg-white shadow-xl rounded-md" ondrop="dropHandler(event);" ondragover="dragOverHandler(event);" ondragleave="dragLeaveHandler(event);" ondragenter="dragEnterHandler(event);">
          <!-- overlay -->
          <div id="overlay" class="w-full h-full absolute top-0 left-0 pointer-events-none z-50 flex flex-col items-center justify-center rounded-md">
            <i>
              <svg class="fill-current w-12 h-12 mb-3 text-blue-700" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path d="M19.479 10.092c-.212-3.951-3.473-7.092-7.479-7.092-4.005 0-7.267 3.141-7.479 7.092-2.57.463-4.521 2.706-4.521 5.408 0 3.037 2.463 5.5 5.5 5.5h13c3.037 0 5.5-2.463 5.5-5.5 0-2.702-1.951-4.945-4.521-5.408zm-7.479-1.092l4 4h-3v4h-2v-4h-3l4-4z" />
              </svg>
            </i>
            <p class="text-lg text-blue-700">Drop files to upload</p>
          </div>

          <!-- scroll area -->
          <section class="h-full overflow-auto p-8 w-full h-full flex flex-col">
            <header class="border-dashed border-2 border-gray-400 py-12 flex flex-col justify-center items-center">
              <p class="mb-3 font-semibold text-gray-900 flex flex-wrap justify-center">
                <span>Drag and drop your</span>&nbsp;<span>files anywhere or</span>
              </p>
              <input id="hidden-input" type="file" multiple class="hidden" />
              <button id="button" class="mt-2 rounded-sm px-3 py-1 bg-gray-200 hover:bg-gray-300 focus:shadow-outline focus:outline-none">
                Upload a file
              </button>
            </header>

            <h1 class="pt-8 pb-3 font-semibold sm:text-lg text-gray-900">
              To Upload
            </h1>

            <ul id="gallery" class="flex flex-1 flex-wrap -m-1">
              <li id="empty" class="h-full w-full text-center flex flex-col items-center justify-center items-center">
                <img class="mx-auto w-32" src="https://user-images.githubusercontent.com/507615/54591670-ac0a0180-4a65-11e9-846c-e55ffce0fe7b.png" alt="no data" />
                <span class="text-small text-gray-500">No files selected</span>
              </li>
            </ul>
          </section>

          <!-- sticky footer -->
          <footer class="flex justify-end px-8 pb-8 pt-4">
            <button id="submit" class="rounded-sm px-3 py-1 bg-blue-700 hover:bg-blue-500 text-white focus:shadow-outline focus:outline-none">
              Upload now
            </button>
            <button id="cancel" class="ml-3 rounded-sm px-3 py-1 hover:bg-gray-300 focus:shadow-outline focus:outline-none">
              Cancel
            </button>
          </footer>
        </article>
      </main>
    </div>
    <template id="file-template">
      <li class="block p-1 w-1/2 sm:w-1/3 md:w-1/4 lg:w-1/6 xl:w-1/8 h-24">
        <article tabindex="0" class="group w-full h-full rounded-md focus:outline-none focus:shadow-outline elative bg-gray-100 cursor-pointer relative shadow-sm">
          <img alt="upload preview" class="img-preview hidden w-full h-full sticky object-cover rounded-md bg-fixed" />

          <section class="flex flex-col rounded-md text-xs break-words w-full h-full z-20 absolute top-0 py-2 px-3">
            <h1 class="flex-1 group-hover:text-blue-800"></h1>
            <div class="flex">
              <span class="p-1 text-blue-800">
                <i>
                  <svg class="fill-current w-4 h-4 ml-auto pt-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M15 2v5h5v15h-16v-20h11zm1-2h-14v24h20v-18l-6-6z" />
                  </svg>
                </i>
              </span>
              <p class="p-1 size text-xs text-gray-700"></p>
              <button class="delete ml-auto focus:outline-none hover:bg-gray-300 p-1 rounded-md text-gray-800">
                <svg class="pointer-events-none fill-current w-4 h-4 ml-auto" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                  <path class="pointer-events-none" d="M3 6l3 18h12l3-18h-18zm19-4v2h-20v-2h5.711c.9 0 1.631-1.099 1.631-2h5.316c0 .901.73 2 1.631 2h5.711z" />
                </svg>
              </button>
            </div>
          </section>
        </article>
      </li>
    </template>

    <template id="image-template">
      <li class="block p-1 w-1/2 sm:w-1/3 md:w-1/4 lg:w-1/6 xl:w-1/8 h-24">
        <article tabindex="0" class="group hasImage w-full h-full rounded-md focus:outline-none focus:shadow-outline bg-gray-100 cursor-pointer relative text-transparent hover:text-white shadow-sm">
          <img alt="upload preview" class="img-preview w-full h-full sticky object-cover rounded-md bg-fixed" />

          <section class="flex flex-col rounded-md text-xs break-words w-full h-full z-20 absolute top-0 py-2 px-3">
            <h1 class="flex-1"></h1>
            <div class="flex">
              <span class="p-1">
                <i>
                  <svg class="fill-current w-4 h-4 ml-auto pt-" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M5 8.5c0-.828.672-1.5 1.5-1.5s1.5.672 1.5 1.5c0 .829-.672 1.5-1.5 1.5s-1.5-.671-1.5-1.5zm9 .5l-2.519 4-2.481-1.96-4 5.96h14l-5-8zm8-4v14h-20v-14h20zm2-2h-24v18h24v-18z" />
                  </svg>
                </i>
              </span>

              <p class="p-1 size text-xs"></p>
              <button class="delete ml-auto focus:outline-none hover:bg-gray-300 p-1 rounded-md">
                <svg class="pointer-events-none fill-current w-4 h-4 ml-auto" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                  <path class="pointer-events-none" d="M3 6l3 18h12l3-18h-18zm19-4v2h-20v-2h5.711c.9 0 1.631-1.099 1.631-2h5.316c0 .901.73 2 1.631 2h5.711z" />
                </svg>
              </button>
            </div>
          </section>
        </article>
      </li>
    </template>
        </div>
      </div>
      <div>
       
      </div>
   
  </div>
</div>
      </div>
      <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-gray-700">
         <button type="button" class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border-2 border-red-200 font-semibold text-red-500 hover:text-white hover:bg-red-500 hover:border-red-500 focus:outline-none focus:ring-2 focus:ring-red-200 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800" data-hs-overlay="#modal-product">
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
  document.addEventListener('open-modal-product', () => {
  // Reset lỗi validate
  $('#formProduct').validate().resetForm();
  
});
	$("#formProduct").validate({
    ignore: [],
    onsubmit: true,
		onfocusout: false,
		onkeyup: false,
		onclick: false,
		rules: {
      product_name: {
            required:true,
        },
        product_slug: {
            required:true,
        },
        product_img:{
          required: function () {
      return window.dataUpdate?.id === undefined;
    }
         }
  },
  messages: {
    product_name: {
          required: "Tên product là bắt buộc",
  },
  product_slug: {
          required: "link là bắt buộc",
  },
  product_img:{
          required: "ảnh là bắt buộc"
  }
},
  submitHandler: function (form, event) {
      event.preventDefault();
    },
	});
function submit(dataUpdate){
  var form = $("#formProduct");
  var isValid = form.valid(); 
  if(isValid) {
    form.submit();
    Product(dataUpdate);
  }
}
  async function Product(dataUpdate) {
  try {
    var request
    const fileInput = document.getElementById('file_input');

    const formData = new FormData();
    formData.append('product_name', dataUpdate.product_name);
    formData.append('product_slug', dataUpdate.product_slug);
    formData.append('product_title', dataUpdate.product_slug);
    formData.append('product_description', dataUpdate.product_description);
    if (fileInput && fileInput.files.length > 0) {
      formData.append('product_img', fileInput.files[0]);
    }
    else {
      formData.append('product_img', dataUpdate.product_img);
    }
    // Ảnh mới (file upload)
Object.values(FILES).forEach(file => {
  formData.append('product_images[]', file);
});

// Ảnh cũ (giữ lại)
OLD_IMAGES.forEach(url => {
  formData.append('old_product_images[]', url);
});
    if(dataUpdate.id==undefined) {
        request ={
           url: `/api/product`,
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
           url: `/api/product/${dataUpdate.id}`,
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
  getListProduct()
  .then(() => {
     HSOverlay.close(document.getElementById('modal-product'));
     toastr.success(response.message);
     console.log(response)
     
  })
  } catch (error) {
    if (error.responseJSON && error.responseJSON.message) {
      console.error('Error insert product:', error.responseJSON.message);
      toastr.error(error.responseJSON.message);
    } else {
      console.error('Error insert product:', error);
    }
  }
  }
  const fileTempl = document.getElementById("file-template"),
  imageTempl = document.getElementById("image-template"),
  empty = document.getElementById("empty");

// use to store pre selected files
let FILES = {};

// check if file is of type image and prepend the initialied
// template to the target element
function addFile(target, file) {
  const isImage = file.type.match("image.*"),
    objectURL = URL.createObjectURL(file);

  const clone = isImage
    ? imageTempl.content.cloneNode(true)
    : fileTempl.content.cloneNode(true);

  clone.querySelector("h1").textContent = file.name;
  clone.querySelector("li").id = objectURL;
  clone.querySelector(".delete").dataset.target = objectURL;
  clone.querySelector(".size").textContent =
    file.size > 1024
      ? file.size > 1048576
        ? Math.round(file.size / 1048576) + "mb"
        : Math.round(file.size / 1024) + "kb"
      : file.size + "b";

  isImage &&
    Object.assign(clone.querySelector("img"), {
      src: objectURL,
      alt: file.name
    });

  empty.classList.add("hidden");
  target.prepend(clone);

  FILES[objectURL] = file;
}

const gallery = document.getElementById("gallery"),
  overlay = document.getElementById("overlay");

// click the hidden input of type file if the visible button is clicked
// and capture the selected files
const hidden = document.getElementById("hidden-input");
document.getElementById("button").onclick = () => hidden.click();
hidden.onchange = (e) => {
  for (const file of e.target.files) {
    const objectURL = URL.createObjectURL(file);
    const clone = imageTempl.content.cloneNode(true);
    const li = clone.querySelector('li');
    li.id = objectURL;

    clone.querySelector('h1').textContent = file.name;
    clone.querySelector(".delete").dataset.target = objectURL;

    const imgEl = clone.querySelector("img");
    imgEl.src = objectURL;
    imgEl.alt = file.name;

    gallery.prepend(clone);
    empty.classList.add("hidden");

    FILES[objectURL] = file;
  }
};


// use to check if a file is being dragged
const hasFiles = ({ dataTransfer: { types = [] } }) =>
  types.indexOf("Files") > -1;

// use to drag dragenter and dragleave events.
// this is to know if the outermost parent is dragged over
// without issues due to drag events on its children
let counter = 0;

// reset counter and append file to gallery when file is dropped
function dropHandler(ev) {
  ev.preventDefault();
  for (const file of ev.dataTransfer.files) {
    addFile(gallery, file);
    overlay.classList.remove("draggedover");
    counter = 0;
  }
}

// only react to actual files being dragged
function dragEnterHandler(e) {
  e.preventDefault();
  if (!hasFiles(e)) {
    return;
  }
  ++counter && overlay.classList.add("draggedover");
}

function dragLeaveHandler(e) {
  1 > --counter && overlay.classList.remove("draggedover");
}

function dragOverHandler(e) {
  if (hasFiles(e)) {
    e.preventDefault();
  }
}

// event delegation to caputre delete events
// fron the waste buckets in the file preview cards
gallery.onclick = ({ target }) => {
  if (!target.classList.contains("delete")) return;

  const id = target.dataset.target;
  const isOld = target.dataset.old === "true";

  const li = document.getElementById(id);
  if (li) li.remove();

  if (isOld) {
    const url = target.dataset.url;
    OLD_IMAGES = OLD_IMAGES.filter(item => item !== url);
  } else {
    delete FILES[id];
  }

  if (gallery.children.length === 1) {
    empty.classList.remove("hidden");
  }
};


// print all selected files
document.getElementById("submit").onclick = (e) => {
  e.preventDefault();
  console.log(FILES);
};

// clear entire selection
document.getElementById("cancel").onclick = (e) => {
  e.preventDefault();
  
  while (gallery.children.length > 0) {
    gallery.lastChild.remove();
  }
  // Reset các biến lưu ảnh
  FILES = {};
  OLD_IMAGES = [];
  const hidden = document.getElementById('hidden-input'); // ID của input type="file"
  if (hidden) hidden.value = '';
  empty.classList.remove("hidden");
  gallery.append(empty);
};
</script>