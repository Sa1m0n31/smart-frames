tailwind.config = {
    theme: {
        extend: {
            colors: {
                primary: '#002754',
                yellow: '#F3A811',
                gray: '#F2F2F2',
                border: '#CFCFCF',
                darkGray: '#B4B4B4',
                text: '#5B5B5B',
                section: '#F2F4F6',
            },
            maxWidth: {
                site: 'min(90%, 1420px)'
            }
        }
    }
}

console.log(tailwind);
console.log("hello");

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
const allMobilityVideosLengths = allMobilityVideos.map((item) => (item.duration));
const allMobilityHeaders = Array.from(document.querySelectorAll('.mobility--header'));
const allMobilityDescriptions = Array.from(document.querySelectorAll('.mobility--description'));
const allMobilityDots = Array.from(document.querySelectorAll('.mobility--dot'));
const allMobilityDotsInner = Array.from(document.querySelectorAll('.mobility--dot__inner'));

const selectMobilityVideo = (index) => {
    let i = 0;

    for(const item of allMobilityVideos) {
        if(index === i) {
            allMobilityVideos[i].style.display = 'block';
            allMobilityVideos[i].play();
            allMobilityHeaders[i].style.color = 'white';
            allMobilityDescriptions[i].style.display = 'block';
        }
        else {
            allMobilityVideos[i].style.display = 'none';
            allMobilityHeaders[i].style.color = '#616161';
            allMobilityDescriptions[i].style.display = 'none';
            allMobilityVideos[i].pause();
        }

        i++;
    }
}

if(allMobilityVideos.length) {
    selectMobilityVideo(0);

    const handleVideoEnd = (prevVideo, video, i, nextI) => {
        // Set dot width to 0
        allMobilityDotsInner.forEach((item, index) => {
            if(index === i) {
                item.style.visibility = 'hidden';
            }
            else if(index === nextI) {
                item.style.visibility = 'visible';
            }
        });

        // Hide prev video
        prevVideo.style.display = 'none';

        // Display current video
        video.style.display = 'block';
        video.play();

        // Hide prev content
        allMobilityHeaders[i].style.color = '#616161';
        allMobilityDescriptions[i].style.display = 'none';

        // Show current content
        if(i < allMobilityVideos.length - 1) {
            allMobilityHeaders[i+1].style.color = 'white';
            allMobilityDescriptions[i+1].style.display = 'block';
        }
        else {
            allMobilityHeaders[0].style.color = 'white';
            allMobilityDescriptions[0].style.display = 'block';
        }
    }

    const updateProgress = (video, dotInner) => {
        dotInner.style.width = ((video.currentTime / video.duration) * 100).toString() + "%";
    }

    // Add onEnded listeners
    allMobilityVideos[0].onended = function() {
        handleVideoEnd(allMobilityVideos[0], allMobilityVideos[1], 0, 1);
    }

    allMobilityVideos[1].onended = function() {
        handleVideoEnd(allMobilityVideos[1], allMobilityVideos[2], 1, 2);
    }

    allMobilityVideos[2].onended = function() {
        handleVideoEnd(allMobilityVideos[2], allMobilityVideos[0], 2, 0);
    }

    // Add progress listeners
    setInterval(() => {
        updateProgress(allMobilityVideos[0], allMobilityDotsInner[0]);
        updateProgress(allMobilityVideos[1], allMobilityDotsInner[1]);
        updateProgress(allMobilityVideos[2], allMobilityDotsInner[2]);
    }, 100);
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

// Ramki -> Popupy
const showPopup = (n) => {
    const modal = document.querySelector(`.modal--${n}`);
    modal.style.zIndex = '999999';
    modal.style.display = 'flex';
    modal.style.visibility = 'visible';
}

const hidePopup = () => {
    Array.from(document.querySelectorAll('.modal')).forEach((item) => {
        item.style.zIndex = '-999999';
        item.style.display = 'none';
        item.style.visibility = 'hidden';
    });
}

document.addEventListener('DOMContentLoaded', () => {
    Array.from(document.querySelectorAll('.modal')).forEach((item) => {
        item.style.zIndex = '-999999';
        item.style.display = 'none';
        item.style.visibility = 'hidden';
    });
});

document.addEventListener('keydown', function(event) {
    if(event.key === "Escape") {
        hidePopup();
    }
});

// Carousel top
const carouselTitles = Array.from(document.querySelectorAll('.carousel-title'));
const carouselDots = Array.from(document.querySelectorAll('.carousel-dot'));
const carouselImages = Array.from(document.querySelectorAll('.carousel-image'));

let carouselCounter = 0;

const updateCarousel = () => {
    carouselTitles.forEach((item, index) => {
        if(index === carouselCounter) {
            item.style.position = 'relative';
            item.style.visibility = 'visible';
        }
        else {
            item.style.position = 'absolute';
            item.style.visibility = 'hidden';
        }
    });

    carouselDots.forEach((item, index) => {
        if(index === carouselCounter) {
            item.style.background = '#D6F905';
            item.style.border = '2px solid #0C0C0C';
        }
        else {
            item.style.background = '#616161';
            item.style.border = 'none';
        }
    });

    carouselImages.forEach((item, index) => {
        if(index === carouselCounter) {
            item.style.position = 'relative';
            item.style.visibility = 'visible';
        }
        else {
            item.style.position = 'absolute';
            item.style.visibility = 'hidden';
        }
    });
}

const carouselPrev = () => {
    if(carouselCounter === 0) {
        carouselCounter = 2;
    }
    else {
        carouselCounter--;
    }

    updateCarousel();
}

const carouselNext = () => {
    if(carouselCounter === 2) {
        carouselCounter = 0;
    }
    else {
        carouselCounter++;
    }

    updateCarousel();
}