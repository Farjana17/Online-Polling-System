
function change(el)
{
  if (el.value === "Dark Mode")
  {
    el.value="Light Mode";
    var element = document.body;
    element.classList.toggle("dark-mode");
  }
  else
  {
    el.value= "Dark Mode";
    var element = document.body;
    element.classList.toggle("dark-mode");

  }
}
