import "../../css/dev/main.less";

import { frontHeaderSlider } from "./sliders.js";

import { contentFancybox } from "./fancybox.js";


const dinamicScripts = container => {
  contentFancybox();
}






const staticScripts = () => {
  frontHeaderSlider();
}






dinamicScripts();
staticScripts();