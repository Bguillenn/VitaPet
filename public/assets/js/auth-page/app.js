btnChange.addEventListener('click' , function(){
    const registerPane = document.getElementById("register-pane");
    const loginPane = document.getElementById("login-pane");
    const titleText = document.getElementById("change-title");
    const changePane = document.getElementById("change-pane");
    const centerPane = document.getElementById("center-pane");

    registerPane.classList.toggle("hide");
    loginPane.classList.toggle("hide");
    centerPane.classList.toggle("left-shadow");
    changePane.classList.toggle("right-pane");
    titleText.classList.toggle("right-title");
    toggleText();
});

