
# Spider_webdev_task3

Hello,

This is Srinath from ICE Department.
Roll no. 110114084

I have used laravel framework v4.2 for this project.I chose laravel as I thought managing web pages would be easy and effective using an MVC.Basically,I have made 11 view pages,
3 models and 4(including base) controllers in this project.

#Models :
 i)User

              For the user details.
        
		ii)Filter
		
		      This model is to map the questions(id) which has already been answered by a particular user to his/her user id to avoid displaying those questions again.
	 
	 iii)Question
	   
	          For the questions.

#Controllers : 
           
		   AnswerController is for evaluating and displaying answers,QuestController deals with creating and displaying the questions applying the appropriate filter.
           
		   UserController is used for login,sign up and other operations related to the user model.

#SERVER ROUTES :

'/home' - The homepage.

'/login' - This is used for checking the user has already an account and is ready to login to the quiz page.

'/' - This is used for the registration purposes in the website.

'/questions/create' - This enables the user to post a question.

'/questions/all' - All Questions page for logged in users.

'/questions/sports'

'/questions/nature'

'/questions/general'

'/questions/science'

'/questions/easy'

'/questions/moderate'

'/questions/difficult'

'/logout' - This enables the user to logout.

'/leaderboard' - This shows the leaderboard of all users by score

'/instructions' - The instructions page, Welcome page.

'/myanswers/all' - This shows the questions and answers,the user had already answered.

'/myanswers/sports'

'/myanswers/science'

'/myanswers/nature'

'/myanswers/general'





#BUILD INSTRUCTIONS.

Clone the repo onto a subdirectory of your base Apache server directory.



Install WAMP in your system. You can download and install it from the links given at the end of this file. Make the Apache and MySQL run using WAMP.



Make sure you also have Laravel 4.2 installed.



Edit the config.php file. Write in your Username , password and database name. Also change the same in database.php and .env file.



Import the database file 'spidertask3.sql' found in the root dir.





#PROCESS HOW IT GOES ABOUT.


An already registered user can enter the credentials in the login input fields and then proceed to the home page of the quiz.



A new comer to the quiz can enter the registration details through the input fields.


A user can answer all the unanswered questions and his score will be updated automatically. 
The user can view his score at any point of time. There will be a bar chart depicting the leaderboard.


The user can also have a look at the leaderboard which is depicted in tables. You can also sort the leaderboard by name or by score. Have fun.


#SCREENSHOTS

![signup](https://cloud.githubusercontent.com/assets/11163520/8749895/e5444cfa-2cc1-11e5-8484-f7985e346918.png)

Signup page 

![login](https://cloud.githubusercontent.com/assets/11163520/8749901/ea766f46-2cc1-11e5-878f-8fdcc62bf680.png)

Login page

![instructions page](https://cloud.githubusercontent.com/assets/11163520/8749920/138c24de-2cc2-11e5-903c-5946d86ac5cb.png)

Instructions page

![questions](https://cloud.githubusercontent.com/assets/11163520/8749932/2e895cb6-2cc2-11e5-9476-c9e00fa57e6c.png)

Questions Page. 

![answered_questions](https://cloud.githubusercontent.com/assets/11163520/8749936/35815af0-2cc2-11e5-9bb9-572ad07d8072.png)

Answered Questions Page

![createquiz](https://cloud.githubusercontent.com/assets/11163520/8749952/51c2102e-2cc2-11e5-967e-98d55ae02215.png)

Create_quiz_Page

![statspage](https://cloud.githubusercontent.com/assets/11163520/8749958/582eda14-2cc2-11e5-9927-3c214318a43f.png)

Stats_Page

![leaderboard](https://cloud.githubusercontent.com/assets/11163520/8749979/78c898b4-2cc2-11e5-9a70-09bb309e9594.png)

Leaderboard_Page








THANK U So MUCh...Learnt a lot !!!!.:-)

     			
				
