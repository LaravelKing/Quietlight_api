Feature: Webtraffic

Scenario: An registered user trying to create a Webtraffic without a summary
Given that I want to make a new "Webtraffic"
	And its "body" is "Behat Body"
    And I authenticated with "behat@testing.com" and "secret" at "/session/login"
    And the request is sent as JSON
    When I request "/webtraffic"
    Then the response status code should be 400
    And the response should be JSON
    And the response has an "error" property

Scenario: An registered user trying to create a Webtraffic
Given that I want to make a new "Webtraffic"
    And its "summary_id" is "1"
    And I authenticated with "behat@testing.com" and "secret" at "/session/login"
    And the request is sent as JSON
    When I request "/webtraffic"
    Then the response status code should be 200
    And the response should be JSON
    And the response has an "summary_id" property
    And the response has an "id" property

Scenario: An registered user trying to update a Webtraffic
Given that I want to update a "Webtraffic"
    And I found an "id" from "/webtraffic" while authenticated as "behat@testing.com" and "secret" at "/session/login"
    And I authenticated with "behat@testing.com" and "secret" at "/session/login"
	And its "body" is "Behat Webtraffic Updated"
    And the request is sent as JSON
    When I request "/webtraffic/{id}"
    Then the response status code should be 200
    And the response should be JSON
    And the response has an "id" property
	And the "body" property equals "Behat Webtraffic Updated"
