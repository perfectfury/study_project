let navbar = document.querySelector('.header .navbar')
let accountBox = document.querySelector('.header .account-box')
let current_page = window.location.pathname;

document.querySelector('#menu-btn').onclick = () => {
	navbar.classList.toggle('active')
	accountBox.classList.remove('active')
}

document.querySelector('#user-btn').onclick = () => {
	accountBox.classList.toggle('active')
	navbar.classList.remove('active')
}

window.onscroll = () => {
	navbar.classList.remove('active')
	accountBox.classList.remove('active')
}

document.addEventListener('DOMContentLoaded', function() {
	let navLinks = document.querySelectorAll('.navbar a');
	navLinks.forEach(function(link) {
		if (link.pathname === current_page) {
			link.classList.add('active');
		}
		if (current_page === '/admin_detail.php') {
			navLinks[1].classList.add('active');
		}
	});
});


document.querySelector('#close-update').onclick = () => {
	document.querySelector('.edit-form').style.display = 'none'
	window.location = window.location.href.split('?')[0];
}
