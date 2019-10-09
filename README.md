# Loops, Arrays and Strings

The notes on <a href="https://github.com/CIT2318/loops-arrays-and-strings/blob/master/php-arrays-loops.md" target="_blank">Loops and Arrays in PHP</a> should help you complete the following exercises.

1. Open *basic_concepts.php*. Answer the questions in comments in this file.
2. Have a look at *film_form.html* and *display_films.php*. Write some PHP code so that when the user enters selects a film certificate and submits the form, the details for films that match the chosen certificate should be displayed.
3. Open *chk_form.php*. This a quiz where users have to select (multiple) correct answers from a list. Write some PHP code that will test the answers and tell the user if they have answered correctly. Here are some hints to help you:
   * The selected choices should be accessible as a PHP array (have a good look at the names of the checkboxes in chk_form.php). Try using a var_dump() or a foreach loop to display what the user has chosen.
   * If you can get this to work, you need to check if the user has answered correctly. This is probably a bit trickier than it first appears. There are a number of ways to do it e.g. sorting and then comparing the arrays using an if statement.
   * The correct answers are: Brazil, Uruguay, England and Argentina
