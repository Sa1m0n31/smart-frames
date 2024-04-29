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

const allMobilityVideos = Array.from(document.querySelectorAll('.mobility--video'));
const allMobilityHeaders = Array.from(document.querySelectorAll('.mobility--header'));
const allMobilityDescriptions = Array.from(document.querySelectorAll('.mobility--description'));
const allMobilityDots = Array.from(document.querySelectorAll('.mobility--dot'));

const selectMobilityVideo = (index) => {
    let i = 0;

    for(const item of allMobilityVideos) {
        if(index === i) {
            allMobilityVideos[i].style.display = 'block';
            allMobilityHeaders[i].style.color = 'white';
            allMobilityDescriptions[i].style.display = 'block';
            allMobilityDots[i].style.background = '#D3F103';
        }
        else {
            allMobilityVideos[i].style.display = 'none';
            allMobilityHeaders[i].style.color = '#616161';
            allMobilityDescriptions[i].style.display = 'none';
            allMobilityDots[i].style.background = '#616161';
        }

        i++;
    }
}

selectMobilityVideo(0);

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

// Portfolio
const allPortfolioButtons = Array.from(document.querySelectorAll('.portfolioBtn'));
const allPortfolioItems = Array.from(document.querySelectorAll('.portfolio'));

const selectPortfolio = (n) => {
    let i = 0;

    for(const item of allPortfolioButtons) {
        if(i === n) {
            item.style.background = '#D3F103';
        }
        else {
            item.style.background = 'transparent';
        }

        i++;
    }

    allPortfolioItems.forEach((item) => {
        item.style.display = 'none';
    });

    setTimeout(() => {
        Array.from(document.querySelectorAll(`.portfolio--${n}`)).forEach((item) => {
            item.style.display = 'block';
        });
    }, 200);
}
