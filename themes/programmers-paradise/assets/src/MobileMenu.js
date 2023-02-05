// This handles the functionality of the mobile menu/

export default class MobileMenu {
  // register items, execute events function
  constructor() {
    this.mobileMenuBtn = document.getElementById("pp-mobile-menu-btn");
    this.mobileMenuDrawer = document.getElementById("mobile-drawer");
    this.mobileDrawerCloseBtn = document.getElementById(
      "mobile-drawer-close-btn"
    );
    this.body = document.body;

    this.toggleMobileMenu = this.toggleMobileMenu.bind(this);
    this.closeMobileMenu = this.closeMobileMenu.bind(this);

    this.events();
  }

  // add event listeners
  events() {
    this.mobileMenuBtn.addEventListener("click", this.toggleMobileMenu);
    this.mobileDrawerCloseBtn.addEventListener("click", this.closeMobileMenu);
  }

  // declareEvents
  toggleMobileMenu() {
    this.mobileMenuDrawer.classList.toggle("active");
    this.body.classList.toggle("no-scroll");
  }

  closeMobileMenu() {
    this.mobileMenuDrawer.classList.remove("active");
    this.body.classList.remove("no-scroll");
  }
}
