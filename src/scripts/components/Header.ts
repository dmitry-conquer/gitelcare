export class Header {
  private readonly selectors: Record<string, string> = {
    root: "[data-js-header]",
    overlay: "[data-js-header-overlay]",
    triggerButton: "[data-js-header-trigger-button]",
    itemHasSubmenu: ".has-children",
  };
  private readonly attributes: Record<string, string> = {
    ariaExpanded: "aria-expanded",
  };
  private readonly stateClasses: Record<string, string> = {
    isActive: "is-active",
    isLock: "is-lock",
  };
  private rootElement: HTMLElement | null;
  private overlayElement: HTMLElement | null;
  private triggerButtonElement: HTMLElement | null;
  private itemHasSubmenuElements: HTMLElement[];
  private toggleElements: HTMLElement[];
  private mediaQuery: MediaQueryList;
  private isMobileView: boolean;
  private isTouchDevice: boolean;

  constructor() {
    this.rootElement = document.querySelector(this.selectors.root);
    this.overlayElement = this.rootElement?.querySelector(this.selectors.overlay) || null;
    this.triggerButtonElement = this.rootElement?.querySelector(this.selectors.triggerButton) || null;
    this.toggleElements = [this.rootElement, this.overlayElement, this.triggerButtonElement].filter(Boolean) as HTMLElement[];
    this.itemHasSubmenuElements = Array.from(this.rootElement?.querySelectorAll(this.selectors.itemHasSubmenu) || []) as HTMLElement[];
    this.mediaQuery = window.matchMedia("(max-width: 1400px)");
    this.isMobileView = this.mediaQuery.matches;
    this.isTouchDevice = "ontouchstart" in window || navigator.maxTouchPoints > 0;
    this.init();
  }

  private isReady(): boolean {
    return !!this.rootElement && !!this.overlayElement && !!this.triggerButtonElement;
  }

  private init(): void {
    if (!this.isReady()) return;
    this.bindEvents();
  }

  private onButtonClick = (): void => {
    const isActive = this.rootElement?.classList.contains(this.stateClasses.isActive);
    this.setActive(!isActive);
  };

  private onDocumentClick = (e: MouseEvent): void => {
    const target = e.target as HTMLElement;
    if (target.closest(this.selectors.triggerButton) || target.closest(this.selectors.overlay) || target.closest(this.selectors.itemHasSubmenu)) return;
    this.setActive(false);
    this.closeAllMenus();
  };

  private onMediaQueryChange = (e: MediaQueryListEvent): void => {
    this.isMobileView = e.matches;
    if (!this.isMobileView) {
      this.closeAllMenus();
    }
  };

  private closeAllMenus(): void {
    this.itemHasSubmenuElements.forEach(menuItem => {
      const list = menuItem.querySelector(":scope > ul") as HTMLElement;
      if (!list) return;
      menuItem?.classList.remove(this.stateClasses.isActive);
    });
    this.setActive(false);
  }

  private setActive(state: boolean): void {
    this.toggleElements.forEach(el => el.classList.toggle(this.stateClasses.isActive, state));
    document.documentElement.classList.toggle(this.stateClasses.isLock, state);
    this.setAttributes(state);
  }

  private setAttributes(state: boolean): void {
    this.triggerButtonElement?.setAttribute(this.attributes.ariaExpanded, String(state));
  }

  private bindEvents(): void {
    this.triggerButtonElement?.addEventListener("click", this.onButtonClick);
    document.addEventListener("click", this.onDocumentClick);
    this.mediaQuery.addEventListener("change", this.onMediaQueryChange);

    const allHasChildren = Array.from(this.rootElement?.querySelectorAll(".has-children") || []) as HTMLElement[];
    allHasChildren.forEach(item => {
      const link = item.querySelector(":scope > a") as HTMLAnchorElement;
      if (!link) return;
      link.addEventListener("click", (event: MouseEvent) => {
        event.preventDefault();
        if (this.isTouchDevice && this.isMobileView) {
          item.classList.toggle(this.stateClasses.isActive);
        }
      });
    });
  }
}

export default Header;
