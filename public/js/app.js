class MenuManager {
    constructor(hamburgerId, menuId, navbarSelector) {
        this.hamburger = document.getElementById(hamburgerId);
        this.menu = document.getElementById(menuId);
        this.navbar = document.querySelector(navbarSelector);
        this.isOpen = false;

        this.hamburger.addEventListener('click', this.toggle.bind(this));
    }

    toggle = () => {

        if (this.isOpen) {
            // Zárás animáció
            this.menu.style.transform = "translateX(100%)";

            setTimeout(() => {
                this.menu.style.opacity = 0;
            }, 300);

        } else {
            // Nyitás animáció
            this.menu.style.opacity = 1;
            this.menu.style.transform = "translateX(0)";
        }

        this.menu.classList.toggle('active');
        this.navbar.classList.toggle('active');
        this.isOpen = !this.isOpen;
    };
}

// TODO ezt át kell írni szebben úgy, hogy css-bol jöjjenek az adatok 

const menuManager = new MenuManager('hamburger', 'menu', '.navbar');

/********************  Slide start **********************/

const splide = new Splide('.splide', {
    type: 'loop',
    autoplay: 'true',
    interval: '5000',
});

splide.mount();

/********************  Slide end **********************/