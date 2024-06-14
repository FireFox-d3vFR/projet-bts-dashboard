document.addEventListener('DOMContentLoaded', (event) => {
    const toggleThemeButton = document.getElementById('toggle-theme');
    const body = document.body;
    const navbar = document.querySelector('.navbar');
    const cards = document.querySelectorAll('.card');
    const titles = document.querySelectorAll('.main-title');
    const footer = document.querySelector('footer');
    const footerLinks = document.querySelectorAll('footer a');

    // Load the saved theme from localStorage
    const savedTheme = localStorage.getItem('theme');
    if (savedTheme && savedTheme === 'dark') {
        body.classList.add('dark-mode');
        navbar.classList.add('dark-mode');
        cards.forEach(card => card.classList.add('dark-mode'));
        titles.forEach(title => title.classList.add('dark-mode'));
        footer.classList.add('dark-mode');
        footerLinks.forEach(link => link.classList.add('dark-mode'));
        toggleThemeButton.textContent = 'Désactiver le mode sombre';
    }

    toggleThemeButton.addEventListener('click', () => {
        body.classList.toggle('dark-mode');
        navbar.classList.toggle('dark-mode');
        cards.forEach(card => card.classList.toggle('dark-mode'));
        titles.forEach(title => title.classList.toggle('dark-mode'));
        footer.classList.toggle('dark-mode');
        footerLinks.forEach(link => link.classList.toggle('dark-mode'));

        if (body.classList.contains('dark-mode')) {
            localStorage.setItem('theme', 'dark');
            toggleThemeButton.textContent = 'Désactiver le mode sombre';
        } else {
            localStorage.setItem('theme', 'light');
            toggleThemeButton.textContent = 'Activer le mode sombre';
        }
    });
});
