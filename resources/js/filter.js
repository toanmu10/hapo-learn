const filterBtn = document.querySelector('.btn-filter');
const filterForm = document.querySelector('.filter-form');
filterBtn.addEventListener('click', ()=> {
    filterForm.classList.toggle('active');
});
