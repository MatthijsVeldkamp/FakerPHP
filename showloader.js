document.addEventListener('DOMContentLoaded', function() {
    const loader = document.getElementById('loader');
    const button = document.getElementById('getallusers');
    const smallText = document.getElementById('smalltext');
    const loadText = document.getElementById('loadtext');
    const welcometext = document.getElementById('welcometext');

    if (!loader ||!button ||!smallText ||!loadText) {
        console.error('One or more required elements not found.');
        return;
    }

    const loadingSentences = [
        'Getting ready...',
        'We are doing something...',
        'Checking some stuff...',
        'Loading some data...',
        'Crunching some numbers...',
        'Making some coffee...',
        'Almost there...',
        'Just a few more seconds...',
    ];

    button.addEventListener('click', function() {
        button.classList.add('fadeout');
        welcometext.classList.add('fadeout');
        setTimeout(() => {
            button.style.display = 'none';
            welcometext.classList.add('DISABLED');
        }, 250);

        loader.classList.remove('DISABLED');

        setTimeout(() => {
            smallText.classList.remove('DISABLED');
        }, 1000);

        let currentIndex = 0;
        setInterval(function() {
            if (currentIndex < loadingSentences.length - 1) {
                // Start with display: block to allow fade-in animation
                // change the text
                loadText.classList.remove('fadein');
                loadText.classList.add('fadeout'); // Start fade-out
                loadText.style.display = 'block';
                setTimeout(() => {
                    // Hide after fade-out completes
                    loadText.classList.remove('fadeout');
                    loadText.classList.add('fadein'); // Start fade-in
                    loadText.innerText = loadingSentences[currentIndex];
                }, 250); // Match this timeout with your CSS transition duration
                currentIndex++;
            }
        }, 5000);
    });
});
