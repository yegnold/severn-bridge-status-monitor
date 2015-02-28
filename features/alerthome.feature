Feature: Alert home
	In order to manage my bridge status change alerts
	As an existing user of the bridge status service
	I need to see be able to manage my alert subscription via a user interface on the web
	
	Scenario: Arriving to the page as a visitor that is not logged in
		Given I am not logged in
		When I am on "/alerts"
		Then I should be redirected to "/"
		
	Scenario: Arriving to the page as a logged in visitor
		Given I am logged in as "test@domain.com"
		When I am on "/alerts"
		Then the page should contain "test@domain.com"