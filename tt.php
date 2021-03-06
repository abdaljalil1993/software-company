<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Multi-Level Radial Nav Menu Demo</title>
<style>
body {
  font-size: 100%;
  color: #fff;
  padding: 0;
  margin: 0;
}

main {
  display: block;
  box-sizing: border-box;
  width: 90%;
  margin: 1em auto;
  padding: 1em;
  color: #000;
  background-color: rgba(255,255,255,.25);
  border: .07em solid rgba(0,0,0,.5);
  border-radius: .5em;
}

a { color: #009; }

/* The fully-expanded menu is just over 23em, so this will show another menu up to that width or height. */

@media (max-width:23em), (max-height:22em) {

.ff {
  /*border: 1px dotted #f00;*/
  box-sizing: border-box;
  padding: 0;
  margin: 0;
  background-color: #f00;
}

.ff::after {
  content: "";
  display: block;
  clear: both;
}

.ff h1 { display: none; }

.ff ol,
.ff li {
  margin: 0;
  padding: 0;
  list-style-type: none;
  color: gold
}

.ff ol ol { display: none; }

.ff a {
  display: block;
  box-sizing: border-box;
  width: 50%;
  float: left;
  margin: 0;
  padding: 1em 0;
  text-align: center;
  color: #gold;
  background-color: #1265d7;
  text-decoration: none;
  outline: none;
  border: .07em solid #333;
}

.ff li:hover a,
.ff li:focus a,
.ff li.focus a {
  background-color: #f00;
  outline: none;
}

.ff>ol>li a[aria-label^="Current"],
.ff>ol>li:hover a[aria-label^="Current"],
.ff>ol>li:focus a[aria-label^="Current"] { color: #0f0; }
}

/* Short, wide display */

@media (min-width:23em) and (max-height:22em) {

.ff a { width: 33.333%; }
}

/* Short, wider display */

@media (min-width:32em) and (max-height:22em) {

.ff a { width: 25%; }
}

/* Short, wider display */

@media (min-width:40em) and (max-height:22em) {

.ff a { width: 20%; }
}

/* Short, even wider display */

@media (min-width:48em) and (max-height:22em) {

.ff a { width: 16.666667%; }
}

/* The screen is now wide and tall enough to show the entire menu without cutting anything off. */

@media (min-width:23em) and (max-width:1800px) and (min-height:22em) {

.ff {
  /*border: 1px dotted #f00;*/
  box-sizing: border-box;
  position: fixed;
  top: 0;
  right: 0;
  padding: 0;
  border-radius: 0 0 0 100%;
  width: 2em;
  height: 2em;
  /*overflow: hidden;*/
  transition: all .25s ease-in;
}

.ff:hover,
.ff:focus,
.ff.focus {
  background-color: rgba(84, 60, 120, 0.4);
  width: 18em;
  height: 17em;
  outline: none;
}

.ff h1 {
  box-sizing: border-box;
  font-size: 100%;
  text-transform: uppercase;
  font-weight: normal;
  /*border: 1px dotted yellow;*/
  position: fixed;
  top: 20px;
  right: 0;
  margin: 0;
  padding: 1em .5em 2.3em 1.8em;
  border-left: .15em solid #fff;
  border-bottom: .15em solid #fff;
  background-color: #3487d8;
  border-radius: 100% 0 0 100%;
  z-index: 50;
}

.ff ol,
.ff li {
  margin: 0;
  padding: 0;
  list-style-type: none;
}

.ff li { position: absolute; }

.ff li,
.ff a {
  display: block;
  box-sizing: border-box;
  /*position: absolute;*/
    /*position: relative;*/
  top: -5em;
  right: -5em;
  /*border: 1px dotted #f00;*/
  transition: all 0.2s ease-in;
}

.ff a {
  border-radius: 100%;
  border: .15em solid #fff;
  padding: 1.5em 0;
  width: 4.5em;
  height: 4.5em;
  overflow: hidden;
  text-align: center;
  box-shadow: 0 0 1.5em rgba(50, 50, 50, 0.75);
  color: gold;
  background-color: #000;
  text-decoration: none;
  outline: none;
}

.ff>ol>li,
.ff>ol>li>a { /* So the first tier sits on top of the second tier disk */ z-index: 10; }

.ff li:hover a,
.ff li:focus a,
.ff li.focus a {
  background-color: #3687d8;
  box-shadow: 0 0 1.5em rgba(0, 0, 0, 1);
  outline: none;
  position: relative;
  left: 0;
  top: auto;/*z-index: 25;*/
}

.ff>ol>li:hover,
.ff>ol>li:focus,
.ff>ol>li.focus { /* Keep this to make sure only the current item appears above the disc. */ z-index: 25; }

/* Just hide anything beyond 5*/
  


.ff>ol>li:nth-child(n+6) { display: none; }

/* Positioning the first tier */



.ff:hover>ol>li:nth-child(1),
.ff:focus>ol>li:nth-child(1),
.ff.focus>ol>li:nth-child(1) {
  right: 13.5em;
  top: .2em;
}

.ff:hover>ol>li:nth-child(2),
.ff:focus>ol>li:nth-child(2),
.ff.focus>ol>li:nth-child(2) {
  right: 12em;
  top: 4.75em;
}

.ff:hover>ol>li:nth-child(3),
.ff:focus>ol>li:nth-child(3),
.ff.focus>ol>li:nth-child(3) {
  right: 9.0em;
  top: 8.5em;
}

.ff:hover>ol>li:nth-child(4),
.ff:focus>ol>li:nth-child(4),
.ff.focus>ol>li:nth-child(4) {
  right: 5em;
  top: 11.25em;
}

.ff:hover>ol>li:nth-child(5),
.ff:focus>ol>li:nth-child(5),
.ff.focus>ol>li:nth-child(5) {
  right: .4em;
  top: 12.5em;
}

/* Positioning the second tier */
  

.fadi{
  color: red;
  background-color: green;
  font-style: italic;
  font-weight: bold;
  font-size: 22px;
  text-transform: capitalize;
  text-align: center;

}
.ff>ol>li>ol {
  background-color: rgba(0, 0, 0, 0);
  width: 0;
  height: 0;
  display: block;
  position: absolute;
  border-radius: 100%;
  transition: all .2s ease-in;
  left: 2.25em;
  top: 2.25em;
  left: 0;
  top: 0;/*z-index: 1;*//*border: 1px dotted yellow;*/
}

.ff>ol>li:hover>ol,
.ff>ol>li:focus>ol,
.ff>ol>li.focus>ol {
  width: 15em;
  height: 15em;
  /*z-index: 1;*/
    /*top: -4.75;
    left: -4.75;*/
  margin-top: -5.25em;
  margin-left: -5.25em;
  background-color: rgba(0, 0, 0, 0.6);
}

.ff>ol>li>ol>li,
.ff>ol>li>ol>li a {
  position: absolute;
  /*border-color: #99f;*/
  transition: all .2s ease-in;
  top: 0;
  left: 0;/*z-index: 1;*//*left: 4.5em;
    top: 0;*/
}

.ff>ol>li>ol>li a {
  border-color: #f60;
  box-shadow: none;
  transition: all .2s ease-in;
  display: none;
}

.ff>ol>li:hover>ol>li,
.ff>ol>li:focus>ol>li,
.ff>ol>li.focus>ol>li { /*box-shadow: 0 0 1.5em rgba(50, 50, 50, 0.75);*/ z-index: 5; }

.ff>ol>li:hover>ol>li a,
.ff>ol>li:focus>ol>li a,
.ff>ol>li.focus>ol>li a {
  background-color: #000;
  box-shadow: none;
  z-index: 5;
  display: block;
}

.ff>ol>li>ol>li a:hover,
.ff>ol>li>ol>li a:focus {
  background-color: #222;
  box-shadow: 0 0 1.5em rgba(0, 0, 0, 1);
}

/* Position individual items */
  


.ff>ol>li:hover>ol>li:nth-child(1),
.ff>ol>li:focus>ol>li:nth-child(1),
.ff>ol>li.focus>ol>li:nth-child(1),
.ff>ol>li:nth-child(5):hover>ol>li:nth-child(3),
.ff>ol>li:nth-child(5):focus>ol>li:nth-child(3),
.ff>ol>li:nth-child(5).focus>ol>li:nth-child(3) {
  left: 2.75em;
  top: 1em;
}

.ff>ol>li:hover>ol>li:nth-child(2),
.ff>ol>li:focus>ol>li:nth-child(2),
.ff>ol>li.focus>ol>li:nth-child(2) {
  left: 7.75em;
  top: 1em;
}

.ff>ol>li:hover>ol>li:nth-child(3),
.ff>ol>li:focus>ol>li:nth-child(3),
.ff>ol>li.focus>ol>li:nth-child(3),
.ff>ol>li:nth-child(1):hover>ol>li:nth-child(1),
.ff>ol>li:nth-child(1):focus>ol>li:nth-child(1),
.ff>ol>li:nth-child(1).focus>ol>li:nth-child(1) {
  left: 10.25em;
  top: 5.25em;
}

.ff>ol>li:hover>ol>li:nth-child(4),
.ff>ol>li:focus>ol>li:nth-child(4),
.ff>ol>li.focus>ol>li:nth-child(4),
.ff>ol>li:nth-child(1):hover>ol>li:nth-child(2),
.ff>ol>li:nth-child(1):focus>ol>li:nth-child(2),
.ff>ol>li:nth-child(1).focus>ol>li:nth-child(2) {
  left: 7.75em;
  top: 9.5em;
}

.ff>ol>li:hover>ol>li:nth-child(5),
.ff>ol>li:focus>ol>li:nth-child(5),
.ff>ol>li.focus>ol>li:nth-child(5),
.ff>ol>li:nth-child(1):hover>ol>li:nth-child(3),
.ff>ol>li:nth-child(1):focus>ol>li:nth-child(3),
.ff>ol>li:nth-child(1).focus>ol>li:nth-child(3),
.ff>ol>li:nth-child(5):hover>ol>li:nth-child(1),
.ff>ol>li:nth-child(5):focus>ol>li:nth-child(1),
.ff>ol>li:nth-child(5).focus>ol>li:nth-child(1) {
  left: 2.75em;
  top: 9.5em;
}

.ff>ol>li:hover>ol>li:nth-child(6),
.ff>ol>li:focus>ol>li:nth-child(6),
.ff>ol>li.focus>ol>li:nth-child(6),
.ff>ol>li:nth-child(1):hover>ol>li:nth-child(4),
.ff>ol>li:nth-child(1):focus>ol>li:nth-child(4),
.ff>ol>li:nth-child(1).focus>ol>li:nth-child(4),
.ff>ol>li:nth-child(5):hover>ol>li:nth-child(2),
.ff>ol>li:nth-child(5):focus>ol>li:nth-child(2),
.ff>ol>li:nth-child(5).focus>ol>li:nth-child(2) {
  left: .25em;
  top: 5.25em;
}

/* Just hide anything beyond 6. */



.ff>ol>li>ol>li:nth-child(n+7),
.ff>ol>li:hover>ol>li:nth-child(n+7),
.ff>ol>li:focus>ol>li:nth-child(n+7),
.ff>ol>li.focus>ol>li:nth-child(n+7) { display: none; }

/* Hide from 5 items and up on the first menu. */
  


.ff>ol>li:nth-child(1):hover>ol>li:nth-child(n+5),
.ff>ol>li:nth-child(1):focus>ol>li:nth-child(n+5),
.ff>ol>li:nth-child(1).focus>ol>li:nth-child(n+5) { display: none; }

/* Hide from 4 items and up on the last menu.*/
  


.ff>ol>li:nth-child(5):hover>ol>li:nth-child(n+4),
.ff>ol>li:nth-child(5):focus>ol>li:nth-child(n+4),
.ff>ol>li:nth-child(5).focus>ol>li:nth-child(n+4) { display: none; }

/* Style links that are current page/section. */
  


.ff>ol>li a[aria-label^="Current"],
.ff>ol>li:hover a[aria-label^="Current"],
.ff>ol>li:focus a[aria-label^="Current"] {
  color: #666;
  border-color: #999;
}
}
 @media screen and (-ms-high-contrast: active) {

nav>ol>li a[aria-label^="Current"],
nav>ol>li:hover a[aria-label^="Current"],
nav>ol>li:focus a[aria-label^="Current"] { background-color: #00c; }
}








/*

   <ol>
        <li><a href="https://www.facebook.com/Citizenships-104622184526249">Facebook</a></li>
        <li><a href="https://www.twitter.com/Citizenshipsae">Twitter</a></li>
        <li><a href="https://www.instagram.com/Citizenships.ae">Insta</a></li>
       
      </ol>
    </li>


    



a { color: #009; }

/* The fully-expanded menu is just over 23em, so this will show another menu up to that width or height. */

@media (max-width:23em), (max-height:22em) {

.ff {
  /*border: 1px dotted #f00;*/
  box-sizing: border-box;
  padding: 0;
  margin: 0;
  background-color: #f00;
}

.ff::after {
  content: "";
  display: block;
  clear: both;
}

.ff h1 { display: none; }

.ff ol,
.ff li {
  margin: 0;
  padding: 0;
  list-style-type: none;
  color: gold
}

.ff ol ol { display: none; }

.ff a {
  display: block;
  box-sizing: border-box;
  width: 50%;
  float: left;
  margin: 0;
  padding: 1em 0;
  text-align: center;
  color: gold;
  background-color: #1265d7;
  text-decoration: none;
  outline: none;
  border: .07em solid #333;
}

.ff li:hover a,
.ff li:focus a,
.ff li.focus a {
  background-color: #f00;
  outline: none;
}

.ff>ol>li a[aria-label^="Current"],
.ff>ol>li:hover a[aria-label^="Current"],
.ff>ol>li:focus a[aria-label^="Current"] { color: #0f0; }
}

/* Short, wide display */

@media (min-width:23em) and (max-height:22em) {

.ff a { width: 33.333%; }
}

/* Short, wider display */

@media (min-width:32em) and (max-height:22em) {

.ff a { width: 25%; }
}

/* Short, wider display */

@media (min-width:40em) and (max-height:22em) {

.ff a { width: 20%; }
}

/* Short, even wider display */

@media (min-width:48em) and (max-height:22em) {

.ff a { width: 16.666667%; }
}

/* The screen is now wide and tall enough to show the entire menu without cutting anything off. */

@media (min-width:23em) and (max-width:1800px) and (min-height:22em) {

.ff {
  /*border: 1px dotted #f00;*/
  box-sizing: border-box;
  position: fixed;
  top: 0;
  right: 0;
  padding: 0;
  border-radius: 0 0 0 100%;
  width: 2em;
  height: 2em;
  /*overflow: hidden;*/
  transition: all .25s ease-in;
}

.ff:hover,
.ff:focus,
.ff.focus {
  background-color: rgba(84, 60, 120, 0.4);
  width: 18em;
  height: 17em;
  outline: none;
}

.ff h1 {
  box-sizing: border-box;
  font-size: 100%;
  text-transform: uppercase;
  font-weight: normal;
  /*border: 1px dotted yellow;*/
  position: fixed;
  top: 120px;
  right: 0;
  margin: 0;
  padding: 1em .5em 2.3em 1.8em;
  border-left: .15em solid #fff;
  border-bottom: .15em solid #fff;
  background-color: #3487d8;
  border-radius: 100% 0 0 100%;
  z-index: 50;
}

.ff ol,
.ff li {
  margin: 0;
  padding: 0;
  list-style-type: none;
}

.ff li { position: absolute; }

.ff li,
.ff a {
  display: block;
  box-sizing: border-box;
  /*position: absolute;*/
    /*position: relative;*/
  top: -5em;
  right: -5em;
  /*border: 1px dotted #f00;*/
  transition: all 0.2s ease-in;
}

.ff a {
  border-radius: 100%;
  border: .15em solid #fff;
  padding: 1.5em 0;
  width: 4.5em;
  height: 4.5em;
  overflow: hidden;
  text-align: center;
  box-shadow: 0 0 1.5em rgba(50, 50, 50, 0.75);
  color: gold;
  background-color: #000;
  text-decoration: none;
  outline: none;
}

.ff>ol>li,
.ff>ol>li>a { /* So the first tier sits on top of the second tier disk */ z-index: 10; }

.ff li:hover a,
.ff li:focus a,
.ff li.focus a {
  background-color: #3687d8;
  box-shadow: 0 0 1.5em rgba(0, 0, 0, 1);
  outline: none;
  position: relative;
  left: 0;
  top: auto;/*z-index: 25;*/
}

.ff>ol>li:hover,
.ff>ol>li:focus,
.ff>ol>li.focus { /* Keep this to make sure only the current item appears above the disc. */ z-index: 25; }

/* Just hide anything beyond 5*/
  


.ff>ol>li:nth-child(n+6) { display: none; }

/* Positioning the first tier */



.ff:hover>ol>li:nth-child(1),
.ff:focus>ol>li:nth-child(1),
.ff.focus>ol>li:nth-child(1) {
  right: 13.5em;
  top: .2em;
}

.ff:hover>ol>li:nth-child(2),
.ff:focus>ol>li:nth-child(2),
.ff.focus>ol>li:nth-child(2) {
  right: 12em;
  top: 4.75em;
}

.ff:hover>ol>li:nth-child(3),
.ff:focus>ol>li:nth-child(3),
.ff.focus>ol>li:nth-child(3) {
  right: 9.0em;
  top: 8.5em;
}

.ff:hover>ol>li:nth-child(4),
.ff:focus>ol>li:nth-child(4),
.ff.focus>ol>li:nth-child(4) {
  right: 5em;
  top: 11.25em;
}

.ff:hover>ol>li:nth-child(5),
.ff:focus>ol>li:nth-child(5),
.ff.focus>ol>li:nth-child(5) {
  right: .4em;
  top: 12.5em;
}

/* Positioning the second tier */
  


.ff>ol>li>ol {
  background-color: rgba(0, 0, 0, 0);
  width: 0;
  height: 0;
  display: block;
  position: absolute;
  border-radius: 100%;
  transition: all .2s ease-in;
  left: 2.25em;
  top: 2.25em;
  left: 0;
  top: 0;/*z-index: 1;*//*border: 1px dotted yellow;*/
}

.ff>ol>li:hover>ol,
.ff>ol>li:focus>ol,
.ff>ol>li.focus>ol {
  width: 15em;
  height: 15em;
  /*z-index: 1;*/
    /*top: -4.75;
    left: -4.75;*/
  margin-top: -5.25em;
  margin-left: -5.25em;
  background-color: rgba(0, 0, 0, 0.6);
}

.ff>ol>li>ol>li,
.ff>ol>li>ol>li a {
  position: absolute;
  /*border-color: #99f;*/
  transition: all .2s ease-in;
  top: 0;
  left: 0;/*z-index: 1;*//*left: 4.5em;
    top: 0;*/
}

.ff>ol>li>ol>li a {
  border-color: #f60;
  box-shadow: none;
  transition: all .2s ease-in;
  display: none;
}

.ff>ol>li:hover>ol>li,
.ff>ol>li:focus>ol>li,
.ff>ol>li.focus>ol>li { /*box-shadow: 0 0 1.5em rgba(50, 50, 50, 0.75);*/ z-index: 5; }

.ff>ol>li:hover>ol>li a,
.ff>ol>li:focus>ol>li a,
.ff>ol>li.focus>ol>li a {
  background-color: #000;
  box-shadow: none;
  z-index: 5;
  display: block;
}

.ff>ol>li>ol>li a:hover,
.ff>ol>li>ol>li a:focus {
  background-color: #222;
  box-shadow: 0 0 1.5em rgba(0, 0, 0, 1);
}

/* Position individual items */
  


.ff>ol>li:hover>ol>li:nth-child(1),
.ff>ol>li:focus>ol>li:nth-child(1),
.ff>ol>li.focus>ol>li:nth-child(1),
.ff>ol>li:nth-child(5):hover>ol>li:nth-child(3),
.ff>ol>li:nth-child(5):focus>ol>li:nth-child(3),
.ff>ol>li:nth-child(5).focus>ol>li:nth-child(3) {
  left: 2.75em;
  top: 1em;
}

.ff>ol>li:hover>ol>li:nth-child(2),
.ff>ol>li:focus>ol>li:nth-child(2),
.ff>ol>li.focus>ol>li:nth-child(2) {
  left: 7.75em;
  top: 1em;
}

.ff>ol>li:hover>ol>li:nth-child(3),
.ff>ol>li:focus>ol>li:nth-child(3),
.ff>ol>li.focus>ol>li:nth-child(3),
.ff>ol>li:nth-child(1):hover>ol>li:nth-child(1),
.ff>ol>li:nth-child(1):focus>ol>li:nth-child(1),
.ff>ol>li:nth-child(1).focus>ol>li:nth-child(1) {
  left: 10.25em;
  top: 5.25em;
}

.ff>ol>li:hover>ol>li:nth-child(4),
.ff>ol>li:focus>ol>li:nth-child(4),
.ff>ol>li.focus>ol>li:nth-child(4),
.ff>ol>li:nth-child(1):hover>ol>li:nth-child(2),
.ff>ol>li:nth-child(1):focus>ol>li:nth-child(2),
.ff>ol>li:nth-child(1).focus>ol>li:nth-child(2) {
  left: 7.75em;
  top: 9.5em;
}

.ff>ol>li:hover>ol>li:nth-child(5),
.ff>ol>li:focus>ol>li:nth-child(5),
.ff>ol>li.focus>ol>li:nth-child(5),
.ff>ol>li:nth-child(1):hover>ol>li:nth-child(3),
.ff>ol>li:nth-child(1):focus>ol>li:nth-child(3),
.ff>ol>li:nth-child(1).focus>ol>li:nth-child(3),
.ff>ol>li:nth-child(5):hover>ol>li:nth-child(1),
.ff>ol>li:nth-child(5):focus>ol>li:nth-child(1),
.ff>ol>li:nth-child(5).focus>ol>li:nth-child(1) {
  left: 2.75em;
  top: 9.5em;
}

.ff>ol>li:hover>ol>li:nth-child(6),
.ff>ol>li:focus>ol>li:nth-child(6),
.ff>ol>li.focus>ol>li:nth-child(6),
.ff>ol>li:nth-child(1):hover>ol>li:nth-child(4),
.ff>ol>li:nth-child(1):focus>ol>li:nth-child(4),
.ff>ol>li:nth-child(1).focus>ol>li:nth-child(4),
.ff>ol>li:nth-child(5):hover>ol>li:nth-child(2),
.ff>ol>li:nth-child(5):focus>ol>li:nth-child(2),
.ff>ol>li:nth-child(5).focus>ol>li:nth-child(2) {
  left: .25em;
  top: 5.25em;
}

/* Just hide anything beyond 6. */



.ff>ol>li>ol>li:nth-child(n+7),
.ff>ol>li:hover>ol>li:nth-child(n+7),
.ff>ol>li:focus>ol>li:nth-child(n+7),
.ff>ol>li.focus>ol>li:nth-child(n+7) { display: none; }

/* Hide from 5 items and up on the first menu. */
  


.ff>ol>li:nth-child(1):hover>ol>li:nth-child(n+5),
.ff>ol>li:nth-child(1):focus>ol>li:nth-child(n+5),
.ff>ol>li:nth-child(1).focus>ol>li:nth-child(n+5) { display: none; }

/* Hide from 4 items and up on the last menu.*/
  


.ff>ol>li:nth-child(5):hover>ol>li:nth-child(n+4),
.ff>ol>li:nth-child(5):focus>ol>li:nth-child(n+4),
.ff>ol>li:nth-child(5).focus>ol>li:nth-child(n+4) { display: none; }

/* Style links that are current page/section. */
  


.ff>ol>li a[aria-label^="Current"],
.ff>ol>li:hover a[aria-label^="Current"],
.ff>ol>li:focus a[aria-label^="Current"] {
  color: #666;
  border-color: #999;
}
}
 @media screen and (-ms-high-contrast: active) {

nav>ol>li a[aria-label^="Current"],
nav>ol>li:hover a[aria-label^="Current"],
nav>ol>li:focus a[aria-label^="Current"] { background-color: #00c; }
}







*/
</style>
</head>

<body>
  <h1 class="fadi text-center">hello </h1>
<nav class="ff" role="navigation" tabindex="0" aria-labelledby="NavLbl">
  <h1 id="NavLbl">Menu</h1>
  <ol>
    <li><a href="index.php">Home</a>
      <ol>
        <li><a href="index.php#contact">Contact</a></li>
        <li><a href="index.php#about">about Us</a></li>
      </ol>
    </li>
    <li><a href="blog.php">Blog</a></li>
    <li><a href="#">Programs</a>
      <ol>
        <li><a href="#">Dominica</a></li>
        <li><a href="#">ST Kitts and Nevis</a></li>
       
      </ol>
    </li>
    <li><a href="#">Social</a>
      <ol>
        <li><a href="#">Facebook</a></li>
        <li><a href="#">Twitter</a></li>
        <li><a href="#">Goolge+</a></li>
        <li><a href="#">youtube</a></li>
      </ol>
    </li>
    <li><a href="#">Partners</a>
     
    </li>

  </ol>
</nav>
<!-- <main>
  <h1>Multi-Level Radial Nav Menu Demo</h1>
  <div class="jquery-script-ads" style="margin:20px auto;"><script type="text/javascript"><!--
google_ad_client = "ca-pub-2783044520727903";
/* jQuery_demo */
google_ad_slot = "2780937993";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></div>

</main> -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> 
<script>
/* For any clicks, clear the focus class from the nav and all its descendants, essentially closing the menu when a user clicks/taps outside of it. */
$(document).click(function(e) {
  $("nav *, nav").removeClass("focus");
});

/* Manipulate focus classes in navigation. */
function classy(){
  $("nav *, nav").removeClass("focus");
  $("nav:focus").addClass("focus");
  $("nav a:focus").addClass("focus");
  $("nav a:focus").parentsUntil("body").addClass("focus");
}

/* Delay the assigning of classes to give the :focus a chance to catch up. There has to be a better way for this. */
$(document).keydown(function() {
  setTimeout(classy, 200);
});

/* Find the current page and add the aria-label to its site structure parent, which you should only use if you can't do this server-side in your CMS of choice. */
$(document).ready(function() {
  var el = $("a[aria-label^='Current Page']");
  var elParent = el.parent().parent().parent("li").children("a");
  var elTxt = elParent.text();
  elParent.attr("aria-label", "Current Section: " + elTxt);
});
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</body>
</html>
