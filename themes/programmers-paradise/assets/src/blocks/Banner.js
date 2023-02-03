export default class Banner {
  // register items, execute events function
  constructor() {
    this.banner = document.getElementById("pp-block-banner");

    this.setHeight = this.setHeight.bind(this);
    this.isMobile = this.isMobile.bind(this);

    this.events();
  }

  // add event listeners
  events() {
    if (this.isMobile) {
      // set an event listener that detects when innerHeight changes:
      window.addEventListener("resize", this.setHeight);
      // call the function once to set initial height:
      this.setHeight();
    }
  }

  // declare Events
  setHeight() {
    if (!window.scrollY) {
      this.banner.style.height = window.innerHeight + "px";
    }
  }

  isMobile() {
    return [
      /Android/i,
      /webOS/i,
      /iPhone/i,
      /iPad/i,
      /iPod/i,
      /BlackBerry/i,
      /Windows Phone/i,
    ].some((device) => navigator.userAgent.match(device));
  }
}
