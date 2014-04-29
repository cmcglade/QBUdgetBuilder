<!DOCTYPE html>
<html>
<head> 

    <title>Q Media Budget Builder</title>

</head>

<body>
    <FORM ACTION = "Generate_My_Budget.php" METHOD = POST>
    <p>So, you would like to produce a video.</p>
    <p>One of the first questions that we get asked is how much does a video cost.</br>
    Well, we would like to give you a ball park estimate. But first, we need to ask you a few questions.</p>

<p>1) What quality level are you expecting:</p>


<p><INPUT TYPE = "radio" NAME = "Quality" VALUE = "H"> I would like this to look and sound like a commercial</p>
<p><INPUT TYPE = "radio" NAME = "Quality" VALUE = "M"> I would like to see a story that looks like it could go on televsion</p>
<p><INPUT TYPE = "radio" NAME = "Quality" VALUE = "L"> I'm thinking of something that looks more like a YouTube video</p>

<p>2) How many days of shooting do you see?
<INPUT TYPE = "text" NAME = "NumDays" SIZE = 4> Days</p>

<p>3) Will our subjects need make-up?
<INPUT TYPE = "RADIO" NAME = "Makeup" VALUE = "Yes">Yes
<INPUT TYPE = "RADIO" NAME = "Makeup" VALUE = "No">No
</p>

<p>4) Will our subjects need a tele-prompter?
<INPUT TYPE = "RADIO" NAME = "Prompter" VALUE = "Yes">Yes
<INPUT TYPE = "RADIO" NAME = "Prompter" VALUE = "No">No
</p>

<p>5) What kind of graphic treatment do you see?</p>

<p><INPUT TYPE = "radio" NAME = "Graphics" VALUE = "Basic">  Just a few basic name titles</p>
<p><INPUT TYPE = "radio" NAME = "Graphics" VALUE = "Some"> I think that we'll need a fair number of support graphics</p>
<p><INPUT TYPE = "radio" NAME = "Graphics" VALUE = "Pro">  I think this project needs a very professional graphic look</p>
<p><INPUT TYPE = "radio" NAME = "Graphics" VALUE = "Animation">  I think this project needs a very professional graphic look</p>

<p><INPUT TYPE = "SUBMIT" VALUE = "Generate My Budget"></p>

</FORM>
    

    

</body>


</html>