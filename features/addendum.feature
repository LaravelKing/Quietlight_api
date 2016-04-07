Feature: Addendum

Scenario: An registered user trying to create a Addendum without a summary
Given that I want to make a new "Addendum"
    And its "description" is "Behat Body"
    And I authenticated with "behat@testing.com" and "secret" at "/session/login"
    And the request is sent as JSON
    When I request "/addendum"
    Then the response status code should be 400
    And the response should be JSON
    And the response has an "error" property

Scenario: An registered user trying to create a Addendum
Given that I want to make a new "Addendum"
    And its "summary_id" is "1"
    And I authenticated with "behat@testing.com" and "secret" at "/session/login"
    And the request is sent as JSON
    When I request "/addendum"
    Then the response status code should be 200
    And the response should be JSON
    And the response has an "summary_id" property
    And the response has an "id" property
    And the response has a "created_by" property
    And the "created_by" property is an object

Scenario: An registered user trying to update a Addendum
Given that I want to update a "Addendum"
    And I found an "id" from "/addendum" while authenticated as "behat@testing.com" and "secret" at "/session/login"
    And I authenticated with "behat@testing.com" and "secret" at "/session/login"
    And its "description" is "Behat Addendum Updated"
    And its "file" is "file.pdf"
    And the request is sent as JSON
    When I request "/addendum/{id}"
    Then the response status code should be 200
    And the response should be JSON
    And the response has an "id" property
    And the "description" property equals "Behat Addendum Updated"
    And its "file" is "file.pdf"
