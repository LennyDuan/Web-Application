Feature: Cart Manager
	As a User
	I want to manager my cart

	Scenario: Create Cart
		Given I have a new cart Cart
		Then I can see "Cart"

	Scenario: Check Out Cart
		Given I have a new cart Cart
		Then I press "Check Out" and see the Order page

	Scenario: Empty Cart
		Given I have a new cart Cart
		Then I press "Empty Cart"
		And I should see 0 cart



