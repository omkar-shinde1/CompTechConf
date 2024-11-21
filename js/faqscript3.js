// Select all questions
const questions = document.querySelectorAll('.question');

// Add click event listener to each question
questions.forEach(question => {
    question.addEventListener('click', () => {
        const parent = question.parentElement;
        const icon = question.querySelector('.icon-toggle');

        // Close all other questions
        questions.forEach(otherQuestion => {
            const otherParent = otherQuestion.parentElement;
            const otherIcon = otherQuestion.querySelector('.icon-toggle');
            
            if (otherParent !== parent) {
                otherParent.classList.remove('active');
                otherIcon.classList.remove('fa-minus');
                otherIcon.classList.add('fa-plus');
                otherIcon.style.color = "#878D97";
                otherParent.querySelector('.answer').style.display = 'none';
            }
        });

        // Toggle the current question's answer visibility
        parent.classList.toggle('active');

        // Change the icon between 'fa-plus' and 'fa-minus' based on the answer's visibility
        if (parent.classList.contains('active')) {
            icon.classList.remove('fa-plus');
            icon.classList.add('fa-minus');
            icon.style.color = "#878D97"; // Change color for the minus icon
            parent.querySelector('.answer').style.display = 'block'; // Show the answer
        } else {
            icon.classList.remove('fa-minus');
            icon.classList.add('fa-plus');
            icon.style.color = "#878D97"; // Revert back to the original color for plus icon
            parent.querySelector('.answer').style.display = 'none'; // Hide the answer
        }
    });
});
