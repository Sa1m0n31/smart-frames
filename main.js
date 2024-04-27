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

const mobileMenu = document.querySelector('.mobileMenu');
const mobileMenuChildren = Array.from(document.querySelectorAll('.mobileMenu>*'));

const openMenu = () => {
    mobileMenu.style.transform = 'scaleX(1)';
    setTimeout(() => {
        mobileMenuChildren.forEach((item) => {
            item.style.opacity = '1';
        });
    }, 200);
}

const closeMenu = () => {
    mobileMenuChildren.forEach((item) => {
        item.style.opacity = '0';
    });
    setTimeout(() => {
        mobileMenu.style.transform = 'scaleX(0)';
    }, 200);
}

