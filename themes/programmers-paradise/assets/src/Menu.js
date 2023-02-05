// This handles the visibility of the navigation bar on scroll

export default class Menu {
  // register items, execute events function
  constructor() {
    this.menu = document.getElementById("pp-global-header");
    this.logo = document.getElementById("nav-logo");

    this.setNavHidden = this.setNavHidden.bind(this);
    this.setNavVisibleScrolled = this.setNavVisibleScrolled.bind(this);
    this.setNavVisibleDefault = this.setNavVisibleDefault.bind(this);

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
          this.setNavHidden();
        } else if (currentScrollPos > 100 && currentScrollPos < prevScrollPos) {
          this.setNavVisibleScrolled();
        } else if (currentScrollPos < 100) {
          this.setNavVisibleDefault();
        }
      }, 500);
    });
  }

  // declare Events
  setNavHidden() {
    this.menu.style.top = `${-this.menu.offsetHeight}px`;
  }

  setNavVisibleScrolled() {
    this.menu.style.top = "0";
    this.menu.style.backgroundColor = "#fff";
    this.menu.style.color = "#000";
    this.logo.style.fill = "#000";
  }

  setNavVisibleDefault() {
    this.menu.style.top = "0";
    this.menu.style.backgroundColor = "inherit";
    if (this.menu.classList.contains("header-inverted")) {
      this.menu.style.color = "#fff";
      this.logo.style.fill = "#fff";
    } else {
      this.menu.style.color = "#000";
      this.logo.style.fill = "#000";
    }
  }
}
