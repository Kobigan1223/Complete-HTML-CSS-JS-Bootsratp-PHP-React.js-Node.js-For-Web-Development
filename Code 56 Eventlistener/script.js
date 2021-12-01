//function sayHello() {
//  var name = getElementById("name").value;
//  var message = "Hey" + name + "!";
//
//  document.getElementById("content").textContent = message;
//
//  if (name === "student") {
//    var title = document.querySelector("#title").textContent;
//    title += "& Lovin' it";
//    document.querySelector("#title").textContent = title;
//  }
//}
function sayHello() {
  this.textContent = "Said it";
  var name = document.getElementById("name").value;
  var message = "<h2>Hello " + name + "!</h2>";

  // document
  //   .getElementById("content")
  //   .textContent = message;

  document.getElementById("content").innerHTML = message;

  if (name === "student") {
    var title = document.querySelector("#title").textContent;
    title += " & Lovin' it!";
    document.querySelector("h1").textContent = title;
  } else {
    var title = document.querySelector("#title").textContent;
    title += " " + name.toUpperCase();
    document.querySelector("h1").textContent = title;
  }
}

document.querySelector("button").addEventListener("click", sayHello);
