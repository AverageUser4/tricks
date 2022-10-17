export default null;

const links = document.querySelectorAll('a');
for(let link of links)
  if(!link.hasAttribute('href'))
    link.setAttribute('href', 'javascript:void(0)');