export default class Navigation {
  constructor() {
      function dropdown(){
        var jsMenu = document.querySelectorAll(".jsMenu");
        document.querySelector(".jsMenu .sub-menu").classList.toggle('active');
        document.querySelector(".menu-item-has-children").classList.toggle('rotate');
      }
      document.querySelector(".jsMenu").addEventListener("click", dropdown);
  }
}