console.log("yep, still a form");

//hooks onto the event before document is ready
$(document).ready(function(){ //anonymous function (duh); it's a callback fn (so, ececuted in sequence they are called, not the sequence they're defined)
    document.querySelector("h2").innerHTML = "Who is the best  teacher ever (Johnny obviously)?";
});
//hooking onto the event usinig document.ready allows us to execute multiple files 
//winow.onload == primitive; would execute, say, only the last/first loaded doc (it'll keep overriding itself)

//callback fn are basically compositions of functions
//in JS, everything is an Object;
//eg: class for the object number = Number 
//(Number Object is not the primitive datatype number, but rather the Object class called Number)