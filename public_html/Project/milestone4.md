<table><tr><td> <em>Assignment: </em> IT202 Milestone 4 Arcade Project</td></tr>
<tr><td> <em>Student: </em> Robin Louis-Pierre(rl382)</td></tr>
<tr><td> <em>Generated: </em> 8/8/2022 11:17:50 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-451-M22/it202-milestone-4-arcade-project/grade/rl382" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone4 branch</li><li>Create a new markdown file called milestone4.md</li><li>git add/commit/push immediate</li><li>Fill in the below deliverables</li><li>At the end copy the markdown and paste it into milestone4.md</li><li>Add/commit/push the changes to Milestone4</li><li>PR Milestone4 to dev and verify</li><li>PR dev to prod and verify</li><li>Checkout dev locally and pull changes</li><li>Submit the direct link to this new milestone4.md file from your GitHub prod branch to Canvas</li></ol><p>Note: Ensure all images appear properly on GitHub and everywhere else. Images are only accepted from dev or prod, not localhost. All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod).</p></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> User can set their profile to public or private </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of new column on the Users table</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106459877/183534073-5c94a1f1-f109-4131-a2c0-8efdada70b2a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows new column for visibility<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot of updated profile edit view</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106459877/183534877-5d190cea-7620-4b78-b477-ca1d231fa5d6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows new updated profile view<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshot of profile view view (ensure email isn't shown publicly)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106459877/183535173-c4708e5f-a00b-4b8e-a337-a69681cca328.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows user is private<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request(s) links</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/HeyImRobin/IT-202-Summer/pull/65">https://github.com/HeyImRobin/IT-202-Summer/pull/65</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add direct link to a public profile from heroku</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://rl382-dev.herokuapp.com/Project/profile.php">https://rl382-dev.herokuapp.com/Project/profile.php</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Briefly explain the logic behind how public/private profile works</td></tr>
<tr><td> <em>Response:</em> <p>Through profile.php we get the $user_id from the $_GET variable and use get_user_id()<br>to pass the id. Then if discovered user_id matches our user_id and sweet<br>a variable $isMe. The a variable $isEdit is set to determine if the<br>profile is getting edited or not. We have a save condition that adds<br>a check for $isMe and $edit. Visibility is next up and to get<br>that we get the value from $_POST from the form. We fetch the<br>username, created, and visibility fro, the users table. We add a toggle button<br>between edit and view for the profile.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Anywhere a username is display should link to the user's profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of the home page scoreboards with the proper links</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106459877/183535414-867c5e2f-2416-45a4-8378-fd38aa61833f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows each user profile has a link<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/HeyImRobin/IT-202-Summer/pull/65">https://github.com/HeyImRobin/IT-202-Summer/pull/65</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add links to the related pages on heroku</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://rl382-dev.herokuapp.com/Project/home.php">https://rl382-dev.herokuapp.com/Project/home.php</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Briefly explain the logic behind generating this view</td></tr>
<tr><td> <em>Response:</em> <p>Through a php file called profile_link.php. The file uses the $username and $user_id<br>and generates a link to the profile page. Both the $username and $user_id<br>will then treat the usernames as a link to their perspective profile<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Viewing an Active or Expired competition should show a related top 10 scoreboard </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/ff0000/000000?text=Incomplete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot showing competition scoreboards</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add related pull request(s)</td></tr>
<tr><td>Not provided</td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a link to an active or expired competition</td></tr>
<tr><td>Not provided</td></tr>
<tr><td> <em>Sub-Task 4: </em> Briefly explain the code process/flow</td></tr>
<tr><td> <em>Response:</em> <p>(missing)</p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> User will be able to see their competition history (active and expired) </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/ff0000/000000?text=Incomplete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of competition history view</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add related pull request(s)</td></tr>
<tr><td>Not provided</td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a link to the related page on heroku</td></tr>
<tr><td>Not provided</td></tr>
<tr><td> <em>Sub-Task 4: </em> Briefly explain the logic behind generating this view</td></tr>
<tr><td> <em>Response:</em> <p>(missing)</p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Add pagination to the Active Competitions view </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/ff0000/000000?text=Incomplete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the active competitions</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add related pull request(s)</td></tr>
<tr><td>Not provided</td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a link to the Active Competitions page</td></tr>
<tr><td>Not provided</td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> User's score history will include pagination </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/ff0000/000000?text=Incomplete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the user's scores</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add related pull request(s)</td></tr>
<tr><td>Not provided</td></tr>
<tr><td> <em>Sub-Task 3: </em> Add url to user profile (might want to use a public profile)</td></tr>
<tr><td>Not provided</td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> User with the role of admin can edit non-paid out competitions </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/ff0000/000000?text=Incomplete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot showing the list of competitions the admin can view along with the link to edit it</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the competition edit form</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshot showing related message of not being able to edit a competition that's been paid out</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add before and after screenshots of an edited competition (db view)</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add related pull request(s)</td></tr>
<tr><td>Not provided</td></tr>
<tr><td> <em>Sub-Task 6: </em> Add link to the admin list page and a link to the edit competition edit page</td></tr>
<tr><td>Not provided</td></tr>
<tr><td> <em>Sub-Task 7: </em> Briefly explain the code process/flow</td></tr>
<tr><td> <em>Response:</em> <p>(missing)</p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> Game should be fully implemented </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/f2c037/000000?text=Partial"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of the message showing a score can't be generated when logged in</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the game in progress</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106459877/183555094-70627b7e-6096-47e7-bdc8-c0437a754705.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows game in progress<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the message showing score was saved if logged in (was recorded in milestone2)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106459877/183555217-298dad14-bccc-4b18-b77a-c7b72c0a6f1c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows score was saved<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add link to home page with high score lists</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://rl382-dev.herokuapp.com/Project/home.php">https://rl382-dev.herokuapp.com/Project/home.php</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/HeyImRobin/IT-202-Summer/pull/29">https://github.com/HeyImRobin/IT-202-Summer/pull/29</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Briefly explain the logic used for showing the related messages</td></tr>
<tr><td> <em>Response:</em> <p>Message goes through a check system to see if the user is logged<br>in. If the user is logged in it&#39;ll be prompt with the correct<br>message for the user being logged in&nbsp;<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 9: </em> Misc </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed (Milestone4 issues)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106459877/183555713-30922b99-99c9-427f-8809-0fdad1151583.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing issue<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106459877/183555732-04125830-86d2-4bcc-9bbe-3e81ce909fb7.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing issue<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106459877/183555761-f08db6c9-6119-43c9-b07c-bd9db34a1235.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing issue<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106459877/183555778-50c17bbe-8581-423c-82d5-8b756158a42f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing issue<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106459877/183555877-db3f6bf8-896f-4a9a-800a-68d67210e67a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing issue<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106459877/183555939-1f9d6a51-88b3-4c3d-8e40-a09c5b477b41.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing issue<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106459877/183556010-a381112d-e393-4c0d-b418-ece97dabb0d2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing issue<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-451-M22/it202-milestone-4-arcade-project/grade/rl382" target="_blank">Grading</a></td></tr></table>

