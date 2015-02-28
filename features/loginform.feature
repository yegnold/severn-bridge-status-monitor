Feature: Homepage Login Form
	In order to manage my bridge status change alerts
	As an existing user of the bridge status service
	I need to be able to log in from the homepage
	
	Scenario: Arriving to the page as a visitor that is not logged in
		Given I am not logged in
		When I am on "/"
		Then there should be a login form
		And there should be no errors
		
	Scenario: A failed log in
		Given I am not logged in
		And there is a user "test@domain.com" with password "access"
		When I try to login as "test@domain.com" with password "wrong"
		Then I should not be logged in
		And I should be redirected to "/"
		And there should be a login form
		And there should be errors
		
	Scenario: A successful login
		Given I am not logged in
		And there is a user "test@domain.com" with password "access"
		When I try to login as "test@domain.com" with password "access"
		Then I should be logged in
		And I should be redirected to "/alerts"