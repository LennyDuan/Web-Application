Feature: Product Manager
	As a Adim
	I want to create and manager wines

	Scenario: Index Products List
		Given I have wine title Wine1, Wine2
		When I go to the list of wines
		Then I should see "Wine1"
		And I should see "Wine2"

	Scenario: Create Valid Wine
		Given I have wine title Wine
		And I am on the list of wine
		Then I should see "Wine3"

	Scenario: Delete wine
		Given I have wine title Wine
		And I am on the list of wine
		Then I should see "Wine"
		Then I delete Wine
		And I have 0 wines

