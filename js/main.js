// Dom elements

const time = document.getElementById('time'),
    greeting =document.getElementById('greeting'),
    name =document.getElementById('name'),
    focus =document.getElementById('focus');

// Options    
const showAmPm = true;

function showTime() {
    let today = new Date(),
    hour = today.getHours(),
    min = today.getMinutes(),
    sec = today.getSeconds();

    // Set am or pm
    const amPm = hour >= 12 ? 'PM' : 'AM';

    // 12hr format
    hour = hour % 12 || 12;
    
    // Output Time
    time.innerHTML = `${hour}<span>:</span>${addZero(min)}<span>:</span>${addZero(sec)} ${showAmPm ? amPm : ''}` ;

    setTimeout(showTime, 1000);
}

function addZero(n) {
    return (parseInt(n, 10) < 10 ? '0' : '') + n; // ternary operator used 
}

// Set background and Greetings 
function setBgGreet() {
    let today = new Date(),
    hour = today.getHours();

    if(hour < 12) {
        // Morning 
        document.body.style.backgroundImage = "url('../img/morning.jpg')";
        document.body.style.backgroundSize = 'cover';
        document.body.style.color = 'white';
        greeting.textContent = 'Good Morning';
    }else if(hour < 18) {
        // Afternoon 
        document.body.style.backgroundImage = "url('../img/afternoon.jpg')";
        document.body.style.backgroundSize = 'cover';
        document.body.style.color = 'white';
        greeting.textContent = 'Good Afternoon';
    }else {
        // Evening 
        document.body.style.backgroundImage = "url('../img/evening.jpg')";
        document.body.style.backgroundSize = 'cover';
        document.body.style.color = 'white';
        greeting.textContent = 'Good Evening';
    }
}

// Get name by local storage
function getName() {
    if(localStorage.getItem('name') === null) {
        name.textContent = '[Enter Name]';
    } else {
        name.textContent = localStorage.getItem('name');
    }
}

// Set Name
function setName(e) {
    if(e.type === 'keypress') {
        // Make sure enter is pressed
        if(e.which == 13 || e.keyCode == 13) {
            localStorage.setItem('name', e.target.innerText);
            name.blur();
        }
    } else {
        localStorage.setItem('name', e.target.innerText);
    }
}

// Set Focus
function setFocus(e) {
    if(e.type === 'keypress') {
        // Make sure enter is pressed
        if(e.which == 13 || e.keyCode == 13) {
            localStorage.setItem('focus', e.target.innerText);
            focus.blur();
        }
    } else {
        localStorage.setItem('focus', e.target.innerText);
    }
}


// Get focus
function getFocus() {
    if(localStorage.getItem('focus') === null) {
        focus.textContent = '[Enter focus]';
    } else {
        focus.textContent = localStorage.getItem('focus');
    }
}

// add event listener on key press so that we could save the name and focus 
name.addEventListener('keypress', setName);
name.addEventListener('blur', setName);
focus.addEventListener('keypress', setFocus);
focus.addEventListener('blur', setFocus);

// Run 
showTime();
setBgGreet();
getName();
getFocus();