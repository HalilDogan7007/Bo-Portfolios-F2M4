const hamburger = document.querySelector('.Text .nav-bar .nav-list .hamburger');
const mobile_menu = document.querySelector('.Text .nav-bar .nav-list ul');
const menu_item = document.querySelectorAll('.Text .nav-bar .nav-list ul li a');
const header = document.querySelector('.Text.container');

hamburger.addEventListener('click', () => {
	hamburger.classList.toggle('active');
	mobile_menu.classList.toggle('active');
});

document.addEventListener('scroll', () => {
	var scroll_position = window.scrollY;
	if (scroll_position > 250) {
		header.style.backgroundColor = '#29323c';
	} else {
		header.style.backgroundColor = 'transparent';
	}
});

menu_item.forEach((item) => {
	item.addEventListener('click', () => {
		hamburger.classList.toggle('active');
		mobile_menu.classList.toggle('active');
	});
});
