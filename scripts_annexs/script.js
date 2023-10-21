
// Code réaliser par Hugo Galley
function openMenuMobile(){
    document.querySelector(".header_nav").classList.add('open')
    document.querySelector(".overlay_menu_mobile").classList.add('open')
}
function closeMenuMobile(){
    document.querySelector(".header_nav").classList.remove('open')
    document.querySelector(".overlay_menu_mobile").classList.remove('open')
} 
document.querySelectorAll('.transition-link').forEach(link => {
  link.addEventListener('click', (event) => {
    event.preventDefault();
    document.body.classList.add('transitioning');
    setTimeout(() => {
      window.location.href = link.href;
    }, 500); // Attendez que l'animation se termine avant de passer à la nouvelle page
  });
});
