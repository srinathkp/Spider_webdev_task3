# Spider_webdev_task3

Hello,

This is Srinath from ICE Department.
Roll no. 110114084

I have used laravel framework v4.2 for this project.I chose laravel as I thought managing web pages would be easy and effective using an MVC.Basically,I have made 11 view pages,
3 models and 4(including base) controllers in this project.

Models :
 i)User

              For the user details.
        
		ii)Filter
		
		      This model is to map the questions(id) which has already been answered by a particular user to his/her user id to avoid displaying those questions again.
	 
	 iii)Question
	   
	          For the questions.

Controllers : 
           
		   AnswerController is for evaluating and displaying answers,QuestController deals with creating and displaying the questions applying the appropriate filter.
           
		   UserController is used for login,sign up and other operations related to the user model.

SERVER ROUTES :

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





BUILD INSTRUCTIONS.

Clone the repo onto a subdirectory of your base Apache server directory.



Install WAMP in your system. You can download and install it from the links given at the end of this file. Make the Apache and MySQL run using WAMP.



Make sure you also have Laravel 4.2 installed.



Edit the config.php file. Write in your Username , password and database name. Also change the same in database.php and .env file.



Import the database file 'spidertask3.sql' found in the root dir.





PROCESS HOW IT GOES ABOUT.





An already registered user can enter the credentials in the login input fields and then proceed to the home page of the quiz.



A new comer to the quiz can enter the registration details through the input fields.





A user can answer all the unanswered questions and his score will be updated automatically. 
The user can view his score at any point of time. There will be a bar chart depicting the leaderboard.



The user can also have a look at the leaderboard which is depicted in tables. You can also sort the leaderboard by name or by score. Have fun.






THANKS A LOT...!!!!

     			
				