//Catching Variables from HTML
var answer1 = document.getElementById('ans1');
var arrow1 = document.getElementById('arrow1');
var text1 = document.getElementById('text1');

var answer2 = document.getElementById('ans2');
var arrow2 = document.getElementById('arrow2');
var text2 = document.getElementById('text2');

var answer3 = document.getElementById('ans3');
var arrow3 = document.getElementById('arrow3');
var text3 = document.getElementById('text3');

var answer4 = document.getElementById('ans4');
var arrow4 = document.getElementById('arrow4');
var text4 = document.getElementById('text4');

var answer5 = document.getElementById('ans5');
var arrow5 = document.getElementById('arrow5');
var text5 = document.getElementById('text5');

//Function for opening differents answer after clicking
function openAnswer(clicked_id){
    let answer = "answer"+clicked_id;
    let text = "text"+clicked_id;
    let arrow = "arrow"+clicked_id;

    if (answer == "answer1"){
        openAnswer1();
    }
    if (answer == "answer2"){
        openAnswer2();
    }
    if (answer == "answer3"){
        openAnswer3();
    }
    if (answer == "answer4"){
        openAnswer4();
    }
    if (answer == "answer5"){
        openAnswer5();
    }
}


//Function to open Answer1
function openAnswer1(){
    if (answer1.style.display != "block"){
        console.log("opening")
        resetAnswer();
        answer1.style.display = "block";
        text1.style.fontWeight = "700";
        arrow1.style.transform = "rotate(180deg)";
    }
    else {
        console.log("closing")
        answer1.style.display = "none";
        text1.style.fontWeight = "400";
        arrow1.style.transform = "rotate(0deg)";
    }
}

//Function to open Answer2
function openAnswer2(){
    if (answer2.style.display != "block"){
        console.log("opening")
        resetAnswer();
        answer2.style.display = "block";
        text2.style.fontWeight = "700";
        arrow2.style.transform = "rotate(180deg)";
    }
    else {
        console.log("closing")
        answer2.style.display = "none";
        text2.style.fontWeight = "400";
        arrow2.style.transform = "rotate(0deg)";
    }
}

//Function to open Answer3
function openAnswer3(){
    if (answer3.style.display != "block"){
        console.log("opening")
        resetAnswer();
        answer3.style.display = "block";
        text3.style.fontWeight = "700";
        arrow3.style.transform = "rotate(180deg)";
    }
    else {
        console.log("closing")
        answer3.style.display = "none";
        text3.style.fontWeight = "400";
        arrow3.style.transform = "rotate(0deg)";
    }
}

//Function to open Answer4
function openAnswer4(){
    if (answer4.style.display != "block"){
        console.log("opening")
        resetAnswer();
        answer4.style.display = "block";
        text4.style.fontWeight = "700";
        arrow4.style.transform = "rotate(180deg)";
    }
    else {
        console.log("closing")
        answer4.style.display = "none";
        text4.style.fontWeight = "400";
        arrow4.style.transform = "rotate(0deg)";
    }
}

//Function to open Answer5
function openAnswer5(){
    if (answer5.style.display != "block"){
        console.log("opening")
        resetAnswer();
        answer5.style.display = "block";
        text5.style.fontWeight = "700";
        arrow5.style.transform = "rotate(180deg)";
    }
    else {
        console.log("closing")
        answer5.style.display = "none";
        text5.style.fontWeight = "400";
        arrow5.style.transform = "rotate(0deg)";
    }
}


//Function to close all opened answers
function resetAnswer(){
    //Answer1
    answer1.style.display = "none";
    text1.style.fontWeight = "400";
    arrow1.style.transform = "rotate(0deg)";


    answer2.style.display = "none";
    text2.style.fontWeight = "400";
    arrow2.style.transform = "rotate(0deg)";


    answer3.style.display = "none";
    text3.style.fontWeight = "400";
    arrow3.style.transform = "rotate(0deg)";


    answer4.style.display = "none";
    text4.style.fontWeight = "400";
    arrow4.style.transform = "rotate(0deg)";


    answer5.style.display = "none";
    text5.style.fontWeight = "400";
    arrow5.style.transform = "rotate(0deg)";
}