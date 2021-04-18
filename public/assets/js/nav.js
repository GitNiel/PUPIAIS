const hamburgerIcon = document.querySelector(".hamburgerIcon");
const closeIcon = document.querySelector(".closeIcon");
const mobileNav = document.querySelector("nav");

/*open mobile nav*/
hamburgerIcon.addEventListener("keydown", enterHamburgerIcon);
hamburgerIcon.addEventListener("click", openMobileNav)

/*close mobile nav*/
closeIcon.addEventListener("keydown", enterCloseIcon);
closeIcon.addEventListener("click", closeMobileNav);

window.addEventListener("resize", (event) => {
    if(window.innerWidth >= 840){
        mobileNav.style.left = "0";
    }
    else{
        mobileNav.style.left = "-100%";
    }
});

function enterHamburgerIcon(event){
    if(event.key == "Enter"){
        console.log(event);
        openMobileNav();
    }
}

function openMobileNav(event){
    mobileNav.style.left = "0";
}

function enterCloseIcon(event){
    if(event.key == "Enter"){
        console.log(event);
        closeMobileNav();
    }
}

function closeMobileNav(event){
    mobileNav.style.left = "-100%";
}