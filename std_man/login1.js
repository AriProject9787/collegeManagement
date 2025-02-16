
// close icon for pop up window
const closeIcon = document.querySelector(".closeIcon");
//logi,register link swith
const l1 = document.querySelector(".l1");
const l2 = document.querySelector(".l2");
const loginlink = document.querySelector(".loginlink");
const registerlink = document.querySelector(".registerlink");
//login,register chat base plase wrapper
const wrapper = document.querySelector(".wrapper");
//chat popup place
//chat button onclick event

function demo() {
    wrapper.classList.add('active-popup');
    
}
window.onload = demo;


//login register popup place
//register link onclick event switch between login page to register page
l1.addEventListener('click', () => {
    wrapper.classList.add('active-popup');

    wrapper.classList.remove('active');

});
l2.addEventListener('click', () => {
    wrapper.classList.add('active-popup');

    wrapper.classList.add('active');

});

registerlink.addEventListener('click', () => {
    wrapper.classList.add('active');

});
//login link onclick event switch between register page to login page
loginlink.addEventListener('click', () => {
    wrapper.classList.remove('active');

});
//close icon onclick remove popup window
closeIcon.addEventListener('click', () => {
    wrapper.classList.remove('active-popup');
    

});


