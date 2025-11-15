// Dashboard JavaScript

// Update time and date
function updateTime() {
    const now = new Date();
    const timeOptions = { hour: '2-digit', minute: '2-digit', hour12: true };
    const dateOptions = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
    
    const timeString = now.toLocaleTimeString('en-US', timeOptions);
    const dateString = now.toLocaleDateString('en-US', dateOptions);
    
    const timeElement = document.getElementById('current-time');
    const dateElement = document.getElementById('current-date');
    
    if (timeElement) timeElement.textContent = timeString;
    if (dateElement) dateElement.textContent = dateString;
}

// Update time every minute
updateTime();
setInterval(updateTime, 60000);

// Mobile sidebar toggle
const sidebar = document.querySelector('.dashboard-sidebar');
if (window.innerWidth <= 768) {
    // Add mobile menu toggle if needed
}

