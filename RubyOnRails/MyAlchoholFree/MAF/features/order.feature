Feature: Order Manager
	As a User
	I want to manager my order

	Scenario: Create Order 
		Given I have order name Order3
		When I go to the list of orders
		Then I should see "Order3" 
		And I Will go to the Home Page

	Scenario: Index Order 
		Given I have order name Order1, Order2
		When I go to the list of orders
		Then I should see "Order1"
		And I should see "Order2"

	Scenario: Delete Order
		Given I have order name Order
		When I go to the list of orders
		Then I should see "Order" 
		Then I delete Order
		And I have 0 orders
		

		
