var newProd = $('.owl-paketten');
newProd.owlCarousel({
  loop: true,
  nav: true,
  items: 3,
  responsive: {
    0: {
      items: 1
    },
    500: {
      items: 2
    },
    900: {
      items: 3
    },
    1300: {
      items: 4
    },
    1650: {
      items: 5
    }
  }
});
