
const handleHover = (evt) => {
  const contentElement = evt.target.parentNode.querySelector('.portfolio__item-content');

  if (contentElement 
    && contentElement.classList 
    && !contentElement.classList.contains('portfolio__item-content_visible')) {
      contentElement.classList.add('portfolio__item-content_visible');
    }  
}

document.querySelectorAll('.portfolio__item').forEach( (element) => {
  element.addEventListener('mouseover', handleHover);
})
