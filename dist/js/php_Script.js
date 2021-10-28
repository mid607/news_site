/////admin part

var signAdmin = document.getElementById("admin-text");

var singBtn = document.querySelector("admin-btn");


singBtn.onclick(function () {

    this.classList.add('active');
    signAdmin.classList.add('active');

    document.write(" Name is wrong refresh page to try agian");

});