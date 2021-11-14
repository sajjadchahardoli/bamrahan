const secondaryNav = document.getElementById('secondary-nav');
const searchInput = document.getElementById('search-input');
const searchElement = document.getElementById('close-search');

// 
function secondaryNavToggle(){
    secondaryNav.classList.toggle('hidden');
}

function openSearch(){
    searchInput.classList.remove('hidden');
    searchElement.classList.remove('hidden');
}

function closeSearch(){
    searchInput.classList.add('hidden');
    searchElement.classList.add('hidden');
}

