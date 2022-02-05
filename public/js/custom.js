const searchByDate = document.getElementById('searchByDate');
const startEndDate = document.getElementById('startEndDate');
searchByDate.addEventListener('click', function() {
    startEndDate.style.display = 'flex';
})
document.getElementById('searchClose').addEventListener('click', function() {
    startEndDate.style.display = 'none';
})