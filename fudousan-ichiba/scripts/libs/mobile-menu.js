class MobileMenu {
  constructor() {
    this.DOM = {};
    this.DOM.btn = document.querySelector(".mobile-menu__btn");

    this.DOM.header = document.querySelector(".header");
    this.DOM.sun = document.querySelector(".sun");
    this.DOM.scene = document.querySelector(".hero");

    this.DOM.checkboxtoggle = document.querySelector(".hero__checkbox-toggle");
    this.eventType = this._getEventType();
    this._addEvent();
  }

  _getEventType() {
    const isTouchCapable =
      "ontouchstart" in window ||
      (window.DocumentTouch && document instanceof DocumentTouch);

    return isTouchCapable ? "touchstart" : "click";
  }

  _toggle() {
    this.DOM.header.classList.toggle("menu-open");
  }
  _togglesun() {
    this.DOM.scene.classList.toggle("dark");
  }

  _addEvent() {
    this.DOM.btn.addEventListener(this.eventType, this._toggle.bind(this));
    if (!this.DOM.sun === false) {
      this.DOM.sun.addEventListener(this.eventType, this._togglesun.bind(this));
    }
    if (!this.DOM.checkboxtoggle === false) {
      this.DOM.checkboxtoggle.addEventListener(
        this.eventType,
        this._togglesun.bind(this)
      );
    }
  }
}
