export default class SearchInput {
  constructor() {
      function toggleSearch(){
        document.querySelector(".jsSearch").classList.add('active');
        document.querySelector(".jsSearchInput").classList.add('active');
      }
      document.querySelector(".jsSearch").addEventListener("click", toggleSearch);
  }
}