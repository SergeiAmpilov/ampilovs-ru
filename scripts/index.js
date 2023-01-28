const porfolioItemList = document.querySelectorAll('.portfolio__item');

const handleHover = (evt) => {
  const contentElement = evt.target.querySelector('.portfolio__item-content');

  if (contentElement 
    && contentElement.classList 
    && !contentElement.classList.contains('portfolio__item-content_visible')) {
      
      porfolioItemList.forEach((el) => {
        const contElPrevious = el.querySelector('.portfolio__item-content');
        if (contElPrevious && contElPrevious.classList) {
          contElPrevious.classList.remove('portfolio__item-content_visible');
        }
      });

      contentElement.classList.add('portfolio__item-content_visible');
    }  
}

porfolioItemList.forEach( (element) => {
  element.addEventListener('mouseover', handleHover);
})
