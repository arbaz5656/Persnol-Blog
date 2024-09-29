// scripts.js

// Auto-save feature for blog drafts
let autoSaveInterval = null;

function startAutoSave() {
    const form = document.getElementById('blogPostForm');
    
    if (!form) return;

    autoSaveInterval = setInterval(() => {
        const title = form.title.value;
        const content = form.content.value;

        // Example AJAX request to save the draft
        fetch('../controllers/save-draft.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ title, content })
        })
        .then(response => response.json())
        .then(data => {
            console.log('Draft saved:', data);
        })
        .catch(error => {
            console.error('Error saving draft:', error);
        });
    }, 30000); // Save every 30 seconds
}

// Stop auto-save on form submit
document.getElementById('blogPostForm').addEventListener('submit', () => {
    clearInterval(autoSaveInterval);
});

// Start the auto-save feature when the page loads
window.onload = startAutoSave;
