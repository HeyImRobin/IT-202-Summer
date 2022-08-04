<table><tr><td> <em>Assignment: </em> IT202 Milestone 2 Arcade Project</td></tr>
<tr><td> <em>Student: </em> Robin Louis-Pierre(rl382)</td></tr>
<tr><td> <em>Generated: </em> 8/2/2022 11:35:44 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-451-M22/it202-milestone-2-arcade-project/grade/rl382" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone2 branch</li><li>Create a new markdown file called milestone2.md</li><li>git add/commit/push immediate</li><li>Fill in the below deliverables</li><li>At the end copy the markdown and paste it into milestone2.md</li><li>Add/commit/push the changes to Milestone2</li><li>PR Milestone2 to dev and verify</li><li>PR dev to prod and verify</li><li>Checkout dev locally and pull changes to get ready for Milestone 3</li><li>Submit the direct link to this new milestone2.md file from your GitHub prod branch to Canvas</li></ol><p>Note: Ensure all images appear properly on github and everywhere else. Images are only accepted from dev or prod, not local host. All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod).</p></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Pick a game... </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> What game will you be doing?</td></tr>
<tr><td> <em>Response:</em> <p>I&#39;ll be doing the &quot;Collect the square&quot; game from the HTML 5 hw&nbsp;&nbsp;<br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Briefly describe it and its mechanics</td></tr>
<tr><td> <em>Response:</em> <p>Players will use the &quot;up&quot; &quot;down&quot; &quot;left&quot; &quot;right&quot; arrow keys to move their<br>square to collect the smaller square. The smaller square will also move away<br>from your square and it is transparent so it makes the game a<br>little more challenging&nbsp;<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot showing something of the game</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106459877/182456349-68e2b03a-b3d0-41d7-ab51-e25c5d2c18c0.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing the game<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/HeyImRobin/IT-202-Summer/pull/28">https://github.com/HeyImRobin/IT-202-Summer/pull/28</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://rl382-prod.herokuapp.com/Project/game.php">https://rl382-prod.herokuapp.com/Project/game.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Saving Score </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing a notice telling the user their score was saved</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106459877/182461706-3bb02433-e58e-4db2-893a-c30bd4958f13.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Telling the user that their score is saved<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of your scores table with some score entries</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106459877/182465880-83011597-2431-4ba9-8235-b41aa88d8e7a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows the scores from today<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106459877/182466254-ace2a4da-8797-4c12-a1d7-5d69798f16a2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows scores from this week <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly describe the code flow of saving a score from the game</td></tr>
<tr><td> <em>Response:</em> <div><span style="white-space: pre-wrap;"><b>Choice 1: Each received score should be a new entry (scores<br>will not be updated)</b></span></div><div><b>Would need to define a structure for my response first.<br>Get values using an se() function and check for my score. A function<br>that makes sure the user is logged in attempts to insert the data<br>into the score table and returns a response. Their score is now able<br>to be handled at this point. On the client side towards the end<br>of the game a post request is sent only one time to save<br>the score. From the server side of things towards the end of the<br>game, save_score file is imported and called once with important data. Then isolate<br>the data, a postData() function that triggers my XMLHttpRequest&nbsp;</b></div><div><span style="white-space: pre-wrap;"><b><br></b></span></div><div><span style="white-space: pre-wrap;"><b><br></b></span></div><div><br></div><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/HeyImRobin/IT-202-Summer/pull/31">https://github.com/HeyImRobin/IT-202-Summer/pull/31</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> User's last 10 scores </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the latest scores for the user from their profile page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106459877/182467709-8785a5ee-afbf-4db4-8f8d-8a8cf9e5e1e4.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>From the users profile page, it&#39;ll show their latest scores and best score<br><br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Briefly explain how the scores are being pulled and displayed</td></tr>
<tr><td> <em>Response:</em> <p>With the help of a file called score_helpers there are three functions get_top_10(),<br>get_latest_score(),get_best_score() that help display the score. One lets me pass the duration of<br>scores, another gets the user id&#39;s latest 10 scores, while the last function<br>gets their best score documented. A partial file is created for displaying the<br>results of multiple score lists so no repetitive table outputs.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/HeyImRobin/IT-202-Summer/pull/31">https://github.com/HeyImRobin/IT-202-Summer/pull/31</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://rl382-prod.herokuapp.com/Project/profile.php">https://rl382-prod.herokuapp.com/Project/profile.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Create function(s) for outputiting the 3 different scoreboard durations (weekly, monthly, lifetime) </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot (or screenshots) showing the function(s)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106459877/182518438-1c7df49e-4255-4ef0-b9bd-b5a10756a5fe.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows the code for the duration <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Explain the process of how the code works</td></tr>
<tr><td> <em>Response:</em> <p>There is a function called get_top_10 that will let me pass the duration<br>of the day, week, month, and lifetime. By using the DATE_SUB() to subtract<br>the duration from NOW().&nbsp;<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/HeyImRobin/IT-202-Summer/pull/31">https://github.com/HeyImRobin/IT-202-Summer/pull/31</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Home Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the scoreboads, the link to the game and description, and the proper heading</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106459877/182474389-361a46fb-fe06-43af-8e78-3f5955a2da2c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows daily score <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106459877/182474530-922fd7c9-f99b-4f23-a1a5-2f5f2e79fb32.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows weekly score <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106459877/182474715-47479821-7ed1-4753-acc0-f96d49f73fb1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows months score <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106459877/182474874-f2505a9f-acbb-4622-981e-31e02c1d29f6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Brief description of game<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106459877/182475132-8af63964-02f9-4ec7-8e56-146979dae751.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Clicking this will take you to the game<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106459877/182475263-900a406c-7abd-4185-8d7c-05f734208a12.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Also clicking the game button in the nav bar will take you to<br>the game<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Briefly explain how the different pieces are retrieved and shown to the user</td></tr>
<tr><td> <em>Response:</em> <p>I have two ways for having the user reach the game. From the<br>nav bar through &quot;Game&quot; and the other is on the home page where<br>if you click the button at the top it takes you to the<br>game from there. I have the high scores listed on the homepage. As<br>for the description for the game its listed on the game page, I<br>include that by using an h1 tag.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/HeyImRobin/IT-202-Summer/pull/31">https://github.com/HeyImRobin/IT-202-Summer/pull/31</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://rl382-prod.herokuapp.com/Project/profile.php">https://rl382-prod.herokuapp.com/Project/profile.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Misc </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed (Milestone2 issues)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106459877/182484115-3f12908b-6e7e-4221-92f8-e297da54ba9c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows that my issues are completed <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106459877/182484252-638a0deb-b40f-4885-98ce-022cc88a30a4.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Issue #2<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106459877/182484380-3688d1fc-55f8-498c-96a8-58ce9e64c305.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Issue #3<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106459877/182484483-c8620ee9-16fd-4cc3-8d52-be46c1331add.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Issue #4<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106459877/182485445-c8299fca-49c4-4ad1-8673-4a6f455dcc0b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Issue #5<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a link to your herok prod project's login page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://rl382-prod.herokuapp.com/Project/login.php">https://rl382-prod.herokuapp.com/Project/login.php</a> </td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-451-M22/it202-milestone-2-arcade-project/grade/rl382" target="_blank">Grading</a></td></tr></table>

fssdsdsf
