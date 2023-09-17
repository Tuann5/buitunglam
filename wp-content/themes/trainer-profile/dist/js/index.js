/**
 * 
 * Splide slider
 */
var splidePartner = new Splide('#splide-partner', {
  type   : 'loop',
  perPage: 3,
  focus  : 'center',
  gap: '2rem',
  autoplay: true,       
  interval: 2000,
  breakpoints : {
    900: {
        perPage: 3, 
    },
    720: {
      perPage: 1,
    }
},
} );

var splideInvest = new Splide('#splide-invest', {
    type   : 'loop',
    perPage: 5,
    focus  : 'center',
    gap: '2rem',
    autoplay: true,       
    interval: 1000,
    pagination: false,
    breakpoints : {
      900: {
          perPage: 3,
      },
      720: {
        perPage: 1,
      }
  },
  } );

splidePartner.mount();
splideInvest.mount();

  const navbar = document.getElementById('home-navbar');
  const logo = document.getElementById('logo');
  const white = document.getElementById('logo-white');

window.onscroll = function() {
    if (window.pageYOffset > 70) {
        navbar.classList.remove('top');
    } else {
        navbar.classList.add('top');
    }
}

// Lắng nghe sự kiện cuộn trang
window.addEventListener('scroll', function () {
    const sections = document.querySelectorAll('section');
    const menuItems = document.querySelectorAll('#menu a');
  
    sections.forEach((section, index) => {
      const rect = section.getBoundingClientRect();
  
      // Kiểm tra xem phần tử có trong tầm nhìn không
      if (rect.top >= 0 && rect.bottom <= window.innerHeight) {
        // Loại bỏ lớp active từ tất cả các mục menu
        menuItems.forEach((menuItem) => {
          menuItem.classList.remove('active');
        });
  
        // Thêm lớp active cho mục menu tương ứng
        menuItems[index ].classList.add('active');
      }
    });
  });
  