import "../styles/main.scss";
import AdaptiveDOM from "./utils/AdaptiveDOM";
import { Header } from "./components/Header";

const initUIComponents = (): void => {
  new Header();
};

document.addEventListener("DOMContentLoaded", (): void => {
  new AdaptiveDOM();
  initUIComponents();
});
