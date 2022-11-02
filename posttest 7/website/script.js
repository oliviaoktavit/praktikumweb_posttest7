function myFunctionFace(){
    alert("Ini Adalah Face");
}
function myFunctionEyes(){
    alert("Ini Adalah Eyes");
}
function myFunctionLips(){
    alert("Ini Adalah Lips");
}

var header = document.getElementById("headerLogo");
header.addEventListener("mouseenter", function(){
    header.style.color = "white"
});

header.addEventListener("mouseleave", function(){
    header.style.color = ["#ffa8a8"]
});

var hdcategory = document.getElementById("hdcategory");
hdcategory.addEventListener("mouseenter", function(){
    hdcategory.style.color = "black"
});
hdcategory.addEventListener("mouseleave", function(){
    hdcategory.style.color = ["#ffa8a8"]
});