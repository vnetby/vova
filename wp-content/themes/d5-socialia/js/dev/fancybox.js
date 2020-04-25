export const contentFancybox = () => {
  let items = dom.findAll('.art-content img');
  if (!items || !items.length) return;

  items.forEach(item => {
    item.addEventListener('click', e => {
      e.preventDefault();
      jQuery.fancybox.open({
        src: item.getAttribute('src')
      })
    })    
  })
}