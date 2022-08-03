<table><tr><td> <em>Assignment: </em> IT202 Milestone1 Deliverable</td></tr>
<tr><td> <em>Student: </em> Robin Louis-Pierre(rl382)</td></tr>
<tr><td> <em>Generated: </em> 7/22/2022 8:45:11 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-451-M22/it202-milestone1-deliverable/grade/rl382" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone1 branch</li><li>Create a milestone1.md file in your Project folder</li><li>Git add/commit/push this empty file to Milestone1 (you'll need the link later)</li><li>Fill in the deliverable items<ol><li>For each feature, add a direct link (or links) to the expected file the implements the feature from Heroku Prod (I.e,&nbsp;<a href="https://mt85-prod.herokuapp.com/Project/register.php">https://mt85-prod.herokuapp.com/Project/register.php</a>)</li></ol></li><li>Ensure your images display correctly in the sample markdown at the bottom</li><li>Save the submission items</li><li>Copy/paste the markdown from the "Copy markdown to clipboard link" or via the download button</li><li>Paste the code into the milestone1.md file or overwrite the file</li><li>Git add/commit/push the md file to Milestone1</li><li>Double check the images load when viewing the markdown file (points will be lost for invalid/non-loading images)</li><li>Make a pull request from Milestone1 to dev and merge it (resolve any conflicts)<ol><li>Make sure everything looks ok on heroku dev</li></ol></li><li>Make a pull request from dev to prod (resolve any conflicts)<ol><li>Make sure everything looks ok on heroku prod</li></ol></li><li>Submit the direct link from github prod branch to the milestone1.md file (no other links will be accepted and will result in 0)</li></ol></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Feature: User will be able to register a new account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106459877/180109659-24b2dd10-b569-4245-8f24-ac72bebbea5b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Invalid email validation<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106459877/180109845-97ee1a26-41b9-41d1-948f-07d8a62a7220.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Invalid password validation <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106459877/180110178-2b61b304-6766-4b55-bd30-de325a41baf3.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Email is not available <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106459877/180110319-fa27b5a3-4dd9-4551-89ee-ee147a9dc34a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>User name is not available <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106459877/180110707-16aacaa4-62ef-4dad-888b-42b5a59708c9.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Form with valid data<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the Users table with data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106459877/180111287-a318783f-4c7d-465e-9dd1-67c82fa70f81.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Valid user from Task 1<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/HeyImRobin/IT-202-Summer/pull/6">https://github.com/HeyImRobin/IT-202-Summer/pull/6</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>In the picture provided above, the DB activity is coming from the&nbsp;001_create_table_users.sql. The<br>SQL table makes it so that I have access to create and store<br>a email and password for the website<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Feature: User will be able to login to their account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106459877/180161430-7b737e8f-055c-4000-91cc-10f0a8ba4047.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Password mismatch <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106459877/180161671-16a509b2-b984-47b3-8a03-11ecaca51aff.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Password mismatch proof<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106459877/180162683-3db2b998-914a-4a13-9db6-7d6c8013b42c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>New user registration <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of successful login</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106459877/180163076-adf04ec3-0e00-4afb-b2e5-9c3c84a248b5.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Successful login <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/HeyImRobin/IT-202-Summer/pull/22">https://github.com/HeyImRobin/IT-202-Summer/pull/22</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/HeyImRobin/IT-202-Summer/pull/20">https://github.com/HeyImRobin/IT-202-Summer/pull/20</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>By creating the navigation file and putting it in each page that you<br>want, it&#39;ll create a link for login, register, and log out. Here you<br>can click login and fill out the required forms to log in<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Feat: Users will be able to logout </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the successful logout message</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106459877/180166608-4a79ad57-cf4a-4037-bd99-3d96ccd3cbe7.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Successfully logged out<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the logged out user can't access a login-protected page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106459877/180167153-783b80cd-26ea-4a17-acac-01fe2cbbef0e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows that I can&#39;t access this area without logging in<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/HeyImRobin/IT-202-Summer/pull/22">https://github.com/HeyImRobin/IT-202-Summer/pull/22</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>Whenever the user is ready to logout they can hit the logout button<br>at the top. How this works is logout.php. The users will never see<br>it and will directly take back to the log in page with the<br>use of the header<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Feature: Basic Security Rules Implemented / Basic Roles Implemented </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the logged out user can't access a login-protected page (may be the same as similar request)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106459877/180167153-783b80cd-26ea-4a17-acac-01fe2cbbef0e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows that user can&#39;t access a login protected page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing a user without an appropriate role can't access the role-protected page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106459877/180173241-785ba6a5-59d2-4f27-a672-7ff0cca6fbc2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows that the user does not have access to a role protected page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the Roles table with valid data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106459877/180173896-37d6cb97-7a24-4ce2-9501-4065beaad4e8.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows the roles in the data <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a screenshot of the UserRoles table with valid data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106459877/180181688-f4052c26-8cbe-4b8f-980c-a4611fa3dd61.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>I am admin user 1<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add the related pull request(s) for these features</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/HeyImRobin/IT-202-Summer/pull/21">https://github.com/HeyImRobin/IT-202-Summer/pull/21</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/HeyImRobin/IT-202-Summer/pull/22">https://github.com/HeyImRobin/IT-202-Summer/pull/22</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Explain briefly how the process/code works for login-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>For the login-protected pages it makes it so that if you try to<br>go back even after logging out, it will prompt you with an alert<br>saying that you need to log back in. The reason is that the<br>session had already been destroyed once you hit the log out button. So<br>you&#39;re not able to go back to a session that&#39;s already been destroyed<br></p><br></td></tr>
<tr><td> <em>Sub-Task 7: </em> Explain briefly how the process/code works for role-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>By implementing the roles table, here I am able to set which roles<br>I want users who have registered to be. By entering in my user<br>id for the roles UserRoles table I am able to set myself as<br>an admin<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Feature: Site should have basic styles/theme applied; everything should be styled </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots to show examples of your site's styles/theme</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106459877/180183405-cf1c22fd-e422-42a6-938c-3f1bf6afb780.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows the navigation styled <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106459877/180348266-d29f1d18-7520-4277-8bde-75a8860f8ff4.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows the forms are styled <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106459877/180348443-6dd7f36f-6ba8-4f7d-a796-5098a945933f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>UI isn&#39;t hideous <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/HeyImRobin/IT-202-Summer/pull/20">https://github.com/HeyImRobin/IT-202-Summer/pull/20</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain your CSS at a high level</td></tr>
<tr><td> <em>Response:</em> <p>I played around with the colors until I found a color scheme that<br>I liked. As for the hideous shapes for the input boxes, I had<br>to change the border radius to 1% to transform it into a rectangle&nbsp;<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Feature: Any output messages/errors should be "user friendly" </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of some examples of errors/messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106459877/180161671-16a509b2-b984-47b3-8a03-11ecaca51aff.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows an error message to user <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106459877/180109659-24b2dd10-b569-4245-8f24-ac72bebbea5b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows user another error message <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a related pull request</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/HeyImRobin/IT-202-Summer/pull/9">https://github.com/HeyImRobin/IT-202-Summer/pull/9</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how you made messages user friendly</td></tr>
<tr><td> <em>Response:</em> <p>If the user was to incorrectly input something, the flash message would alert<br>them depending on what the error is and then direct them to what<br>they need to do.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> Feature: Users will be able to see their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106459877/180348266-d29f1d18-7520-4277-8bde-75a8860f8ff4.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows the user its profile <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/HeyImRobin/IT-202-Summer/pull/10">https://github.com/HeyImRobin/IT-202-Summer/pull/10</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Explain briefly how the process/code works (view only)</td></tr>
<tr><td> <em>Response:</em> <p>Through profile.php we created a page to let users change their name, email,<br>and or password which will then be changed in the database.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> Feature: User will be able to edit their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page validation messages and success messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106459877/180580547-d43cc130-35a4-46f2-a75e-16fbecc28935.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>User name validation message <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106459877/180580773-6f3e3924-58a9-4269-a62d-048e2d236ae3.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Password mismatch message <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add before and after screenshots of the Users table when a user edits their profile</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106459877/180576172-47440101-d884-4d14-afe6-badf4da48c7f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Email and username before update <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106459877/180580917-1589da0b-6def-4af1-a297-27a413fd59d7.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Proof that it updated <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106459877/180580971-85f0bcf9-5edd-40a4-85f1-2f89a233fa0b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Database proof<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/HeyImRobin/IT-202-Summer/pull/22 ">https://github.com/HeyImRobin/IT-202-Summer/pull/22 </a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works (edit only)</td></tr>
<tr><td> <em>Response:</em> <p>When going through the navigation and selecting profile, your current email and username<br>that&#39;s already saved will be there. By choosing to update it, it will<br>validate itself and save itself in the database<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 9: </em> Issues and Project Board </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106459877/180581890-0bd6c214-0d33-48e0-905e-4fdf413bfd86.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Issue #1<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106459877/180581938-9868dd42-3fec-4eb5-9154-8a35e3eca95b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Issue #2<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106459877/180582012-51ce2250-4897-4038-b6e3-36dcd6226a21.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Issue #3<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106459877/180582039-4688ce57-fcfa-45f8-84c8-7a59496903c5.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Issue #4 <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106459877/180582139-834823b3-f128-4e61-a666-1f0f81a61e0b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Issue #5<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106459877/180582180-234d778f-08cf-4d69-a878-ade02082daf4.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Issue #6<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106459877/180582230-5a2cdbab-fa36-40c9-bb5d-751bc0f64d8a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Issue #7<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106459877/180582279-683a6dcd-fa78-46e9-9791-0d549c502785.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Issue #8<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106459877/180582304-b8be97bc-99cd-45a4-8d72-f9dc339ec4b9.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Issue #9<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Include a direct link to your Project Board</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/HeyImRobin/IT-202-Summer/projects/1#card-83901300">https://github.com/HeyImRobin/IT-202-Summer/projects/1#card-83901300</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Prod Application Link to Login Page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://rl382-prod.herokuapp.com/Project/register.php">https://rl382-prod.herokuapp.com/Project/register.php</a> </td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-451-M22/it202-milestone1-deliverable/grade/rl382" target="_blank">Grading</a></td></tr></table>






