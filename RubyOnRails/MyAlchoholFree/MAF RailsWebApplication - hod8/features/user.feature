Feature: User Login/Logout 
	As a customer
	I want to have function to registration/login/logout 

	Scenario: User registration
		Given I go to the registration pages
		And I fill in "email" with "test@test.com"
		And I fill in "password" with "123456"
		And I fill in "password" with "123456"
		When I go to the main page
		Then I can see welcome.

	Scenario: User login 
		Given I go to the login pages
		And I fill in "email" with "test@test.com"
		And I fill in "password" with "123456"
		When I go to the main page
		Then I can see welcome.

	Scenario: User logout 
		Given I have login 
		When I click logout button
		Then I can see I have log out.

