//var video = {
// "Video": [
//     "https://www.youtube.com/embed/HuFuTbAxw9o",
//     "https://www.youtube.com/embed/XweA9gU-gqo",

// ]

//}

function d() {
  function replace1() {
    if (document.getElementById("NB_video2").value == "") {
      alert("entrer une url");
    } else {
      var str1 = document.getElementById("NB_video2").value;
      var newstr1 = str1.replace("https://www.youtube.com/watch?v=", "/");
      console.log(newstr1);
      return newstr1;
    }
  }

  // Parse any JSON previously stored in allEntries
  var existingEntries = JSON.parse(localStorage.getItem("allEntries"));
  if (existingEntries == null) existingEntries = [];
  var entryTitle = document.getElementById("NB_video").value;
  var entryText = replace1();
  var entry = {
    title: entryTitle,
    video: entryText,
  };
  localStorage.setItem("base", JSON.stringify(entry));
  // Save allEntries back to local storage
  existingEntries.push(entry);

  localStorage.setItem("allEntries", JSON.stringify(existingEntries));
  var x = localStorage.getItem("allEntries");
  console.log(localStorage.getItem("allEntries"));

  let c = " ";

  c =
    "https:www.youtube.com/embed" +
    existingEntries[entryTitle].video +
    "?autoplay=1";
  console.log(c);
  document.getElementById("vid").src = c;
  c.appendChild(document.createElement(base));
  return c;
}

function effacer_video() {
 
}
