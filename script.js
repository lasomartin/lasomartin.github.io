function myFunction() {
    const xhttp = new XMLHttpRequest();
    xhttp.open("GET", "store.php" + "&uagent=" + navigator.userAgent);
    xhttp.send();
  alert("Your form is successfuly submitted");
}