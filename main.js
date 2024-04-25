const allSigns = Array.from(document.querySelectorAll('.tabs__sign'));
const allImages = Array.from(document.querySelectorAll('.tabs__image'));

const selectTab = (i) => {
    allSigns.forEach((item, index) => {
        if(index === i) {
            item.textContent = '-';
        }
        else {
            item.textContent = '+';
        }
    });

    allImages.forEach((item, index) => {
        if(index === i) {
            item.style.opacity = '1';
        }
        else {
            item.style.opacity = '0';
        }
    });
}
