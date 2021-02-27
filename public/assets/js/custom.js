function validateInputLength(input, length) {
	if (input.length > length)
	{
		return true;
	}
	return false;
}

function validateInputPhoneNumber(input) {
	// const re = /(?<!\w)(\(?(\+|00)?48\)?)?[ -]?\d{3}[ -]?\d{3}[ -]?\d{3}(?!\w)/
	// return re.test(input);
}

function validateInputMail(input) {
	// const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    // return re.test(String(input).toLowerCase());
}

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
		skills: [
			{
				category: 'front',
				title: 'HTML5',
				image: '/assets/images/skills/html5-logo.png',
				alt: 'HTML5'
			},
			{
				category: 'front',
				title: 'CSS3',
				image: '/assets/images/skills/css3-logo.png',
				alt: 'CSS3'
			},
			{
				category: 'front',
				title: 'JavaScript',
				image: '/assets/images/skills/js-logo.png',
				alt: 'JavaScript'
			},
			{
				category: 'back',
				title: 'PHP',
				image: '/assets/images/skills/php-logo.png',
				alt: 'PHP'
			},
			{
				category: 'front',
				title: 'jQuery',
				image: '/assets/images/skills/jquery-logo.png',
				alt: 'jQuery'
			},
			{
				category: 'back',
				title: 'Laravel',
				image: '/assets/images/skills/laravel-logo.png',
				alt: 'Laravel'
			},
			{
				category: 'back',
				title: 'PHP Slim',
				image: '/assets/images/skills/slim-logo.png',
				alt: 'PHP Slim'
			},
			{
				category: 'front',
				title: 'VueJS',
				image: '/assets/images/skills/vuejs-logo.png',
				alt: 'VueJS'
			},
			{
				category: 'front',
				title: 'AngularJS',
				image: '/assets/images/skills/angularjs-logo.png',
				alt: 'AngularJS'
			},
			{
				category: 'tools',
				title: 'Vagrant',
				image: '/assets/images/skills/vagrant-logo.png',
				alt: 'Vagrant'
			},
			{
				category: 'tools',
				title: 'Webpack',
				image: '/assets/images/skills/webpack-logo.png',
				alt: 'Webpack'
			},
			{
				category: 'tools',
				title: 'Git',
				image: '/assets/images/skills/git-logo.png',
				alt: 'Git'
			},
			{
				category: 'back',
				title: 'SQL',
				image: '/assets/images/skills/sql-logo.png',
				alt: 'SQL'
			},
			{
				category: 'tools',
				title: 'Photoshop',
				image: '/assets/images/skills/photoshop-logo.png',
				alt: 'Photoshop'
			},
			{
				category: 'tools',
				title: 'WordPress',
				image: '/assets/images/skills/wordpress-logo.png',
				alt: 'WordPress'
			},
			{
				category: 'tools',
				title: 'WooCommerce',
				image: '/assets/images/skills/woocommerce-logo.png',
				alt: 'WooCommerce'
			},
			{
				category: 'front',
				title: 'SASS',
				image: '/assets/images/skills/sass-logo.png',
				alt: 'SASS'
			},
			{
				category: 'front',
				title: 'TypeScript',
				image: '/assets/images/skills/typescript-logo.png',
				alt: 'TypeScript'
			},
			{
				category: 'front',
				title: 'EcmaScript6',
				image: '/assets/images/skills/ecmascript-logo.png',
				alt: 'EcmaScript6'
			},
			{
				category: 'back',
				title: 'Lumen',
				image: '/assets/images/skills/lumen-logo.png',
				alt: 'Lumen'
			}
		],
		selectedCategoryItems: [],
		selectedCategory: 'all',
		loading: false,
		formData: [
			{
				field: {
					type: 'normal',
					value: '',
					hasError: false
				}
			},
			{
				field: {
					type: 'phoneNumber',
					value: '',
					hasError: false
				}
			},
			{
				field: {
					type: 'mail',
					value: '',
					hasError: false
				}
			},
			{
				field: {
					type: 'normal',
					value: '',
					hasError: false
				}
			}
		],
		canSendForm: false
	},
	el: '#fullpage',
	methods: {
		setCategory(category)
		{
			this.selectedCategory = category;
			if (category == 'all')
			{
				this.selectedCategoryItems = this.skills;
			}
			else
			{
				this.selectedCategoryItems = this.skills.filter(function(item) {
					return item.category == category;
				});
			}
		},
		fakeLoader(callback)
		{
			this.loading = true;
			var vm = this;
			setTimeout(function() {
				vm.loading = false;
				callback;
			}, 500);
		},
		setCategoryWithLoading(category)
		{
			if (!this.loading)
			{
				this.fakeLoader(this.setCategory(category));
			}
		},
		submitForm()
		{
			this.validateForm(this.formData);
			if (this.checkFormErrors())
			{
				console.log('Wysyłam formularz bez błędów');
			}
		},
		validateForm(form)
		{
			for (var x = 0; x < form.length; x++)
			{
				var validatingField = form[x].field;
				if (validatingField.type == 'normal')
				{
					if (validateInputLength(validatingField.value.trim(), 5))
					{
						validatingField.hasError = false;
					}
					else
					{
						validatingField.hasError = true;
					}
				}
				if (validatingField.type == 'phoneNumber')
				{
					if ( validateInputPhoneNumber(validatingField.value) )
					{
						validatingField.hasError = false;
					}
					else
					{
						validatingField.hasError = true;
					}
				}
				if (validatingField.type == 'mail')
				{
					if ( validateInputMail(validatingField.value.trim()) )
					{
						validatingField.hasError = false;
					}
					else
					{
						validatingField.hasError = true;
					}
				}
			}
		},
		checkFormErrors() {
			var errors = this.formData.filter(function(item) {
				return item.field.hasError
			});
			if (errors.length > 0) 
			{
				return false;
			}
			else
			{
				return true;
			}
		}
	},
	mounted: function() {
		this.setCategory('all');
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