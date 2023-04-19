const rates = document.querySelectorAll('input[type="radio"][name="satisfaction_rating_form[score]"]');
const rateText = document.querySelector('.rate-text');

rates.forEach((radio) => {
    radio.addEventListener('change', () => {
        if (radio.checked) {
            if (radio.value == 1) {
                rateText.innerText = 'Très insatisfait 😒';
            } else if (radio.value == 2) {
                rateText.innerText = 'Insatisfait ☹️';
            } else if (radio.value == 3) {
                rateText.innerText = 'Neutre 😑';
            } else if (radio.value == 4) {
                rateText.innerText = 'Satisfait 😉';
            } else {
                rateText.innerText = 'Très satisfait 😍';
            }
        }
    });
})