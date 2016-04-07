Feature: Title

Scenario: An registered user trying to create a Title without a summary
Given that I want to make a new "Title"
	And its "name" is "Behat Title"
    And I authenticated with "behat@testing.com" and "secret" at "/session/login"
    And the request is sent as JSON
    When I request "/title"
    Then the response status code should be 400
    And the response should be JSON
    And the response has an "error" property

Scenario: An registered user trying to create a Title
Given that I want to make a new "Title"
    And its "summary_id" is "1"
    And I authenticated with "behat@testing.com" and "secret" at "/session/login"
    And the request is sent as JSON
    When I request "/title"
    Then the response status code should be 200
    And the response should be JSON
    And the response has an "summary_id" property
    And the response has an "id" property

Scenario: An registered user trying to update a Title
Given that I want to update a "Title"
    And I found an "id" from "/title" while authenticated as "behat@testing.com" and "secret" at "/session/login"
    And I authenticated with "behat@testing.com" and "secret" at "/session/login"
	And its "name" is "Behat Title Updated"
    And its "advisor_id" is "1"
    And its "tagline" is "a tagline"
    And its "asking_price" is "100000"
    And the request is sent as JSON
    When I request "/title/{id}"
    Then the response status code should be 200
    And the response should be JSON
    And the response has an "id" property
	And the "name" property equals "Behat Title Updated"
	And the "advisor_id" property is an object
	And the "tagline" property equals "a tagline"
	And the "asking_price" property equals "100000"


Scenario: An registered user trying to update a Title with a fake advisor (shouldn't update)
Given that I want to update a "Title"
    And I found an "id" from "/title" while authenticated as "behat@testing.com" and "secret" at "/session/login"
    And I authenticated with "behat@testing.com" and "secret" at "/session/login"
    And its "advisor_id" is "99999"
    And the request is sent as JSON
    When I request "/title/{id}"
    Then the response status code should be 200
    And the response should be JSON
    And the response has an "id" property
	And the "advisor_id" property equals "1"
