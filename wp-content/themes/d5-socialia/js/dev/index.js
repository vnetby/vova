import "../../css/dev/main.less";

import { domStart } from "./DOM/domStart.js";
domStart();


import "@babel/polyfill";




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