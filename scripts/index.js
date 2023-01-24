
const handleHover = (evt) => {
  const contentElement = evt.target.querySelector('.portfolio__item-content');

  if (contentElement 
    && contentElement.classList 
    && !contentElement.classList.contains('portfolio__item-content_visible')) {
      contentElement.classList.add('portfolio__item-content_visible');
    }  
}

// const handleMouseOut = (evt) => {
//   const outElement = evt.target;
//   if (outElement.classList
//       && outElement.classList.contains('portfolio__item-content_visible')) {
//         outElement.classList.remove('portfolio__item-content_visible');
//       }
// };

document.querySelectorAll('.portfolio__item').forEach( (element) => {
  element.addEventListener('mouseover', handleHover);
  // element.addEventListener('mouseout', handleMouseOut);
})
