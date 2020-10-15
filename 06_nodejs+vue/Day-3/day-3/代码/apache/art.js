var template = require('art-template');
template.defaults.root = './';
var str= template('./art.html',{va:'李四'});
console.log(str);