const text = "This is a modified jumbotron that occupies the entire horizontal space of its parent.";

let index = 0;

function writeText(){
    document.getElementById("write-text").innerText = text.slice(0,index);

    index++;

    if(index > text.length){
        index = 0;
    }
}

setInterval(writeText, 100);