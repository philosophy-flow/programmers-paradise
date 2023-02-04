export default class Menu {
  // register items, execute events function
  constructor() {
    this.menu = document.getElementById("pp-global-header");
    this.events();
  }

  // add event listeners
  events() {
    window.addEventListener("scroll", () => {
      const prevScrollPos = window.pageYOffset;

      let currentScrollPos;
      setTimeout(() => {
        currentScrollPos = window.pageYOffset;

        if (currentScrollPos > 100 && currentScrollPos > prevScrollPos) {
          this.menu.style.top = `${-this.menu.offsetHeight}px`;
        } else if (currentScrollPos > 100 && currentScrollPos < prevScrollPos) {
          this.menu.style.top = "0";
          this.menu.style.backgroundColor = "#fff";
        } else if (currentScrollPos < 100){
            this.menu.style.top = "0";
          this.menu.style.backgroundColor = "inherit";  
        }
      }, 500);
    });
  }

  // declareEvents
}
