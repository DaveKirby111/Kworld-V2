function blogp() {

let hdr = "";

let post = "";

const header = [

    "resident evil 4 remake",

    "skyrim",

    "witcher remake",

    "henry cavill",

    "final fantasy 13"

];

const posts = [

    "Capcom is reportedly adding in-game purchases to the RE4 remake. Yeah, I don't see this going over well.",

    "Skyrim is such a shallow, dumbed down experience. So why do I continue to play it? Don't know.",

    "CD Project Red is remaking the first Witcher game. Looking forward to that.",

    "Henry Cavill is returning to the DC movies. Maybe he will get to play Superman this time.",

    "Final Fantasy XIII is heavily criticised by fans but I really like the game despite it's flaws."

];

posts.forEach(myFunction);

document.getElementsByClassName("post-text").innerHTML = post;

function myFunction(item) {
    post += item + "<br>"; 
  }

}