var width = screen.width; //chiều rộng mà hình
var icon_menu = document.getElementById("cate"); //nút bấm
var x = document.getElementById("hiden-none-menu"); //menu sẽ đc hiển thị

icon_menu.onclick = function () {
  if (width <= 992) {
    if (x.style.display === "none") {
      alert("Hello! I am an alert box!!");
    }
    else {
        alert("chưa ẩn!");
      }
  }
};
