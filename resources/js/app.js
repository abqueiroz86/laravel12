window.addEventListener('scroll', () => {
            const header = document.querySelector('.header');
            const scrolled = window.pageYOffset;
            header.style.transform = `translateY(${scrolled * 0.5}px)`;
        }); 