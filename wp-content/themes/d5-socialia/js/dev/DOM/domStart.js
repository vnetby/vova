import { setWindowResponsive } from "./setWindowResponsive.js";
import { addBrowserClass } from "./addBrowserClass.js";
import { DOM } from "./DOM.js";

export const domStart = () => {
  window.dom = new DOM;

  addBrowserClass();
  setWindowResponsive();
}