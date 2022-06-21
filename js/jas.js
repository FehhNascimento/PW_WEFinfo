document.querySelectorAll('.item').forEach
(item => {
  item.addEventListener('click', (e) => {
    e.target.scrollIntoView({
      inline: 'center',
      behavior: 'smooth',
    });
  });
});
