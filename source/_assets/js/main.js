window.docsearch = require('docsearch.js');

import hljs from 'highlight.js/lib/highlight';

hljs.registerLanguage('bash', require('highlight.js/lib/languages/bash'));
hljs.registerLanguage('css', require('highlight.js/lib/languages/css'));
hljs.registerLanguage('html', require('highlight.js/lib/languages/xml'));
hljs.registerLanguage('javascript', require('highlight.js/lib/languages/javascript'));
hljs.registerLanguage('json', require('highlight.js/lib/languages/json'));
hljs.registerLanguage('markdown', require('highlight.js/lib/languages/markdown'));
hljs.registerLanguage('php', require('highlight.js/lib/languages/php'));
hljs.registerLanguage('scss', require('highlight.js/lib/languages/scss'));
hljs.registerLanguage('yaml', require('highlight.js/lib/languages/yaml'));
hljs.registerLanguage('ruby', require('highlight.js/lib/languages/ruby'));
hljs.registerLanguage('r', require('highlight.js/lib/languages/r'));

document.querySelectorAll('pre code').forEach((block) => {
    hljs.highlightBlock(block);
});

import ClipboardJS from 'clipboard';

document.querySelectorAll('pre').forEach((block) => {
    block.classList = 'relative';
    let copyBtn = document.createElement('button');
    copyBtn.textContent = 'Copy';
    copyBtn.classList = 'bg-grey-light hover:bg-grey-dark text-grey-darkest font-normal hover:text-white rounded py-2 px-6 absolute pin-r mr-4';
    block.prepend(copyBtn);
});

let btns = document.querySelectorAll('pre button');

let clipboard = new ClipboardJS(btns, {
    target: function(trigger) {
        return trigger.nextElementSibling;
    },
    text: function (trigger) {
        trigger.textContent = 'Copied 👍';
        setTimeout(function() {
            trigger.textContent = 'Copy'
        }, 3000);
    }
});

clipboard.on('success', (event) => {
    event.clearSelection();
});