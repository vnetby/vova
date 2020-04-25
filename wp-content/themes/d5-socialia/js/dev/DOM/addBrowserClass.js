const { detect } = require('detect-browser');
const browser = detect();


const BROWSER_CLASS = {
  ie     : 'browser-ie',
  chrome : 'browser-chrome',
  firefox: 'browser-firefox',
  edge   : 'browser-edge'
}


export const addBrowserClass = () => {
  window.browserDetect = browser.name;
  let className = BROWSER_CLASS[browser.name] ? BROWSER_CLASS[browser.name] : BROWSER_CLASS['chrome'];
  document.body.classList.add(className);
}
