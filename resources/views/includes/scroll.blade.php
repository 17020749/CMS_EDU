<button id="back-to-top" class="fixed right-4 bottom-2 p-2 z-30 bg-gradient-to-tr from-pink-300 to-blue-400 shadow-lg rounded-full hidden">
  <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path></svg>
</button>
<script>
  // Show content on scroll function
const showContentOnScroll = () => {
  const backTopBtn = document.getElementById("back-to-top");
  const contents = document.querySelectorAll("#main [data-content]");

  // Thêm class "opacity-0" cho tất cả các phần tử (trừ phần đầu)
  contents.forEach((content, index) => {
    if (index !== 0) content.classList.add("opacity-0", "transition-opacity", "duration-300");
  });

  // Xử lý sự kiện scroll
  window.addEventListener("scroll", () => {
    let scrollY = window.scrollY;

    // Hiển thị nút khi cuộn xuống hơn 100px và ẩn khi cuộn lên cách đầu 100px
    if (scrollY > 100) {
      backTopBtn.classList.remove("hidden");
    } else if (scrollY < 100) {
      backTopBtn.classList.add("hidden");
    }

    // Khi click vào nút, cuộn lên đầu trang
    backTopBtn.addEventListener("click", (e) => {
      e.preventDefault();
      window.scrollTo({ top: 0, behavior: "smooth" });
    });

    // Kiểm tra mỗi phần tử nội dung khi cuộn
    contents.forEach((content) => {
      const bottomOfObject = content.getBoundingClientRect().top + content.offsetHeight;
      const bottomOfWindow = window.innerHeight + window.scrollY;

      // Hiển thị khi cuộn xuống
      if (bottomOfWindow > bottomOfObject) {
        content.classList.add("opacity-100");
      } 
      
      // Ẩn khi cuộn lên
      else {
        content.classList.remove("opacity-100");
      }
    });
  });
};

// Gọi hàm sau khi tải trang
document.addEventListener("DOMContentLoaded", showContentOnScroll);
</script>
