export default null;

const togglers = document.querySelectorAll('[data-dropdown-toggler]');

for(let toggler of togglers) {
  const dropdown = document
    .querySelector(`[data-dropdown=${toggler.getAttribute('data-dropdown-toggler')}]`);

  toggler.addEventListener('click', () => {
    dropdown.classList.toggle(dropdown.getAttribute('data-active-class'));
    console.log(dropdown.classList);
  });
}