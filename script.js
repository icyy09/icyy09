      






      const toggleBtn = document.querySelector('.toggle_btn')
      const toggleBtnIcon = document.querySelector('.toggle_btn i')
      const dropDownMenu = document.querySelector('.dropdown_menu')

      toggleBtn.onclick = function (){
        dropDownMenu.classList.toggle('open')
        const isOpen = dropDownMenu.classList.contains('open')

        toggleBtnIcon.classList = isOpen
        ? 'fa-solid fa-xmark'
        : 'fa-solid fa-bars'
      }



    window.addEventListener('scroll', () => {
    const title = document.querySelector('.Main');
    const scrollPosition = window.scrollY;
    if (scrollPosition > 100) {
      title.classList.add('animate');
    } else {
      title.classList.remove('animate');
    }
  });