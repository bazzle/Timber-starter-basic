import Skip from './classes/Skip.js';
import Init from './classes/Init';

const siteFunctions = {
  documentReady__ready() {
  },
  skip__ready() {
    const skip = new Skip();
    skip.init();
  }
};

window.functionCore = new Init(siteFunctions);