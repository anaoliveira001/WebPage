// Description: This file contains the javascript code for the dark mode toggle button.

  const themeToggle = document.getElementById('theme-toggle');
  const body = document.body;

  themeToggle.addEventListener('click', () => {
    body.classList.toggle('dark-mode');
  });
