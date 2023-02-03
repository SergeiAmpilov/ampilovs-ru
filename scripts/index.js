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


/* popup */
const openPopup = () => {
  document.querySelector('.popup').classList.remove('popup__hidden');
}

const closePopup = () => {
  document.querySelector('.popup').classList.add('popup__hidden');
}

const handleOpenPopup = (evt) => {
  evt.preventDefault();
  document.querySelector('body').classList.add('stop-scrolling');
  openPopup();
  console.log(evt.target);
}

const handleClosePopup = (evt) => {
  document.querySelector('body').classList.remove('stop-scrolling');
  closePopup();
}

document.querySelectorAll('.popup__button').forEach( el => el.addEventListener('click', handleOpenPopup) );
document.querySelectorAll('.popup__container').forEach( el => el.addEventListener('click', handleClosePopup) );