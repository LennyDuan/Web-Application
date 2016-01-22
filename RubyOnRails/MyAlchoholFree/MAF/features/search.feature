Feature: Search
	As a user
	I want to be able to sercah for wines by wines' name or description
	So that I quickly find wines

	Scenario: Find Products by title
		Given we have the following Products:
			| title     | description   |
			| red       | description 1 |
			| blue      | description 2 |
			| red blue  | description 3 |
			| white     | description 4 |
		When I search for Product "red"
		Then the result:
			| title     | description   |
			| red       | description 1 |
			| red blue  | description 3 |

