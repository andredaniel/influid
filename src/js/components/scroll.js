function handleScroll(position) {
  if (position >= 100) {
    $("nav.navbar").addClass("navbar-light");
  } else {
    $("nav.navbar").removeClass("navbar-light");
  }
}

$(window).on("scroll", () => {
  const position = $(window).scrollTop();
  handleScroll(position);
});

// Executa no carregamento
handleScroll();
