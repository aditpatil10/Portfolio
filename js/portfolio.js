$(document).ready(function() {
  /* function called when you click of the button */
  $("nav button").click(function() {
    /* this if else to change the text in the button */
    if ($("nav button").text() == "☰") {
      $("nav button").text("🞬");
    } else {
      $("nav button").text("☰");
    }

    /* this function toggle the visibility of our "li" elements */
    $("li").toggle("slow");
  });
});
