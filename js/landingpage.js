  function truncateText(text, limit) {
    if (text.length <= limit) return text;
    return text.slice(0, limit) + '...';
  }
  
  function truncateCardContents() {
    const cardTitles = document.querySelectorAll('#berita-terkini .card-title');
    const cardTexts = document.querySelectorAll('#berita-terkini .card-text');
    
    cardTitles.forEach(title => {
      title.textContent = truncateText(title.textContent, 100);
    });
    
    cardTexts.forEach(text => {
      text.textContent = truncateText(text.textContent, 195);
    });
  }

  function truncateCardContents() {
    const cardTitles = document.querySelectorAll('#event-kampus .card-title');
    const cardTexts = document.querySelectorAll('#event-kampus .card-text');
    
    cardTitles.forEach(title => {
      title.textContent = truncateText(title.textContent, 100);
    });
    
    cardTexts.forEach(text => {
      text.textContent = truncateText(text.textContent, 195);
    });
  }
  
  document.addEventListener('DOMContentLoaded', function() {
    const navbar = document.getElementById('mainNavbar');
    window.addEventListener('scroll', function() {
      if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
      } else {
        navbar.classList.remove('scrolled');
      }
    });
  
    const dropdownToggles = document.querySelectorAll('.offcanvas .dropdown-toggle');
    dropdownToggles.forEach(function(toggle) {
      toggle.addEventListener('click', function(e) {
        e.preventDefault();
        const dropdownMenu = this.nextElementSibling;
        dropdownMenu.style.display = dropdownMenu.style.display === 'block' ? 'none' : 'block';
      });
    });
  
    truncateCardContents();
  });
  
  $(document).ready(function() {
    $('.carousel').carousel({
      interval: 3000
    });
  
    $('#newsModal').on('show.bs.modal', function(event) {
      const button = $(event.relatedTarget);
      const modal = $(this);
      
      modal.find('.modal-title').text(button.data('title'));
      modal.find('#newsDescription').text(button.data('description'));
      modal.find('#newsDate').text(button.data('date'));
      modal.find('#newsAuthor').text(button.data('author'));
  
      const carousel = modal.find('#newsPopup');
      carousel.find('.popup-item:nth-of-type(1) img').attr('src', button.data('image1'));
      carousel.find('.popup-item:nth-of-type(2) img').attr('src', button.data('image2'));
      carousel.find('.popup-item:nth-of-type(3) img').attr('src', button.data('image3'));
    });
  
    $('#newsModal').on('hidden.bs.modal', function() {
      $(this).find('#newsPopup').carousel(0);
    });
  });
  
  function toggleSubmenu(id, element) {
    var submenu = document.getElementById(id);
    submenu.classList.toggle('active');
    element.classList.toggle('active');
  }
  
  AOS.init();