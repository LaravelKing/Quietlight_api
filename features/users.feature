Feature: Users

#creates and tests the user, but doesn't destroy it until zUsers feature

Scenario: An annonymous user trying to register
    Given that I want to make a new "User"
    And his "email" is "behatruntime@testing.com"
    And his "password" is "secret"
    And his "first_name" is "Behat"
    And his "last_name" is "Testing"
    And the request is sent as JSON
    When I request "/session/register"
	Then the response status code should be 200
    And the response should be JSON
    And the response has an "email" property
    And the response has an "first_name" property
    And the response has an "last_name" property

Scenario: An annonymous user trying to register with an email that is already registered
    Given that I want to make a new "User"
    And his "email" is "behat@testing.com"
    And his "password" is "already registered"
    And the request is sent as JSON
    When I request "/session/register"
    Then the response status code should be 400
    And the response should be JSON
    And the response has an "error" property

Scenario: An annonymous user trying to to login with good credentials
    Given that I want to make a new "User"
    And his "email" is "behatruntime@testing.com"
    And his "password" is "secret"
    And the request is sent as JSON
    When I request "/session/login"
    Then the response status code should be 200
    And the response should be JSON
    And the response has an "session" property
    And the response does not have a "password" property

Scenario: An annonymous user trying to to login with bad credentials
    Given that I want to make a new "User"
    And his "email" is "behatruntime@testing.com"
    And his "password" is "not secret"
    And the request is sent as JSON
    When I request "/session/login"
    Then the response status code should be 404
    And the response should be JSON
    And the response has an "error" property

Scenario: An authenticated user trying to to logout
    Given that I want to delete a "Session"
    And I authenticated with "behatruntime@testing.com" and "secret" at "/session/login"
    And the request is sent as JSON
    When I request "/session"
    Then the response status code should be 200
    And the response should be JSON

Scenario: An annonymous user trying to delete an account
    Given that I want to delete an "User"
    When I request "/session/user"
    Then the response status code should be 401
    And the response should be JSON
    And the response has an "error" property

Scenario: An authenticated user trying to delete an account
    Given that I want to delete an "User"
    And I authenticated with "behatruntime@testing.com" and "secret" at "/session/login"
    When I request "/session/user"
    Then the response status code should be 200






