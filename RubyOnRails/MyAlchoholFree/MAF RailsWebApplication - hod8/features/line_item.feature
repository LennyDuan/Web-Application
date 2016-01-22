Feature: LineItem Manager                                      
	As a Develeper
	I want to check that the LineItem controller can wor well

	Scenario: Create LineItem 
		Given I have a new item LineItem LineItem
		Then I check the cart
		And I will see "LineItem"

	Scenario: Index LineItem 
		Given I have a new item LineItem1, LineItem2
		Then I check the cart
		And I will see "LineItem1" 
		And I will see "LineItem2" 

	Scenario: Delete LineItem
		Given I have a new item LineItem3
		Then I check the cart
		And I will see "LineItem3"
		Then I press button "Empty Cart"
		And I should see 0 lineItem
