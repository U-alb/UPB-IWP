// Toggle the visibility of the menu on checkbox change
document.getElementById('navbar-checkbox').addEventListener('change', function() {
    var navbarMenu = document.querySelector('.navbar-menu');
    navbarMenu.style.display = this.checked ? 'block' : 'none';
});
