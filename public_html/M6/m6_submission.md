<table><tr><td> <em>Assignment: </em> HW HTML5 Canvas Game</td></tr>
<tr><td> <em>Student: </em> Robin Louis-Pierre(rl382)</td></tr>
<tr><td> <em>Generated: </em> 7/23/2022 11:21:03 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-451-M22/hw-html5-canvas-game/grade/rl382" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Create a branch for this assignment called&nbsp;<em>M6-HTML5-Canvas</em></li><li>Pick a base HTML5 game from&nbsp;<a href="https://bencentra.com/2017-07-11-basic-html5-canvas-games.html">https://bencentra.com/2017-07-11-basic-html5-canvas-games.html</a></li><li>Create a folder inside public_html called&nbsp;<em>M6</em></li><li>Create an html5.html file in your M6 folder (do not put it in Project even if you're doing arcade)</li><li>Copy one of the base games (from the above link)</li><li>Add/Commit the baseline of the game you'll mod for this assignment&nbsp;<em>(Do this before you start any mods/changes)</em></li><li>Make two significant changes<ol><li>Static changes like hard-coded colors/values will not count at all (i.e., changing shapes/colors/values that are globally defined and set only once.</li><li>Direct copies of my class example changes will not be accepted (i.e., just having an AI player for pong, rotating canvas, or multi-ball unless you make a significant tweak to it)</li><li>Significant changes are things that change with game logic or modify how the game works. Static changes like hard-coded colors/values will not count at all (i.e., changing shapes/colors/values that are globally defined and set only once). You may however change such values through game logic during runtime. (i.e., when points are scored, boundaries are hit, some action occurs, etc)</li></ol></li><li>Evidence/Screenshots<ol><li>As best as you can, gather evidence for your first significant change and fill in the deliverable items below.</li><li>As best as you can, gather evidence for your significant change and fill in the deliverable items below.</li><li>Remember to include your ucid/date as comments in any screenshots that have code</li><li>Ensure your screenshots load and are visible from the md file in step 9</li></ol></li><li>In the M6 folder create a new file called m6_submission.md</li><li>Save your below responses, generate the markdown, and paste the output to this file</li><li>Add/commit/push all related files as necessary</li><li>Merge your pull request once you're satisfied with the .md file and the canvas game mods</li><li>Create a new pull request from dev to prod and merge it</li><li>Locally checkout dev and pull the merged changes from step 12</li></ol><p>Each missed or failed to follow instruction is eligible for -0.25 from the final grade</p></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Game Info </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/f2c037/000000?text=Partial"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> What game did you pick to edit/modify?</td></tr>
<tr><td> <em>Response:</em> <p>I picked the &quot;Collect the square&quot; game<br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the direct link to the html5.html file from Heroku Prod (i.e., https://mt85-prod.herokuapp.com/M6/html5.html)</td></tr>
<tr><td>Not provided</td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the pull request link for this assignment from M6-HTML5-Canvas to dev</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/HeyImRobin/IT-202-Summer/pull/28">https://github.com/HeyImRobin/IT-202-Summer/pull/28</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Significant Change #1 </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Describe your change/modification</td></tr>
<tr><td> <em>Response:</em> <p>I made it to where the target square would also move when the<br>red square moves so you have to kind of chase it instead of<br>it being in one spot.&nbsp;<br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Screenshot of the change while playing (try your best as some changes may be nearly impossible to capture)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106459877/180629953-4c39375a-c940-4bf6-a0ad-1eb87efe1257.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>In this picture the square and target square had just been drawn<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106459877/180630028-cb078fac-5fd4-4e4e-822f-9ea3c53e7de0.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>As the square starts to move the target square starts to move away<br>from it, also the transparency makes it difficult to see giving the game<br>a challenge<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106459877/180629967-ca7eac6a-fd4b-478b-9a80-36197a0322be.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Here you see that you still get points and the target square still<br>appears somewhere randomly <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Screenshot of the relevant lines of code that implement your change (make sure your ucid and the date are shown in comments) In the caption briefly describe/explain how the code snippet works.</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106459877/180630131-bfd417c1-9ca5-4fda-807a-1fa49c8e0172.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>I used the variables for the target squares x and y and divided<br>it by the original speed to make it so that its possible for<br>the user to catch it<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106459877/180630146-34df528a-e0e0-4d3b-9275-a523ae0ed4c0.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This makes it so that the target square won&#39;t go out of bounds<br><br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Significant Change #2 </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Describe your change/modification</td></tr>
<tr><td> <em>Response:</em> <p>And to make it more difficult, I made the target square transparent so<br>its more difficult to see<br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Screenshot of the change while playing (try your best as some changes may be nearly impossible to capture)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106459877/180629953-4c39375a-c940-4bf6-a0ad-1eb87efe1257.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The target square is transparent now <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Screenshot of the relevant lines of code that implement your change (make sure your ucid and the date are shown in comments) In the caption briefly describe/explain how the code snippet works.</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106459877/180630180-71c118f0-1fdb-4f24-9b35-e8a66cc8ea97.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>With context.fillStyle it sets or returns the color, gradient, or pattern. I changed<br>&quot;a&quot; (Alpha) to make it transparent. At 1 you are clearly able to<br>see it, at 0.04 you&#39;re barely able see it. Any lower would of<br>made it very difficult to see<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Discuss </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Talk about what you learned during this assignment and the related HTML5 Canvas readings (at least a few sentences for full credit)</td></tr>
<tr><td> <em>Response:</em> <p>I learned the structure of how to make a basic game incorporating javascript<br>and HTML. At first, I was completely lost because when I copy and<br>pasted the code it wasn&#39;t working until I had added the script tag<br>and HTML header.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-451-M22/hw-html5-canvas-game/grade/rl382" target="_blank">Grading</a></td></tr></table>


