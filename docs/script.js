document.addEventListener("DOMContentLoaded", function () {
    // Get query parameters from the URL
    const urlParams = new URLSearchParams(window.location.search);
    const subject = urlParams.get('subject');
    const professor = urlParams.get('professor');

    // Display subject and professor name dynamically
    if (subject && professor) {
        document.getElementById('subject-name').textContent = subject;
        document.getElementById('professor-name').textContent = professor;
    }

    // Request form handling
    document.getElementById('request-form').addEventListener('submit', function(event) {
        event.preventDefault();

        const subjectName = document.getElementById('subject-name').value;
        const professorName = document.getElementById('professor-name').value;

        if (subjectName && professorName) {
            alert(`Your request for subject: ${subjectName} and professor: ${professorName} has been submitted!`);
        }
    });
});
