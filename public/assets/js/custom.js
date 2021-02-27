function menuColorChanger(color) {
	var menu = document.getElementsByClassName('menu')[0].style.color = color;
	var menuItems = document.getElementsByClassName('menu-item-link');
	for(var x = 0; x < menuItems.length; x++)
	{
		menuItems[x].style.color = color;
	}
}

function logoSrcChanger(src) {
	var logo = document.getElementsByClassName('site-logo')[0];
	logo.src = src;
}

var app = new Vue({
	delimiters: ['${', '}'],
	data: {
		skills: [],
		selectedCategoryItems: [],
		selectedCategory: 'all',
		loading: false,
		formData: {},
		formErrors: {},
		canSendForm: false
	},
	el: '#fullpage',
	methods: {
		submitForm()
		{
			var vm = this;
			console.log('Wysyłam formularz', vm.formData);
		},
		getSkills() {
			var vm = this;
			vm.selectedCategory = 'all';
			vm.loading = true;
			axios.get('http://10.0.0.10/api/skills')
				.then(function(data) {
					vm.skills = data.data;
					vm.loading = false;
				});
		},
		getSkillsByCategory(category) {
			var vm = this;
			vm.selectedCategory = category;
			vm.loading = true;
			axios.get('http://10.0.0.10/api/skills/' + category)
				.then(function(data) {
					vm.skills = data.data;
					vm.loading = false;
				});
		}
	},
	mounted: function() {
		this.getSkills();
	}
});

var fullpage = new fullpage('#fullpage', {

	menu: '#menu',
	lockAnchors: false,
	anchors:['start', 'about', 'workshop', 'experience', 'contact'],
	navigation: false,
	navigationPosition: 'right',
	navigationTooltips: ['start', 'about', 'workshop', 'experience', 'contact'],
	showActiveTooltip: false,
	slidesNavigation: false,
	slidesNavPosition: 'bottom',
	licenseKey: ('15560068-077B4EC4-B9C3AECE-631A2B58'),

	//Scrolling
	css3: true,
	scrollingSpeed: 700,
	autoScrolling: true,
	fitToSection: true,
	fitToSectionDelay: 1000,
	scrollBar: false,
	easing: 'easeInOutCubic',
	easingcss3: 'ease',
	loopHorizontal: true,
	continuousVertical: false,
	continuousHorizontal: false,
	scrollHorizontally: false,
	interlockedSlides: false,
	offsetSections: false,
	resetSliders: false,
	scrollOverflow: false,
	scrollOverflowReset: false,
	scrollOverflowOptions: null,
	touchSensitivity: 15,
	bigSectionsDestination: null,

	//Design
	controlArrows: true,
	verticalCentered: true,
	fixedElements: '.navbar',
	responsiveWidth: 0,
	responsiveHeight: 0,
	responsiveSlides: false,
	parallax: false,
	parallaxOptions: {type: 'reveal', percentage: 62, property: 'translate'},
	cards: false,
	cardsOptions: {perspective: 100, fadeContent: true, fadeBackground: true},

	onLeave: function(origin, destination, direction){
		console.log(destination.anchor);
		if (destination.anchor == 'about' || destination.anchor == 'workshop')
		{
			menuColorChanger('black');
			logoSrcChanger('/assets/images/main/domixowe-logo-black.png');
		}
		else
		{
			menuColorChanger('white');
			logoSrcChanger('/assets/images/main/domixowe-logo.png');
		}
	},

});