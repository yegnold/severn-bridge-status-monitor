Feature: Homepage Signup Form
	In order to sign up for bridge status change alerts
	As a potential user of the bridge status service
	I need to be able to sign up from the homepage
	
	Scenario: Arriving to the page as a visitor that is not logged in
		Given I am not logged in
		When I am on "/"
		Then there should be a signup form
		And there should be no errors
		
	Scenario: An account signup with no password
		Given I am not logged in
		When I try to sign up as "test@domain.com" with password ""
		Then I should not be signed up
		And I should be redirected to "/"
		And there should be a signup form
		And the signup form should have errors
		And the errors should contain "password"
		
	Scenario: A successful account signup
		Given I am not logged in
		And there is not a user "test@domain.com"
		When I try to sign up as "test@domain.com" with password "example"
		Then I should be signed up
		And I should be redirected to "/alerts"
		
	Scenario: A duplicate account signup
		Given I am not logged in
		And there is a user "test@domain.com"
		When I try to sign up as "test@domain.com" with password "test"
		Then I should not be signed up
		And I should be redirected to "/"
		And there should be a signup form
		And the signup form should have errors
		And the errors should contain "exists"